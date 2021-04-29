<?php
function checkUser(){
  if(!empty($_SESSION['username'])){
  }else {
    header('location: login_page.php');
  }

}
function logout(){
    if(isset($_POST['logout'])){
  session_start();
  session_destroy();
  session_unset();
  unset($_SESSION['username']);
    header('location: login_page.php');
  }
}
function login(){
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = new login($username,$password);
    if($login->loginUser()){
    }else {
      echo  '<div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
            Login Failed!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
  }
}
function insertR(){
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $seat = $_POST['seat'];
    $movie = $_POST['mov'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $insert = new insert($name,$seat,$movie,$time,$date);
    if($insert->insertReservation()){
      echo '<div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            Successfully reserved!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }else {
      echo  '<div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
              Failed to reserved!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
  }
}
function insertM(){
    if(isset($_POST['submit'])){
    $movname = $_POST['mov_name'];
    $frating = $_POST['f_rating'];
    $descript = $_POST['descript'];
    $movimgData = file_get_contents($_FILES['movImg']['tmp_name']);
    $trailer = $_POST['trailer'];
    $insertMovies = new insertMovies($movname,$frating,$descript,$movimgData,$trailer);
    if($insertMovies->insertMovs()){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Successfully Created New Movie!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }else {
      echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Failed to Creat New Movie!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  }
}
function deleteMov(){
  if(!empty($_POST['delete'])){
    $delete = new delete($_POST['delete']);
    if($delete->deleteMovie()){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Successfully Deleted Movie!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }else {
      echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Failed to Delete Movie!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  }
}

  function viewAvailableSeats(){
    if(!empty($_POST['proceed'])){
      $movie = $_POST['mov'];
      $time = $_POST['time'];
      $date = $_POST['date'];
      $view = new view($movie,$time,$date);
      $view->viewSeats();
  }
}
function viewMovs(){
  $view = new view();
  $view->viewMovies();
  // $view->viewTime();
}
function viewMovScreen(){
  if(!empty($_POST['mov'])){
    $view = new view($_POST['mov']);
    $view->viewMovieSelected();
    $view->viewTime();
  }
}

function showMovieAction(){
  $view = new view();
  $view->showAction();
}

function showVal(){
  if (!empty($_GET['id'])) {
    $edit = new edit($_GET['id']);
    $edit->MovieValue();
  }
  // edit();
}

function edit(){

  if (!empty($_GET['movie_name'])) {
    $edit = new edit($_GET['id'],$_GET['movie_name'],$_GET['film_rating'],$_GET['description']);
    if ($edit->editValue()) {
      header("Location: ./movieAction.php");
    }
  }
}

function delete(){
  if (!empty($_GET['id'])) {
    $delete = new delete($_GET['id']);
    if ($delete->deleteMovie()) {
      header("Location: ./movieAction.php");
    }
  }
}

 ?>

 <!-- function viewMovTbl(){
   $view = new view();
   $view->viewMovieTbl();
 } -->
 <!-- //   function viewAvailable(){
   //     if(isset($_POST['sc'])){
     //       $movie = $_POST['mov'];
     //       $time = $_POST['time'];
     //       $view = new view($movie,$time);
     //     $view->viewAvailMovies();
     //     $view->viewAvailTime();
     //   }
     // } -->
