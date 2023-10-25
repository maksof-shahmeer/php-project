<?php

namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class resetController extends BaseController
{
    public function _construct(){
        helper(['url', 'form']);
    }
    public function view_reset_email() {
        $token =  bin2hex(random_bytes(64));    
        session()->set('token', $token);
       
        // $data['users_id'] = session()->get('loggedUser') ?: null;
        // print_r ($data);
        return view('forms/resetEmail.php');
    }
    public function validation() 
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is must required',
                    'valid_email' => 'You must enter a valid email address',
                    'is_not_unique' => 'This email is not registered'
                ]
            ],
        ]);
        if(!$validation){
            return view('forms/resetEmail.php', ['validation' => $this->validator]);
        }
        else{
            $users = new UserModel();
            $usersModel = new \App\Models\UserModel(); 
            $email = $this->request->getPost('email');
            $login_user = $usersModel->get_user_by_email($email);
            $userid = $login_user->user_id;
            session()->set('loggedUser', $userid);
            $token = session()->get('token');
            $res = $users->updating_reset_token($token, $userid);
            
            // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            // $users = [
            // //      'password_hash' => $hashed_password,
            //         'token' => $token
            //     ];       
                // $usersModel = new \App\Models\UserModel(); 
                // $query = $usersModel->insert($users);
                
               
            // $userid = 
            
            return view('forms/resetpassword.php');
            // echo $userid;
            
            
        }
    }

    
    
    public function verification() {
        

        $validation = $this->validate([
            'password_hash' => [
                'rules' => 'required|min_length[8]|max_length[55]',
                'errors' => [
                    'required' => 'Password is must required',
                    'min_length' => 'At least 8 characters required',
                    'max_length' => 'Password must maximum 55 characters'
                ]
            ],
            'confirmpswd' => [
                'rules' => 'required|min_length[8]|max_length[55]|matches[password_hash]',
                'errors' => [
                    'required' => 'Confirm password is must required',
                    'min_length' => 'At least 8 characters required',
                    'max_length' => 'Confirm Password maximum 55 characters',
                    'matches' => 'Confirm password not matched'
                ]
            ],
        ]);
        if(!$validation){
            return view('forms/resetpassword.php',['validation' => $this->validator]);
        }
        else {
            $users = new UserModel();
            // $user_token = isset($tokens) ? $tokens: '';
            // $tokens = isset($reset_token) ? $reset_token : '';
            $user_token = session()->get('resetToken');
            $unhashed_password = $this->request->getPost('password_hash');
            $password = password_hash($unhashed_password, PASSWORD_BCRYPT);
            $user_id = session()->get('loggedUser');
            $result = $users->verfying_userby_ID_token($user_id, $user_token);
            // $result = $users->where('token', $user_token)->first();
            // print_r($result);
            
            if ($result == null) {
                session()->set('token_error', 'Sorry verification failed');
                return redirect()->to('/');
                
            }
            else {
                $email = $result->email;
                $res2 = $users->removing_token($user_id, $user_token);
                $res3 = $users->updating_password($password, $email);
                session()->set('token_error', 'Password changed successfully');
                return redirect()->to('/');
            
           
             }
        }
    }
}