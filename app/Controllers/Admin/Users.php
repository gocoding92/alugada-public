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

        $this->nohplogin = session()->get('nohplogin');
        if ($this->nohplogin == Null or $this->nohplogin == "") {
            $this->nohplogin = 12341234;
            // return redirect()->to('administrator');

        }
    }

    public function index($x)
    {
        // var_dump($x);die;

        $role = $this->alugada->userbynohp($this->nohplogin)['role'];
        if ($role != 1) {
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }

        // if($this->nohplogin == 12341234){
        //     session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
        //     return redirect()->to('administrator');
        // }

        $data['photouser'] = $this->alugada->userbynohp($this->nohplogin)['gambar'];
        $data['namauser'] = $this->alugada->userbynohp($this->nohplogin)['nama'];
        $data['nohplogin'] = $this->nohplogin;
        $data['multisuspend']=$x;


        switch ($x) {
            case 'admin-user-baru':
                // var_dump("user-baru");die;
                $checked=0;
                $data['user'] = $this->alugada->userbaru($checked);
                return view('admin/users/index', $data);
                break;
            case 'admin-user-aktif':
                // var_dump("user-aktif");die;
                $is_active=1;
                $data['user'] = $this->alugada->useraktif($is_active);
                return view('admin/users/index', $data);
                break;
            case 'admin-user-tidak-aktif':
                // var_dump("user-tidak-aktif");die;
                $is_active=0;
                $data['user'] = $this->alugada->useraktif($is_active);
                return view('admin/users/index', $data);
                break;
            case 'admin-user-suspend':
                // var_dump("user-suspend");die;
                $suspend=1;
                $data['user'] = $this->alugada->usersuspend($suspend);
                $suspend1=2;
                $data['user1'] = $this->alugada->usersuspend($suspend1);
                return view('admin/users/index', $data);
                break;
            case 'admin-user-block':
                // var_dump("user-block");die;
                $suspend=3;
                $data['user'] = $this->alugada->usersuspend($suspend);
                return view('admin/users/index', $data);
                break;
        }
    }
    public function usercheck($okno, $id)
    {
        // var_dump($okno.' - '.$id);die;
        $user = $this->alugada->userbyid($id);
        $data['checked'] = 1;
        switch ($okno) {
            case 0: // Oke
                $data['is_active'] = 1;
                $this->alugada->updateuser($id, $data);
                $x='admin-user-baru';
                return redirect()->to('admin-user-baru'.'/'.$x);
                break;

            case 1:     // Warning
                if ($user['suspend'] == 0) {
                    $suspend = 1;
                } elseif ($user['suspend'] == 1) {
                    $suspend = 2;
                } elseif ($user['suspend'] == 2) {
                    $suspend = 3;
                }

                if($suspend==3){
                    $data['is_active'] = 0;
                }else{
                    $data['is_active'] = 1;
                }

                $data['suspend'] = $suspend;

                $this->alugada->updateuser($id, $data);
                $x='admin-user-baru';
                return redirect()->to('admin-user-baru'.'/'.$x);
                break;

            case 2:     // Block
                $data = [
                    'is_active' => 0,
                    'checked' => 1,
                    'suspend' => 3,
                ];
                $this->alugada->updateuser($id, $data);
                $x='admin-user-baru';
                return redirect()->to('admin-user-baru'.'/'.$x);
                break;
        }
        // var_dump($okno);die;
    }
}
