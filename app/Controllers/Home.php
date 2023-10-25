<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $sessionModel = new \App\Models\sessionModel(); 
        $userid = session()->get('userid');
        $res = $sessionModel-> delete_user_by_id($userid);
        session()->destroy();
        return view('forms/index2.php');
    }
    public function redirect($segment = null)
    {
    return redirect()->to('/');
    }
}

?>