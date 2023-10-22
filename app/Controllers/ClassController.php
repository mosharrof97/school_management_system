<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClassModel ;
use App\Models\BranchModel ;

class ClassController extends BaseController
{
    public function index()
    {
        $class = new ClassModel ;
        $data=[
            'page_title'=>'All Class',
            'page_heading'=>'All Class',
            'class'=>$class->join('branch', 'branch.branch_id = class.branch_id')->orderby('class_id','DESC',)->paginate(20, 'group'),
            'pager'=>$class->pager,
        ];

        return view('dashboard/page/class/all_class', $data);

    } 

    //class Create
    public function addclass(){
        $class = new ClassModel ;
        $branch = new BranchModel ;
        $data=[
            'page_title'=>'Add Class',
            'page_heading'=>'Add Class',
            'branch'=> $branch->findAll(),
        ];
        if($this->request->getMethod()=='post'){
            $date=$this->request->getPost('date');        
            $class_name=$this->request->getPost('class-name');        
            $branch=$this->request->getPost('branch');        
            $teacher=$this->request->getPost('teacher');        
            $time=$this->request->getPost('time'); 
            $formData=[
                'date'=>$date,
                'class_name'=>$class_name,
                'branch_id'=>$branch,
                'teacher'=>$teacher,
                'time'=>$time
            ];

            $class->insert($formData);
            return redirect()->to('/dashboard/add_class');
        }
        return View('dashboard/page/class/add_class',$data);
    }

    //edit Class
    public function edit($id){
        $class = new ClassModel ;
        $data=[
            'page_title'=>'Add Class',
            'page_heading'=>'Add Class',
            'class'=>$class->where('class_id',$id)->first(),
        ];
        return View('dashboard/page/class/update_class',$data);
    }

    //Update class
    public function update($id){
        $class = new ClassModel ;
        if($this->request->getMethod()=='post'){
            $date=$this->request->getPost('date');        
            $class_name=$this->request->getPost('class-name');        
            $teacher=$this->request->getPost('teacher');        
            $time=$this->request->getPost('time'); 
            $formData=[
                'date'=>$date,
                'class_name'=>$class_name,
                'teacher'=>$teacher,
                'time'=>$time
            ];
            $class->update($id,$formData);
            return redirect()->to('dashboard/all_class');
        }
    }

    //Delete Class
    public function delete($id){
        $class = new ClassModel ;
        $class->where('class_id', $id)->delete($id);
        return redirect()->to('dashboard/all_class');

    }
}
