<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users' ;
    protected $allowedFields = ['nom', 'prenoms', 'email', 'motdepasse','updated_at'] ;
    protected $beforeInsert = ['beforeInsert'] ;
    protected $beforeUpdate = ['beforeUpdate'] ;

    protected function beforeInsert(array $data)
    {
        //connaitre si les informations ont ete deja utilise
        $data = $this->passwordHash($data) ;
        return $data ;
    }

    protected function beforeUpdate(array $data)
    {
        //connaitre si les informations ont ete deja modifie
        $data = $this->passwordHash($data) ;
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['motdepasse'])) 
            $data['data']['motdepasse'] = password_hash($data['data']['motdepasse'],PASSWORD_DEFAULT) ;
            
            
        return $data ;
        
    }

    
}