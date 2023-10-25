<?php namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class ConfirmEmail extends BaseController
{
    public function index(){
        if (session()->get('confirm_email_access')) {
        $data['token'] = session()->get('token') ?: null;
        $data['user_id'] = session()->get('loggedUser') ?: null;
        return view('forms/confirmemail.php', $data);
        }
        else {
            return redirect()->to('/');
        }
    }
}
