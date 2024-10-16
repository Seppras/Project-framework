<?php

namespace App\Controllers;

class Proker extends BaseController
{
  public function proker(): string
  {
    return view('user/pengajuan_proker');
  }
}
