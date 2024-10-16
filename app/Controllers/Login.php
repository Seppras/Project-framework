<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{

  protected $users;

  public function __construct()
  {
    $this->users = new UsersModel();
  }
  public function index(): string
  {
    return view('login/index');
  }

  public function login()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $users = $this->users->findAll();

    foreach ($users as $user) {
      if ($user['username'] === $username && $user['password'] === $password) {
        if ($user['role'] == 3) {
          redirect('Location: /user/dashboard');
          exit;
        } else if ($user['role'] == 2) {
          header('Location: /admin/dashboard');
          exit;
        } else if ($user['role'] == 1) {
          header('Location: /validator/dashboard');
          exit;
        }
      } else {
        echo "<script>
          alert('username atau password salah!');
          location.href = '/login';
        </script>";
      }
    }
  }
}
