<?php
namespace App\Repositories;

class Users extends GuzzleHttpRequest
{

  public function all()
  {
    return $this->get('users/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk');
  }

  public function find($id)
  {
    $dataUsers = $this->get('users/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk');
    $keyUser = array_search($id, array_column($dataUsers, 'id'));
    return $dataUsers[$keyUser];
  }

  public function findTransaction($id)
  {
    return $this->get('users/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk/transaction/'.$id);
  }

}
