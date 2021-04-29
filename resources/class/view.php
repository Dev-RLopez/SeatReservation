<?php
class view extends config{

  public $movie;
    public $time;
    public $date;
  public function __construct($movie=NULL,$time=NULL,$date=NULL){
    $this->movie = $movie;
    $this->time = $time;
    $this->date = $date;
  }
  public function viewMovies(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "  <form action='show.php' method='post'>
        <div class='owl-carousel owl-theme'>
        ";
    foreach($result as $row){
      $image = $row['movie_img'];
      echo "  <div class='item p-1'>";
      echo '<img class="img-fluid slide-pic" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';
      // echo "  <img class='img-fluid slide-pic' src='data:image/jpeg;base64,'.base64_encode($image->load()) .'' charset='utf-8'/>";
      echo "  <h6 class='title mb-0'>$row[movie_name]</h6>";
      echo "  <h6 class='pg'>$row[film_rating]</h6>";
      echo "  <button type='submit' class='book-btn btn-primary btn-lg btn-block' value='$row[movie_name]' name='mov'><i class='fas fa-ticket-alt'></i>Get Tickets</button>";
      echo " </div>";
    }
  echo "  </div>
      </form>";
}
  public function viewAvailMovies(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<select name='mov'>";
    foreach($result as $row){
      if($this->movie == $row['movie_name']){
      echo "<option value='$row[movie_name]'selected>$row[movie_name]</option>";
    }else {
      echo "<option value='$row[movie_name]'disabled>$row[movie_name]</option>";
    }
  }
  echo "</select>";
}
  public function viewMovieSelected(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies` WHERE `movie_name` = '$this->movie'";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row){
        $image = $row['movie_img'];

    echo "  <div class='col-lg-6 d-flex flex-row justify-content-center pb-2'>";
    echo "  <div class='jumbotron m-0 p-0 text-center'>";
    echo '<img class=" mb-1 img-fluid cs" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';
    echo "<br>";
    echo "  <a type='button' class='cs-btn2 btn-primary btn-lg' href='$row[embed]' target='_blank'><i class='fab fa-youtube'></i>&nbsp;Watch Trailer</a>";
    echo "  </div>";
    echo "  </div>";
    echo "  <div class='col-lg-6 p-3'>";
    echo "  <h4 class='cs-title'>$row[movie_name]</h4>";
    echo "  <h6 class='pg'>$row[film_rating]</h6>";
    echo "  <p class='sypnosis'>$row[description]</p>";
    echo '

    ';
  }
}
  public function viewSeats(){
    $con1 = $this->con();
    $sql1 = "SELECT * FROM `tbl_reservation` WHERE `movie` = '$this->movie' AND `time` = '$this->time' AND `date` = '$this->date'";
    $data1 =$con1->prepare($sql1);
    $data1->execute();
    $seats = $data1->fetchAll(PDO::FETCH_ASSOC);
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_seats`";
    $data =$con->prepare($sql);
    $data->execute();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    $sn = 72;
    $samp = new SplFixedArray($sn);
    foreach($seats as $key => $res){
      $n = $res['seat_id']-1;
      $samp[$n] = $res['seat_res'];
    }
    $rCount = count($seats);
    // echo "Reserved Seats: $rCount";
    $aCount = 72-$rCount;
    // echo "Available Seats: $aCount";
    echo '
    <div class="pb-0 mb-0 seat-count text-white float-lg-right float-md-right">
      <span>Available Seats: '.$aCount.' <i class="fas fa-grip-lines-vertical"></i> Reserved Seats: '.$rCount.'</span>
    </div>

    ';
    echo "<h6 class='movie'>$this->movie</h6>
    <h6 class='timeslot mb-3'>$this->time $this->date</h6>";
    echo "  <form class='' action='vendor/sendmail.php' method='POST'>";
    foreach($results as $index => $result){
      if ($result['id'] == 1) {
        echo "<h3 class='text-center pb-1'>Front</h3>";
        echo "<div class='row text-center'>";
      }elseif ($result['id'] == 25){
        echo "<h3 class='text-center pb-1'>Middle</h3>";
        echo "<div class='row text-center'>";
      }elseif ($result['id'] == 49){
        echo "<h3 class='text-center pb-1'>Back</h3>";
        echo "<div class='row text-center'>";
      }

      if ($samp[$index] == $result['seat']) {
        echo "<div class='col-lg-1 col-3 box'>";
        echo "<input class='hidden' type='checkbox' name='seat[]' id='$result[seat]' value='$result[seat]' disabled/>";
        echo "<label class='button-label' style='text-transform: uppercase;' for='$result[seat]'>";
        echo "<h1>$result[seat]</h1>";
        echo "</label>";
        echo "</div>";
      }else {
        echo "<div class='col-lg-1 col-3 box'>";
        echo "<input class='hidden' type='checkbox' name='seat[]' id='$result[seat]' value='$result[seat]'/>";
        echo "<label class='button-label'style='text-transform: uppercase;' for='$result[seat]'>";
        echo "<h1>$result[seat]</h1>";
        echo "</label>";
        echo "</div>";
      }
      if ($result['id'] == 24) {
        echo "</div>";
      }elseif ($result['id'] == 48){
        echo "</div>";
      }elseif ($result['id'] == 72){
        echo "</div>";
      }
    }
  }
  public function viewTime(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_time`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo " <form class='' action='insertRes.php' method='POST'>";
    echo "<input type='text' name='mov' value='$_POST[mov]' hidden>";
    echo "<label for='time'>Select Screening</label>
    <select class='form-control form-control-lg' name='time'>";
    foreach($result as $row){
      echo "<option value='$row[time]'>$row[time]</option>";
    }
    echo "</select>";
    echo "  <input class='form-control form-control-lg mt-3' type='date' name='date' required>";
    echo "  <input class='btn btn-success mt-3 float-lg-right float-md-right float-sm-right' type='submit' name='proceed' value='Proceed'>";
    echo "</form>";
    echo "</div>";
  }
  public function viewAvailTime(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_time`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<select name='time' readonly>";
    foreach($result as $row){
      if($this->time == $row['time']){
        echo "<option value='$row[time]'selected>$row[time]</option>";
      }else {
        echo "<option value='$row[time]'disabled>$row[time]</option>";
      }
    }
    echo "</select>";
  }

  public function viewMovieTbl(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "
    <thead>
    <tr>
    <th>Name</th>
    <th>Reviews</th>
    <th style='width:180px'> Actions</th>
    </tr>
    </thead>
    <tbody>";
    foreach ($result as $row) {
      echo "<tr>";
      echo "<td>$row[id]</td>";
      echo "<td>$row[movie_name]</td>";
      echo "<td>
      <button class='btn btn-danger btn-sm' name='delete' value='$row[id]'>Reject</button>
      </td>";
      echo "</tr>";
    }
    echo "
    </tbody>
    </table>
    ";
  }

  public function showAction(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_movies`";
    $data =$con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $row){
        $title = $row['movie_name'];
        $id = $row['id'];
        echo '
        <tr>
          <td scope="row">'.$title.'</td>
          <td><a href="editMovie.php?id='.$id.'" class="btn btn-primary ml-2 mt-0">Edit</a><a href="delete.php?id='.$id.'" class="btn btn-danger ml-2 mt-0">Delete</a></td>
        </tr>
        ';
      }
  }
}


 ?>
