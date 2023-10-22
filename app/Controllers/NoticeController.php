<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticeModel;

class NoticeController extends BaseController
{
    //All Notice
    public function index()
    {
        $notice = new NoticeModel;
        $data=[
            'page_title'=>'All Notice',
            'page_heading'=>'All Notice',
            'notice'=>$notice->orderby('Notice_id','DESC',)->paginate(3, 'group'),
            'pager'=>$notice->pager,
        ];

        return view('dashboard/page/notice/all_notice', $data);
    }

    //Add Notice
    public function addnotice()
    {
        $notice = new NoticeModel;
        $data=[
            'page_title'=>'Add Notice',
            'page_heading'=>'Add Notice',
        ];

        if($this->request->getMethod() == 'post'){
            $title=$this->request->getPost('title');
            $desc=$this->request->getPost('desc');
            $image=$this->request->getFile('image');
            

            if($image && $image->isvalid() && !$image->hasMoved()){
                $imageName=$image->getRandomName();
                $formData=[
                    'title'=>$title,
                    'desc'=> $desc,
                    'image' => $imageName,
                ];
                $image->move('uploads/img', $imageName);
                $notice->insert($formData);
            }else{
                $formData=[
                    'title'=>$title,
                    'desc'=> $desc,
                ];
                $notice->insert($formData);
            }
        }
        return view('dashboard/page/notice/add_notice', $data);
    }

    //Edit Notice
    public function edit($id){
        $notice = new NoticeModel;
        $data=[
            'page_title'=>'Add Notice',
            'page_heading'=>'Add Notice',
            'notice'=> $notice->where('notice_id', $id)->first($id),
        ];
        return View('dashboard/page/notice/update_notice', $data);
    }

    //Update Notice
    public function update()
    {
        $notice = new NoticeModel;
        // $data=[
        //     'page_title'=>'Update Notice',
        //     'page_heading'=>'Update Notice',
        // ];

        if($this->request->getMethod() == 'post'){
            $title=$this->request->getPost('title');
            $desc=$this->request->getPost('desc');
            $image=$this->request->getFile('image');
            $imageName=$image->getRandomName();

            $formData=[
                'title'=>$title,
                'desc'=> $desc,
                'image' => $imageName,
            ];
            $image->move('uploads/img', $imageName);
            $notice->update($formData);
            return redirect()->to('dashboard/all_notice');
        }

        // return view('dashboard/page/notice/add_notice', $data);
    }

    //delete Notice
    public function delete($id){
        $notice = new NoticeModel;
        $notice->where('notice_id', $id)->delete($id);
        return redirect()->to('/dashboard/all_notice');
    }


}
