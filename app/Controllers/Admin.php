<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        return view('admin/dashboard');
    }

    public function usulan_proker(): string
    {
        return view('admin/usulan_proker');
    }
}
