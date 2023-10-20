<?php

namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class SignupController extends BaseController
{
    public function _construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('forms/index.php');
    }

    public function validation() 
    {
        $validation = $this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username is required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is must required',
                    'valid_email' => 'You must enter a valid email address',
                    'is_unique' => 'Email is already taken'
                ]
            ],
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
            return view('forms/index.php', ['validation' => $this->validator, 'data'=>$_REQUEST]);
        }
        else{
                $name = $this->request->getPost('username');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password_hash');
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $token =  bin2hex(random_bytes(64));    
                $users = [
                    'username' => $name,
                    'email' => $email,
                    'password_hash' => $hashed_password,
                    'token' => $token,
                ];       
                $usersModel = new \App\Models\UserModel(); 
                $query = $usersModel->insert($users);
                if (!$query) {
                    return redirect()->back()->with('fail', 'Something went wrong');
                } else {
                    $last_id = $usersModel->insertID();
                    session()->set('loggedUser', $last_id);
                    session()->set('token', $token);
                    return redirect()->to('/confirm_email');
                }

            
           
        }
    }

    

    public function token_verification() {
        $users = new UserModel();
        extract($_REQUEST);
        $user_token = isset($token) ? $token: '';
        $user_id = isset($user_id) ? $user_id : '';
        $result = $users->where('user_id', $user_id)->first();
        $res1 = $users->token_verify($user_id, $user_token);
        $res2 = $users->removing_token($user_id, $user_token);
        return redirect()->to('/');
    }
}