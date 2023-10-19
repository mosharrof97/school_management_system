<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\RoleModel;

class UpdateUser extends BaseController
{
    public function index( $id)
    {
        $user = new UserModel();
        $user_role = new RoleModel();
        $data=[
            "page_title"=> "Add User",
            "page_heading"=> " Add user",
            
        ];
        // $data['user'] = $user->where('user_id', $id)->first();
        $data['role'] =$user_role->findAll();
            if ($this->request->getMethod() == "post") {

                $validation =  \Config\Services::validation();
                $validation->setRules([
                    "name" => [
                        "label" => "Name", 
                        "rules" => "required|min_length[3]|max_length[20]"
                    ],
                    "username" => [
                        "label" => "User Name", 
                        "rules" => "required|min_length[3]|max_length[20]"
                    ],
                    "email" => [
                        "label" => "Email", 
                        "rules" => "required|valid_email"
                    ],
                    "role" => [
                        "label" => "Role", 
                        "rules" => "required"
                    ],
                    // "file" => [
                    //     "label" => "Role", 
                    //     "rules" => "required"
                    // ],
                ]);

                    $name=$this->request->getPost('name');
                    $username=$this->request->getPost('username');
                    $email=$this->request->getPost('email');
                    $role=$this->request->getPost('role');
                    $file = $this->request->getFile('image');
                    $fileName = $file->getRandomName();


                    $myData=[
                        "name"=>$name,
                        "username"=>$username,
                        "email"=>$email,
                        "role"=>$role,
                        // "file"=>$file
                    ];
                if($validation->run($myData)){
                    
                    $formData=[ 
                        "name"=>$name, 
                        "username"=>$username,
                        "email"=>$email,
                        "role_id" => $role,
                        "image"=>$fileName, 
                    ]; 
                    // print_r($formData);
                    $file->move('uploads/img', $fileName); 
                    $user->update($id, $formData);
                    
                   
                    $session =  session();
                    $session->setFlashData("success", "Successful Registration");
                    return redirect()->to("/dashboard/all_user");
                    // return $this->response->redirect(site_url('/dashboard/update_user/'));
                }else{
                    $data["validation"] = $validation->getErrors();
                    echo "Invalid input"; 
                }   
                
            }
            return view('dashboard/page/update_user', $data);

        
    }

    public function edit($id = 0){
        $users = new UserModel();
        $user_role = new RoleModel();
        $data=[
            "page_title"=> "Add User",
            "page_heading"=> " Add user",
            'role' => $user_role->findAll(),
            'user'=> $users->where('user_id', $id)->first()
        ];
        return view('dashboard/page/update_user', $data);
  
     }
    
}
