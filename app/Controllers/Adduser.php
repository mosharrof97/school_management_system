<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class Adduser extends BaseController  
{
    
    // public function index(): string
    // {
        
        
        //  $validData=[];
        // // $validData["validation"] == null;
        // if($this->request->getMethod() == 'post'){
        //     $rules=[
        //         'name' => 'required',
        //         'username' => 'required|max_length[20]',
        //         'password' => 'required|max_length[20]|min_length[8]',
        //         'email'    => 'required|max_length[50]|valid_email',
        //         'image'    => 'required|max_length[50]|valid_email',
    
        //     ];
        //     if($this->validate($rules)){
        //             echo "Successful";
        //     }else{
        //         $validData['validation'] == $this->validator;
        //     }
        // }else{
            
        // }
        
        // $this->save(["name"=>$name, "username"=>$username, "email"=>$email, "password"=>$password]);
        // session()->setFlashdata("success","Data inserted successfully");
        
       
        
    // }

    public function index(){

        $user = new UserModel();
        $user_role = new RoleModel();
        $data=[
            "page_title"=> "Add User",
            "page_heading"=> " Add user"

        ];
        // $user_role = new RoleModel();
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
                        "rules" => "required|min_length[3]|max_length[50]|valid_email|is_unique[user.email]"
                    ],
                    "role" => [ 
                        "label" => "Role", 
                        "rules" => "required"
                    ],
                    "password" => [
                        "label" => "Password", 
                        "rules" => "required"
                    ],
                ]);
            
                    $name=$this->request->getPost('name');
                    $username=$this->request->getPost('username');
                    $email=$this->request->getPost('email');
                    $role=$this->request->getPost('role');
                    $password=$this->request->getPost('password');
                    $file = $this->request->getFile('file');
                    $fileName = $file->getRandomName();

                    $password = password_hash($password, PASSWORD_BCRYPT);

                    $myData = [
                        "name"=> $name,
                        "username"=> $username,
                        "email"=> $email,
                        "role"=> $role,
                        "password"=> $password,
                    ];
                    
                if($validation->run($myData)){ 
                    $formData=[ 
                        "name"=>$name, 
                        "username"=>$username,
                        "email"=>$email,
                        "role_id" => $role,
                        "password"=>$password,
                        'image'=>$fileName,
                    ]; 
                    $file->move('uploads/img', $fileName); 
                    $insert = $user->insert($formData);
                    $session =  session();
                    $session->setFlashData("success", "Successful Registration");
                    return redirect()->to("/dashboard/add_user");
                }else{
                    $data["validation"] = $validation->getErrors();
                }
            }
        return view('dashboard/page/add_user', $data);
    }
}
?>
