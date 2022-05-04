<?php
namespace App\Models;
use CodeIgniter\Model;

class Homemodel extends Model {
  public $db;

  public function __construct() {
    $this->db = \Config\Database::connect();
  }

  public function getData() {
    $builder = $this->db->table('students');
    $query   = $builder->get();

    return $query->getResult();
  }

  public function insertData($data)
  {
    $builder = $this->db->table('students');
    $result = $builder->insert($data);

    return $result;
  }

  public function deleteData($id)
  {
    $builder = $this->db->table('students')->where('id', $id);
    $result = $builder->delete();

    return $result;
  }

  public function singleStudentData($id)
  {
    $builder = $this->db->table('students')->where('id', $id);
    $query = $builder->get();

    return $query->getResult();
  }

  public function updateData($id, $data)
  {
    $builder = $this->db->table('students')->where('id', $id);
    $result = $builder->update($data);

    return $result;
  }
}