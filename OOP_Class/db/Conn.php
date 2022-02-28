<?php

require "DBinfo.php";

class Conn extends DBinfo
{
  private $connection;
  private $output;
  private function conn($sql)
  {
    $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    return $this->connection->query($sql);
  }
  private function sqlRun($sql)
  {
    try {
      $this->output = $this->conn($sql) ?? FALSE;
    } catch (Exception $e) {
      return "<script>console.log(\"".$e->getMessage()."\");</script>";
    }
    return $this->output;
  }


  public function createTable($tableName, $id)
  {
    $sql = "CREATE TABLE $tableName ($id);";
    return $this->sqlRun($sql);
  }

  public function create($tableName, $cols, $data)
  {
    $sql = "INSERT INTO $tableName ($cols) VALUES ($data)";
    return $this->sqlRun($sql);
  }
  public function read($tableName, $cols, $data)
  {
    $data = $data === "" ? 1 : $data;
    $sql = "SELECT $cols FROM $tableName WHERE $data";
    return $this->sqlRun($sql);
  }
  public function update($tableName, $cols, $data)
  {
    $sql = "UPDATE $tableName SET $data WHERE $cols";
    return $this->sqlRun($sql);
  }
  public function delete($tableName, $cols)
  {
    $sql = "DELETE FROM $tableName WHERE $cols";
    return $this->sqlRun($sql);
  }
}