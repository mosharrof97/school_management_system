<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BranchModel;

class BranchController extends BaseController
{
    // View Branch
    public function index()
    {
        $branch=new BranchModel;
        $data=[
            'page_title'=>'All Branch',
            'page_heading'=>'All Branch',
            'branch'=>$branch->orderby('branch_id')->paginate(4,'group'),
            'pager'=>$branch->pager,
        ];

        return View('dashboard/page/branch/all_branch', $data);
    }

    //Create Branch
    public function addbranch()
    {
        $branch=new BranchModel;
        $data=[
            'page_title'=>'Add Branch',
            'page_heading'=>'Add Branch',
        ];
        if($this->request->getMethod()=='post'){
            $branch_name = $this->request->getPost('branch-name');
            $address = $this->request->getPost('address');
            $formData=[
                'branch_name'=>$branch_name,
                'address'=>$address,
            ];
            $branch->insert($formData);
        }
        return View('dashboard/page/branch/add_branch', $data);
    }

    //Edit Branch
    public function edit($id)
    {
        $branch=new BranchModel;
        $data=[
            'page_title'=>'All Branch',
            'page_heading'=>'All Branch',
            'branch'=>$branch->where('branch_id',$id)->first(),
        ];

        return View('dashboard/page/branch/update_branch', $data);
    }

    //Update Branch
    public function update($id)
    {
        $branch=new BranchModel;
        
        if($this->request->getMethod()=='post'){
            $branch_name = $this->request->getPost('branch-name');
            $address = $this->request->getPost('address');
            $formData=[
                'branch_name'=>$branch_name,
                'address'=>$address,
            ];
            $branch->update($id,$formData);
            return redirect()->to('dashboard/all_branch');
        }
    }

    //Delete Branch
    public function delete($id)
    {
        $branch=new BranchModel;
        $branch->where('branch_id',$id)->delete($id);
        return redirect()->to('dashboard/all_branch');
    }
}
