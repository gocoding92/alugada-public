<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class Users extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'user' => $this->alugada->user(),
        ];
        return view('admin/users/index', $data);
    }
    public function usercheck($okno,$id)
    {
        $user=$this->alugada->userbyid($id);
        switch ($okno) {
            case 0: // Oke
                $data=[
                    'is_active' => 1,
                    'checked' => 1,
                ];
                $this->alugada->updateuser($id,$data);
                return redirect()->to('administrator-area/user');
                break;

            case 1:     // Warning
                if($user['suspend']==0){
                    $suspend=1;
                }elseif($user['suspend']==1){
                    $suspend=2;
                }elseif($user['suspend']==2){
                    $suspend=3;
                }
                $data=[
                    'is_active' => 1,
                    'checked' => 1,
                    'suspend' => $suspend,
                ];
                $this->alugada->updateuser($id,$data);
                return redirect()->to('administrator-area/user');
                break;

            case 2:     // Block
                $data=[
                    'is_active' => 1,
                    'checked' => 1,
                    'suspend' => 3,
                ];
                $this->alugada->updateuser($id,$data);
                return redirect()->to('administrator-area/user');
                break;
        }
        // var_dump($okno);die;
    }
}
