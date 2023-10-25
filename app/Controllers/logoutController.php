<?php

namespace App\Controllers;

class logoutController extends BaseController
{
    public function index()
    {
        $sessionModel = new \App\Models\sessionModel(); 
        $userid = session()->get('userid');
        $res = $sessionModel-> delete_user_by_id($userid);
        // echo $userid;
        session()->destroy();
        return redirect()->to(''); // Redirect the user to the login page after logging out.
    }
   
}

?>