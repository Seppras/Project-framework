<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard(): string
    {
        return view('user/dashboard');
    }

    public function pengajuan_proker(): string
    {
        return view('user/pengajuan_proker');
    }
}
