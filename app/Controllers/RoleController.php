<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;

class RoleController extends BaseController
{
    //all view role
    public function index()
    {
        $roles = new RoleModel();
        $data=[
            "page_title"=> "All Role",
            "page_heading"=> " All Role",
            'role' => $roles->orderby('role_id')->paginate(3, 'group'),
            'pager' => $roles->pager,
        ];
        
        return View("dashboard/page/role/all_role", $data);
    }

    //Delete  role
    public function Delete($id)
    {
        $roles = new RoleModel();
       $roles ->where('role_id', $id)->delete($id);
       return redirect()->to("/dashboard/all_role");

    }

    //Create role
    public function addrole()
    {
        $roles = new RoleModel();
        $data=[
            "page_title"=> "Add Role",
            "page_heading"=> " Add Role"
            ];
        
        if($this->request->getMethod() == "post"){
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => [
                    'label' => 'Name', 
                    'rules' => "required|min_length[3]|max_length[20]",
                ],
                ]);

            $name = $this->request->getPost("name");
            $myData=[
                "name"=> $name,
            ];
            if ($validation->run($myData)) {
                $formData=[
                    "name"=> $name,
                ];

                $roles->insert($formData);
                return redirect()->to("/dashboard/add_role");

            }else{
                $data["validation"] = $validation->getErrors();
            }
        }
        return View("dashboard/page/role/add_role", $data);
    }

    //Edit role
    public function edit($id)
    {
        $roles= new RoleModel();
        $data=[
            "page_title"=> "Update Role",
            "page_heading"=> "Update Role"
        ];
        $data['role'] =$roles->where('role_id', $id)->first();

        return View("dashboard/page/role/update_role", $data);
    }

    //Update role
    public function update($id)
    {
        $roles= new RoleModel();

        if ($this->request->getMethod() == "post") {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => [
                    'label' => 'Name', 
                    'rules' => "required|min_length[3]|max_length[20]",
                ],
                ]);

            $name = $this->request->getPost("name");
            $myData=[
                "name"=> $name,
            ];
            if ($validation->run($myData)) {
                $formData=[
                    'name' => $name,
                ];
                $roles->update($id, $formData);
                $session =  session();
                $session->setFlashData("success", "Successful Registration");
                return redirect()->to("/dashboard/all_role");
            }
        }else{
            $data["validation"] = $validation->getErrors();
            echo "invalid";
        }
        
    }
}
