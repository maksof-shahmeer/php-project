<?php

namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class SignupController extends BaseController
{
    public function index() 
    { 
        $users = new UserModel();
        $username = isset($_POST['txt']) ? $_POST['txt'] : '';
        $email = isset($_POST['signemail']) ? $_POST['signemail'] : '';
        $password = isset($_POST['pswd']) ? $_POST['pswd'] : '';
        $password = isset($_POST['pswd']) ? $_POST['pswd'] : '';

        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $token = md5((string) $email);
        $db_data = [
            'username' => $username,
            'email' => $email,
            'password_hash' => $password_hash,
            'token' => $token
        ];
        $users->insert($db_data);
        
        $user = $users->get_user_by_email($email);



        return view('forms/confirmemail.php',['token'=>$token, 'user_id'=> $user->user_id ]);
        // print_r($user);
        

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