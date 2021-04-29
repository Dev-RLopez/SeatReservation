<?php
class insert extends config{
  public $name;
  public $seat;
  public $movie;
  public $time;
  public $date;

  public function __construct($name = NULL,$seat =NULL,$movie=NULL,$time=NULL,$date=NULL){
    $this->name = $name;
    $this->seat = $seat;
    $this->movie = $movie;
    $this->time = $time;
    $this->date = $date;
    // $this->movname = $movname;

  }

  public function insertReservation(){
    foreach($this->seat as $x => $s1){

    $con1 = $this->con();
    $sql1 = "SELECT `id` FROM `tbl_seats` WHERE `seat` = '$s1'";
    $data1 =$con1->prepare($sql1);
    $data1->execute();
    $seats = $data1->fetchAll(PDO::FETCH_ASSOC);
    foreach($seats as $seat){
      $seatid[] = $seat['id'];
    }

    $con = $this->con();
    $sql = "INSERT INTO `tbl_reservation`(`cus_name`,`seat_res`,`movie`,`seat_id`,`date`, `time`) VALUES (?,?,?,?,?,?)";
    $data =$con->prepare($sql);
    if($data->execute([$this->name,$s1,$this->movie,$seatid[$x],$this->date,$this->time])){
      $m = true;
    }else {
      $m = false;
    }
  }
  return $m;
  }
}

 ?>
