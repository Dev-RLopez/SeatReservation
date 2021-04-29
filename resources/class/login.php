<?php
class login extends config{
  public $username;
  public $password;

  public function __construct($username=NULL,$password=NULL){
    $this->username = $username;
    $this->password = $password;
  }
  public function loginUser(){
        $con = $this->con();
    $username = $this->username;
    $password = $this->password;
    $sql = "SELECT * FROM `tbl_accounts` WHERE `username` = '$this->username'";
    $data=$con->prepare($sql);
    $data->execute([$username]);
    $rows =$data-> fetchAll(PDO::FETCH_ASSOC);
    if ($rows == NULL) {
      return false;
    }else {
        foreach ($rows as $row) {
          $passWord =  $row['password'];
          $userName =  $row['username'];
          }
          if ($password == $passWord && $username == $userName) {
            session_start();
            $_SESSION['username'] = $username;
            header('location: homepage.php');
          }
          return true;
        }


  }
}
 ?>
