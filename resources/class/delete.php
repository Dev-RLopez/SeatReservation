<?php
class delete extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }

  public function deleteMovie(){
    $con = $this->con();
    $sql = "DELETE FROM `tbl_movies` WHERE `id` = $this->id";
    $data =$con->prepare($sql);
    if($data->execute()){
      return true;
    }else {
      return false;
    }
  }
}

 ?>
