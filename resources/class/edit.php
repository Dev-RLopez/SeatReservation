<?php
class edit extends config{
  public $id;
  public $movie;
  public $rating;
  public $desc;

  public function __construct($id=null,$movie=null,$rating=null,$desc=null){
    $this->id = $id;
    $this->movie = $movie;
    $this->rating = $rating;
    $this->desc = $desc;
  }

  public function edit(){
    $con = $this->con();
    $i = $this->id - 48;
    $sql = "UPDATE `tbl_seats` SET `seat`='b$i' WHERE `id` = $this->id";
    $data =$con->prepare($sql);
    if($data->execute()){
      return true;
    }else {
      return false;
    }
  }

  public function MovieValue(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE `id` = $this->id";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row){
      $title = $row['movie_name'];
      $desc = $row['description'];
      $rating = $row['film_rating'];
      $id = $row['id'];
      // var_dump($row['movie_name']);
    }
    echo "
    <div class='form-row'>
    <div class='form-group col-md-8'>
    <label for='inputEmail4'>Title</label>
    <input type='text' name='movie_name' class='form-control' id='inputEmail4' value='$title'>
    </div>
    <div class='form-group col-md-4'>
    <label for='inputPassword4'>Film Rating</label>
    <input type='text' name='film_rating' class='form-control' id='inputPassword4' value='$rating'>
    </div>
    </div>
    <div class='form-group'>
    <label for='exampleFormControlTextarea1'>Sypnosis</label>
    <textarea class='form-control' name='description' id='exampleFormControlTextarea1' placeholder='Sypnosis' rows='8'>$desc</textarea>
    </div>
    <input type='submit' name='submit' class='update btn btn-primary float-right' value='Update'/>
    <input type='text' name='id' class='form-control' id='inputPassword4' value='$id' hidden>
    ";
  }

  public function editValue(){
      $con = $this->con();
      $sql = "UPDATE `tbl_movies` SET `movie_name` = '$this->movie',`film_rating` = '$this->rating',`description` = '$this->desc' WHERE `id` = $this->id";
      $data = $con->prepare($sql);
      if($data->execute()){
        return true;
      }else {
        return false;
      }



  }
}

 ?>
