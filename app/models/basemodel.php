<?php

namespace App\models;

use PDO;
use PDOException;

class basemodel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    protected $email_user;
    protected $password_user;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=duan1;charset=utf8", "root", "");
        } catch (PDOException $th) {
            throw $th;
        }
    }

    /**
     * function all() lấy toàn bộ dữ liệu của 1 bảng
     */
    public static function fetch_all()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName ORDER BY id DESC";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }


    public static function limit_product()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName limit 11 ";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function limit_producttuongtuc()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName limit 5 ";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function limit_blog()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName limit 3";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function limit_comment()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName limit 5";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }


    // public static function seach()
    // {
    //     $model = new static;
    //     $model->sqlBuilder = "Select * From $model->tableName WHERE  ";
    //     $stmt = $model->conn->prepare($model->sqlBuilder);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    //     return $result;
    // }
    /**
     * function insert: thêm dữ liệu
     * params: $data là 1 mảng dữ liệu có cấu trúc như sau
     * $data = [name=>'ngocbq', age=>40, address=>'hà Nội', ..]
     */
    public function insert($data = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colname = '';
        $params = '';

        foreach ($data as $key => $value) {
            $colname .= "`$key`, ";
            $params .= ":$key, ";
        }

        //Xóa dấu ', ' ở bên phải chuỗi
        $colname = rtrim($colname, ', ');
        $params = rtrim($params, ', ');

        //Nối vào chuỗi SQL
        $this->sqlBuilder .= $colname . ") VALUES(" . $params . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    public static function fetch_one($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id ='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if ($result) {
            return $result[0];
        }
        return false;
    }

    public function update($id, $data = [])
    {
        $this->sqlBuilder = "UPDATE $this->tableName SET ";
        foreach ($data as $colname => $value) {
            $this->sqlBuilder .= "`$colname`=:$colname, ";
        }
        // echo $this->sqlBuilder;
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE id=:id";

        $data['id'] = $id;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id=$id";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }


public static function fetch_login($email , $password){
$model = new static;
$model->sqlBuilder = "SELECT * FROM $model->tableName where `user_email` = '$email' AND `password` = '$password'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if ($result) {
            return $result[0];
        }
        return $result;
}


public static function fetch_product_list($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * From $model->tableName WHERE `cate_id` = '$id'";

        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }


    public static function fetch_comment_list($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * From $model->tableName WHERE `product_id` = '$id'";

        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
//     public function getuseremail($email){
// $sql = "SELECT * FROM user where email = '$email'";
// $result = $this->conn->select($sql);
// if ($result) {
//    return $result;

// } else {
//   echo "  <h4 style='color: red;'>Email không tồn tại</h4>";
// }

//     }
}