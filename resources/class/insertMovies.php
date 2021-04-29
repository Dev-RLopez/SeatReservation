<?php
class insertMovies extends config{
  public $movname;
  public $frating;
  public $descript;
  public $movimgData;
  public $trailer;

  public function __construct($movname=NULL,$frating=NULL,$descript=NULL,$movimgData=NULL,$trailer=NULL){
    $this->movname = $movname;
    $this->frating = $frating;
    $this->descript = $descript;
    $this->movimgData = $movimgData;
    $this->trailer = $trailer;
  }
  public function insertMovs(){
    $con = $this->con();
    // if (isset($_FILES['movImg']) && $_FILES['movImg']['size'] > 0) 
    // { 
    //   $tmpName  = $_FILES['movImg']['tmp_name'];  
    //   $fp = fopen($tmpName, 'rb');
    // }
    $sql = "INSERT INTO `tbl_movies`(`movie_name`, `movie_img`, `description`, `film_rating`, `embed`) VALUES (?,?,?,?,?)";
    $data=$con->prepare($sql);
    $data->bindParam(1, $movimgData);
    // $upload = diverse_array($_FILES["upload"]);
    if($data->execute([$this->movname,$this->movimgData,$this->descript,$this->frating,$this->trailer])){
      return true;
    }else {
      return false;
    }
  }
}

 ?>
