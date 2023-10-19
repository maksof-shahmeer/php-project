<?php namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;
class DashboardController extends BaseController
{
    public function index() 
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $users = new UserModel();
        $username = isset($_POST['txt']) ? $_POST['txt'] : '';
        $data['all_users']  = $users->findAll();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('loginpswd');
        $result = $users->where('email', $email)->first(); 
        if($result) {
            if(password_verify($password, $result['password_hash'])) {
                return view('forms/dashboard.php', $data);
            } 
            else {
                return redirect()->to('/');
            }
        }
        return redirect()->to('/');
    
    }
    else {
        return redirect()->to('/');
    }
    
}
}
