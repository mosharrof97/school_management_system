<?php
namespace App\Libraries;

class Auth{
    public static function setAuth($userInfo){
        $session = session();
        $userData = [
            'id' => $userInfo['user_id'],
            'name' => $userInfo['name'],
            'username' => $userInfo['username'],
            'email' => $userInfo['email'],
            'image' => $userInfo['image'],
            'logged_in' => true
        ];
        $session->set($userData);
    }

    public static function id(){
        $session = session();
        if($session->hes('logged_in')){
                if($session->hes('userdata')){
                    return $session->get('userdata')['id'];
                }else{
                    return null;
                }
        }else{
            return null;
        }
    }


    public static function check(){
        $session = session();
        return $session -> has('logged_in');
    }

    public static function forget(){
        $session = session();
        $session ->remove('logged_in');
        $session ->remove('userdata');
    }


    public static function user(){
        $session = session();
        if($session->hes('logged_in')){
            if($session->hes('userdata')){
                return $session->get('userdata');
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
    
    
}