<?php

namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class SignupController extends BaseController
{
    public function validation() 
    {
        $validation = $this->validate([
            'txt' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'pwsd'=>'required|min_length[8]|max_length[20]',
            'confirmpswd'=>'required|min_length[8]|max_length[20]|matches[password]'
        ]);
        if(!$validation){
            return view('', ['validation' => $this->validator]);
        }
        else{
            return view('forms/index.php');
        }
    }




    
    

    public function token_verification() {
        $users = new UserModel();
        extract($_REQUEST);
        $user_token = isset($token) ? $token: '';
        $user_id = isset($user_id) ? $user_id : '';
        echo $user_token;
        echo $user_id;
        $result = $users->where('user_id', $user_id)->first();
        print_r($result);
        $users->token_verify($user_id, $user_token);
        $users->removing_token($user_id, $user_token);
        
        return redirect()->to('/');

    }
}