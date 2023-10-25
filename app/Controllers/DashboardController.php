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
        if(session()->get('loginUser')){
            $users = new UserModel();

            $data['all_users']  = $users->findAll();
            return view('forms/dashboard.php',$data);
        }
        else {
            return redirect()->to('/');
        }
    }  
}