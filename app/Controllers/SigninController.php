<?php namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class SigninController extends BaseController
{
    public function _construct(){
        helper(['url', 'form']);
    }

    public function index() 
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
                'loginpswd' => [
                    'rules' => 'required|min_length[8]|max_length[55]',
                    'errors' => [
                        'required' => 'Password is must required',
                        'min_length' => 'At least 8 characters required',
                        'max_length' => 'Password maximum limit is 55 characters'
                    ]
                ],
            ]);
        if(!$validation){
            return view('forms/index2.php', ['validation' => $this->validator]);
        }
        else{
            $userModel = new UserModel();
            $all_users = $userModel->findAll();
           
            //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $users = new UserModel();
            $username = isset($_POST['txt']) ? $_POST['txt'] : '';
            
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('loginpswd');
            $result = $users->where('email', $email)->first(); 
            $userid = $last_id = $user_id = $result['user_id'];
            $sessionModel = new \App\Models\sessionModel();
            $login_verify = $sessionModel->get_user_by_id($userid);
            if($result['user_id'] > 0 && $login_verify == null) {
                if(password_verify($password, $result['password_hash']) && $result['verified_user'] == 1) {
                    session()->set('loginUser', $result);
                    session()->set('userid', $userid);
                    $token =  bin2hex(random_bytes(64));    
                    $login_users = [
                    'user_id' => $userid,
                    'token' => $token,
                ];       
                // $usersModel = new \App\Models\UserModel(); 
                $query = $sessionModel->insert($login_users);
                    return redirect()->to('/dashboard');
                } 
                else if($result['verified_user'] != 1 ){     
                    $token =  bin2hex(random_bytes(64));  
                    // session()->setFlashdata('not_verified', 'Email not verified');
                    $userModel = new UserModel();
                    session()->set('loggedUser', $last_id);
                    session()->set('token', $token);
                    session()->set('confirm_email_access', true);
                    $userModel->updating_reset_token($token, $userid); 
                    return redirect()->to('/confirm_email');
                }
                else {
                    session()->setFlashdata('fail', 'Enter correct password');
                return redirect()->to('/')->withInput();
            }
        }
        else {
            session()->setFlashdata('alreadyLoggedIn', 'You are already logged in');
            return redirect()->to('/')->withInput();
        }
        
        }   
    }
}