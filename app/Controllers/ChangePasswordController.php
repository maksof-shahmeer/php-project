<?php 
namespace App\Controllers;

use App\Models\UserModel;
use codeIgniter\Controller;


class ChangePasswordController extends BaseController
{

    public function _construct(){
        helper(['url', 'form']);
    }
    public function index() {
        if(session()->get('loginUser')){
        return view('forms/changepassword.php');
        } else {
            return redirect()->to('/');
        }
    }
    public function passwordChange()
    {
        $validation = $this->validate([
            
            'old_password' => [
                'rules' => 'required|min_length[8]|max_length[55]',
                'errors' => [
                    'required' => 'Old Password is must required',
                    'min_length' => 'At least 8 characters required',
                    'max_length' => 'Password maximum limit is 55 characters'
                ]
            ],
                'new_password' => [
                    'rules' => 'required|min_length[8]|max_length[55]',
                    'errors' => [
                        'required' => 'Password is must required',
                        'min_length' => 'At least 8 characters required',
                        'max_length' => 'Password maximum limit is 55 characters'
                    ]
                ],
                'cnew_password' => [
                    'rules' => 'required|min_length[8]|max_length[55]|matches[new_password]',
                    'errors' => [
                        'required' => 'Confirm password is must required',
                        'min_length' => 'At least 8 characters required',
                        'max_length' => 'Confirm Password maximum 55 characters',
                        'matches' => 'Confirm password not matched'
                    ]
                ],
        ]);
        if(!$validation){
            return view('forms/changepassword.php', ['validation' => $this->validator, 'data' => $_REQUEST]);
        }   
        else{
            csrf_field(); 
            $users = new UserModel();
            extract($_REQUEST);
            $data['all_users']  = $users->findAll();
            // $userid = $data['all_users'][0]['user_id'];
            // $userid = '15';
            // $result = $users->where('user_id', $userid)->first();
            // $id = session()->getFlashdata('lastloginUsers');
            // $user_id = isset($user_id) ? $user_id : '0';
            // $result = $users->get_user_by_email($email); 
            $usersModel = new \App\Models\UserModel();                          
            $result = session()->get('loginUser');
            $userid = $result['user_id'];
            $email = $result['email'];
            $oldpassword = $this->request->getPost('old_password');
            $for_password = $users->get_user_by_id($userid);
            $unhashed_password = $this->request->getPost('new_password');
            // $password = $this->request->getPost('new_password');
            $password = password_hash($unhashed_password, PASSWORD_BCRYPT);
            
            // echo $last_user;
            if($userid > 0) {
                if(password_verify($oldpassword, $result['password_hash'])) {
                    $reserve = $users->updating_password($password, $email);
                    return view('forms/dashboard.php', $data);
                    // echo $reserve;
                } 
                else {
                    session()->setFlashdata('oldpassworderror', 'Old password does not matched');
                    return view('forms/changepassword.php'); 
                 }
            }
            else {
                redirect()->to('/');
            }
        }
    }
}

?>