<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      h2{
          text-align: center;
          padding: 10px;
      }
 .container {
  background: #FFFFFF;
  height:100%;
  position: relative;
}
      .img-responsive{
          display: block;
          max-width: 100%;
          height: 150px;
      }
      
    @media only screen and (max-width: 700px) {
  .img-responsive {
    width: 100%;
    margin: 6px 0;
    height: 100%;
  }
}
      .panel
      {
         height: 100%; 
      } 
      .panel-footer{
          text-align: center;
      }
      .btn-primary{
    background-color: blue;
    border: 1px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin-top:3%;
    
}
.btn-primary:hover{
    background-color: chocolate;
    border: 1px solid black;
  
}
  </style>
</head>
<body>

<div class="container">
     <h2>Cricket Voting </h2>
  <div class="row">
    
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="panel panel-primary">
        <div class="panel-body"><img src="virat.png" class="img-responsive" style="width:100%" alt="virat"> </div>
        <div class="panel-footer">Virat Kohli<br> Batsman </div>
            <form method="post">
                <input type="submit" name="virat" value="Vote">  
            </form>
        </div>
    </div>
        <form method="post">
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="rohith.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Rohith Sharma <br> Batsman</div>
          <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
            <form method="post">
    <div class="col-lg-3 col-sm-6 col-xs-12"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="dhoni.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Dhoni <br> Wicket-Keeper</div>
          <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <div class="panel panel-primary">
        <div class="panel-body"><img src="davan.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Shikhar Dhawan<br>Batsman</div>
          <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
    </div>
    </div>
      
    
  <div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12"> 
       <div class="panel panel-primary">
        <div class="panel-body"><img src="theja.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Ravindra Jadeja<br>All-rounder</div>
           <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
    <div class="col-lg-3  col-sm-6 col-xs-12"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="rahul.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">K.L.Rahul<br>Wicket-Keeper</div>
          <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="aswin.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Ashwin <br>Bowler</div>
         <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
      <div class="col-lg-3 col-sm-6 col-xs-12"> 
      <div class="panel panel-primary">
        <div class="panel-body"><img src="pujara.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Hardik Pandya<br>All-Rounder</div>
          <input class="btn-primary" type="submit" name="submit" value="Vote">  
      </div>
    </div>
      </div>
    </div>
    
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="vote_test";

$conn = mysqli_connect("localhost","root","","player");
    
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['virat'])) 
{ 
    $sql=("INSERT INTO virat_koli(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) {
     
        exit();
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
?>
        
 </body>
</html>
