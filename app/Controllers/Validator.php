<?php

namespace App\Controllers;

class Validator extends BaseController
{
    public function dashboard(): string
    {
        return view('validator/dashboard');
    }

    public function evaluasi_proker(): string
    {
        return view('validator/evaluasi_proker');
    }
}
