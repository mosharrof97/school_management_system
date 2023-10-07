<?php

namespace App\Controllers;
use App\Models\UserModel;

class Alluser extends BaseController  
{

    public function __construct(){
        helper(['url']);
        
    }
    public function index(): string
    {
        $user  = new UserModel();
        $data=[
            "page_title"=> "Welcome to Codelgniter",
            "page_heading"=> " All User",
            // 'users'=> $this->user->findAll(),
            // 'users' => $user->orderby('user_id','DESC')->paginate(3, 'group'),
            'users' => $user->select('user.*, role.name as role_name')->join('role', 'role.role_id = user.role_id')->paginate(4, 'group'),
            'pager' => $user->pager,
        ];
        return view('dashboard/page/all_user', $data);
        
    }
    public function delete($id = null){ 
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->delete($id);
        return $this->response->redirect(site_url('/dashboard/all_user'));
    }   
}
?>
