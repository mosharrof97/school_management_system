<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BatchModel;

class BatchController extends BaseController
{
    //All Batch
    public function index()
    {
        $batch = new BatchModel();
        $data = [
             'page_title'=> 'All Batch',
             'page_heading'=>'All Batch',
             'batch' => $batch->orderby('batch_id' )->paginate(3, 'group'),
             'pager'=>$batch->pager,
        ];
        return View("dashboard/page/batch/all_batch", $data);
    }

    //Add Batch
    public function addbatch()
    {
        $batch = new BatchModel();
        $data=[
            "page_title"=>"Add Batch",
            "page_heading"=>"Add Batch",
        ];
        if($this->request->getMethod()=="post"){
            $name= $this-> request->getPost('batch-name');
            $time= $this-> request->getPost('time');
            $formData=[
                "batch_name" => $name,
                "time"=>$time,
            ];

            $batch->insert( $formData);
        }

        return View("dashboard/page/batch/add_batch", $data);
    }

    //Edit Batch
    public function edit($id){
        $batch = new BatchModel();
        $data=[
            "page_title"=>"Add Batch",
            "page_heading"=>"Add Batch",
            // 'batch' =>$batch->where('batch_id', $id)->first(),
        ];
        $data['batch']= $batch->where('batch_id', $id)->first();

        return View("dashboard/page/batch/update_batch", $data);

    }

    //Update Batch
    public function update($id){
        $batch = new BatchModel();

        if($this->request->getMethod() =="post"){
            $batch_name = $this->request->getPost('batch-name');
            $time = $this->request->getPost('time');
            $formData=[
                "batch_name"=>$batch_name,
                'time' => $time,
            ];

            $batch->update($id, $formData);
            return redirect()->to("dashboard/all_batch");

        }
        
    }


        //Delete Batch
    public function delete($id){

        $batch = new BatchModel();
        $batch->where("batch_id", $id)->delete($id);
        return redirect()->to("/dashboard/all_batch");

    }

}
