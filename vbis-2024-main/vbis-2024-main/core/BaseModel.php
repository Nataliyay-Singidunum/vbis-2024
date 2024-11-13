<?php

namespace app\core;

use PDO;

abstract class BaseModel {

    abstract public function TableName();

    public function get(){

        $db = new DbConnection();
        $con = $db->connect();
        $tableName = $this->tableName();
        $query = "select * from $tableName";

        $dbResult = $con->query($query);
        return $dbResult->fetch_assoc();
    }

    public function mapData($data)
    {

        if ($data != null) {
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }
}