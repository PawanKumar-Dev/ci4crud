<?php
namespace App\Controllers;
use App\Models\Homemodel;

class Home extends BaseController
{
    public $homemodel;

    public function __construct() {
        $this->homemodel = new Homemodel();
    }

    public function index()
    {   
        $data['stu_data'] = $this->homemodel->getData();
        return view('Home', $data);
    }

    public function add()
    {
       return view('Add');
    }

    public function save()
    {
        $request = \Config\Services::request();

        $insData = [
            'name' => $request->getVar('name'),
            'email' => $request->getVar('email'),
            'phone' => $request->getVar('phone')
        ];

        if($this->homemodel->insertData($insData))
        {
            $this->session->setTempdata('msg', 'Data Inserted Successfully', 5);
            $this->session->setTempdata('msg-class', 'alert-success', 5);
            return redirect()->to('/');
        }
        else
        {
            $this->session->setTempdata('msg', 'Data Insert Failed', 5);
            $this->session->setTempdata('msg-class', 'alert-danger', 5);
            return redirect()->to('/');
        }
    }


    public function delete($id)
    {
        if($this->homemodel->deleteData($id))
        {
            $this->session->setTempdata('msg', 'Data Deleted Successfully', 5);
            $this->session->setTempdata('msg-class', 'alert-success', 5);
            return redirect()->to('/');
        }
        else
        {
            $this->session->setTempdata('msg', 'Data Deletion Failed', 5);
            $this->session->setTempdata('msg-class', 'alert-danger', 5);
            return redirect()->to('/');
        }
    }


    public function edit($id)
    {
        $data['stu'] = $this->homemodel->singleStudentData($id);
        return view('Edit', $data);
    }

    public function update()
    {
        $request = \Config\Services::request();

        $upData = [
            'name' => $request->getVar('name'),
            'email' => $request->getVar('email'),
            'phone' => $request->getVar('phone')
        ];

        $upid = $request->getVar('upid');

        if($this->homemodel->updateData($upid, $upData))
        {
            $this->session->setTempdata('msg', 'Data Updated Successfully', 5);
            $this->session->setTempdata('msg-class', 'alert-success', 5);
            return redirect()->to('/');
        }
        else
        {
            $this->session->setTempdata('msg', 'Data Updation Failed', 5);
            $this->session->setTempdata('msg-class', 'alert-danger', 5);
            return redirect()->to('/');
        }
    }
}