<?php

namespace App\Http\Controllers;

use App\Repositories\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  protected $users;

  public function __construct(Users $users)
  {
    $this->users = $users;
  }

  public function index()
  {
    $dataUsers = $this->users->all();
    usort($dataUsers, $this->object_sorter('created_at','DESC'));
    return view("users.index", compact("dataUsers"));
  }

  public function show($id)
  {
    $transactionUsers = $this->users->findTransaction($id);
    return view("users.show", compact("transactionUsers"));
  }

  public function getuser($id)
  {
    \Log::info('Consulta Usuario con id: ' . $id);
    $dataUser = array();
    $dataUser['info'] = $this->users->find($id);
    $dataUser['transactions'] = $this->users->findTransaction($id);
    return $dataUser;
  }

  public function object_sorter($clave,$orden=null) {
    return function ($a, $b) use ($clave,$orden) {
          $result=  ($orden=="DESC") ? strnatcmp($b->$clave, $a->$clave) :  strnatcmp($a->$clave, $b->$clave);
          return $result;
    };
  }


}
