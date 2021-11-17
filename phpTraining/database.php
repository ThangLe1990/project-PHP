<?php 
require 'config.php';

class DB 
{
  public $conn;

  function __construct(){ 
     $this -> connection();
  }

  function connection () {
    $this -> conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
    if ($this -> conn -> connect_error) {
        die("Kết nối DB thất bại: " . $this -> conn -> connect_error);
    } 
        // echo "Kết nối DB thành công";
  }  
  function query($sql) {
    $this -> conn -> query($sql);

  }

  
//  Insert Data
  function insert( $table, $data ) {
    
    foreach ( $data as $k => $v) {
      $list_field[] = "`{$k}`";
      $list_value[] = "'{$v}'";
    }

    $list_field = implode( ',', $list_field);
    $list_value = implode( ',', $list_value);

    // print_r($list_field );
    
    $sql =  "INSERT INTO {$table} ( $list_field ) VALUES ( $list_value )";

    if ($this -> conn -> query($sql) == true) {
      
      return $this -> conn -> insert_id;
    } 
      else {
        echo "Lỗi: " . $this -> conn -> error;
      }
  }


// Get, show data
  function get( $table, $field = [], $where = "" ) { 
    
    $field = !empty($field) ? implode( ",", $field ) : "*";
    $where = !empty($where) ? "WHERE {$where}" : "" ;

    $sql = " SELECT {$field} FROM {$table} {$where} ";

    $result = $this -> conn -> query($sql);

    if( $result -> num_rows > 0  ) {
        
        $data = [];
      
      while( $row = $result -> fetch_assoc() ){
        $data[] = $row;
      }
        return $data;
        
    } else {
        echo "Không tìm thấy kết quả";
      }

  }

// Update data
  function update ($table, $data = [], $where = "") {

    $data_insert = [];

    foreach ($data as $k => $v ) {
      $data_insert[] = "`$k` = '$v'" ;
    }

    $data_insert =  implode(',', $data_insert);
    $where = !empty($where) ? "WHERE {$where}" : "" ;

    $sql = "UPDATE {$table} SET {$data_insert} {$where} ";

     if($this -> conn -> query($sql) == True  ) {
       echo "Cập nhật thành công ";
      } 
     else {
       echo "Lỗi: " . $this->conn->error;
     }
  }
// Delete data
  function delete( $table, $where = "" ) {

    $where = !empty($where) ? "WHERE {$where}" : "" ;

    $sql = " DELETE FROM {$table} {$where} "; 

    if($this -> conn -> query($sql) == True  ) {
       echo "Xoá thành công ";
    } 
    else {
       echo "Lỗi: " . $this->conn->error;
    }
  } 
}
$db =  new DB;
 
// $data = [
//   'username' => 'Má Hoà 123',
//   'password' => md5('hoa123@@')
// ];

// $db -> insert('users', $data);

// $users = $db -> get('users', ['username'],'id = 2' ) ;

// echo "<pre>";
// print_r($users);

 
// $updateUser = $db -> update('users', $data, 'id = 14');
// $userDelete = $db -> delete ('users', 'id = 2');
 











?>