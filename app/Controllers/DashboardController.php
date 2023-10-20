<?php namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class DashboardController extends BaseController
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
           return view('forms/dashboard.php', ['all_users' => $all_users]);
            //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $users = new UserModel();
            $username = isset($_POST['txt']) ? $_POST['txt'] : '';
            $data['all_users']  = $users->findAll();
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('loginpswd');
            $result = $users->where('email', $email)->first(); 
            if($result) {
                if(password_verify($password, $result['password_hash']) && $result['verified_user'] == 1) {
                    return view('forms/dashboard.php', $data);
                } 
                else {
                    session()->SetFlashdata('fail', 'Enter correct password');
                    return redirect()->to('/')->withInput(); 
                }
            
        

            }
        }   
    }
}