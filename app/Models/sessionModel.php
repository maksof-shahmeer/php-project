<?php

namespace App\Models;

use CodeIgniter\Model;

class sessionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'login_sessions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id','token'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function delete_user_by_id($userid) {
        $db = \Config\Database::connect();
        $sql = "DELETE FROM login_sessions WHERE user_id LIKE '$userid'";
        return $db->query($sql);
    }
    
    public function get_user_by_id($userid) {
        $db = \Config\Database::connect();
        $res =  $db->query("SELECT * FROM login_sessions WHERE user_id LIKE '$userid';");
        return $res->getRow();
        // return $res;
    }
    // public function token_verify($user_id, $user_token) {
    //     $db = \Config\Database::connect();
    //     $sql = "UPDATE users SET verified_user = 1 WHERE user_id = '$user_id' AND token LIKE '$user_token'";
    //     // return $sql;
    //     return $db->query($sql);
        
    // }
    // public function removing_token($user_id, $user_token) {
    //     $db = \Config\Database::connect();
    //     $sql = "UPDATE users SET token = null WHERE user_id = '$user_id' AND token LIKE '$user_token'";
    //     // return $sql;
    //     return $db->query($sql);
    // }
    
    // public function updating_password($password, $email) {
    //     $db = \Config\Database::connect();
    //     $sql = "UPDATE users SET password_hash = '$password' WHERE email = '$email'";
    //     // return $sql;
    //     return $db->query($sql);
    // }
    // public function updating_reset_token($token, $userid) {
    //     $db = \Config\Database::connect();
    //     $sql = "UPDATE users SET token = '$token' WHERE user_id = '$userid'";
    //     // return $sql;
    //     return $db->query($sql);
    // }
   
    

}

