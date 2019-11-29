<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="task_homepage.css">

    <title>Homepage</title>
  </head>
  <body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h5 class="text-white h4">4th Week</h5>
            <span class="text-muted">Howl's moving castle</span>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>

    <br>

    <h1>This is our company</h1>

    <br>

    <center><?php 

    echo "[This is our employees]"; echo "<br>";
    
    class company
    {
        public $name;
        public $department;
        public $salary;
    }
    
    class employees extends company
    {
        public function get($name, $department, $salary)
        {
            echo $this->name=$name; echo "<br>";
            echo $this->department=$department; echo "<br>";
            echo $this->salary=$salary; echo "<br>";
           
        }
    }

    $employees=new employees;
    $employees->get("Chris","marketing department","$1600"); echo "<br>";
    $employees->get("Mark","human resources department","$700"); echo "<br>";
    $employees->get("Billie","accounting department","$8000"); echo "<br>";
    $employees->get("Alex","general affairs department","$900"); echo "<br>";
    $employees->get("Taylor","public relations department","$1000"); echo "<br>";


    echo "<br>";
    echo "<br>";


    echo "[This is new employees]"; echo "<br>";

    class newemployees extends company
    {
      public function put($name,$department)
      {
        echo $this->name = $name; echo "<br>";
        echo $this->department = $department; echo "<br>";
      }
    }

    $newemployees = new newemployees;
    $newemployees->put("Michael","technology department"); echo "<br>";
    $newemployees->put("Ariana","administrative department"); echo "<br>";
    $newemployees->put("Shawn","legal department"); echo "<br>";
    $newemployees->put("Naomi","security department"); echo "<br>";

    

   ?></center>

   <br>

  <center><form action = "task_homepage_upload.php" method="post" enctype="multipart/form-data">
   <h1>Upload your photo</h1><br>
    <label for = "fileselect">Filename</label>
    <input type = "file" name = "photo" id = "fileselect">
    <input type = "submit" name = "submit" value = "upload">
    <p><strong>Note:</strong>Only .jpg .jpeg .gif .png formats allowed to a max size of 5 MB.
  </form></center>
  

  <br>

 <h1>We are going to send a email</h1>


 <br>

 <center>
 <?php
 $to = "your@email.com";
 $subject = "regarding student performance";
 $message = "Hi welcome to our company!";
 $from = "company@email.com";

 if(mail($to,$subject,$message,$from)){
   echo "Your mail has been sent successfully.";
}else{
  echo "Unable to send email.　Please try again.";
}
?>
</center>

<br>


<center><img class="image-round1" src = "beach.jpg" alt="beach" title="beach"></center>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>