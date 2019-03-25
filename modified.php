<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
      h3,h4{
          text-align: center;
          padding: 10px;
          font-family:sans-serif;
      }
        p{
            text-align:justify;
            font-family: sans-serif;
            
        }
 .container {
  background: #FFFFFF;
  height:100%;
  position: relative;
}
        .img-responsive,.thumbnail>img {
    display: block;
    max-width: 100%;
    height:200px;
        }
   @media only screen and (max-width: 700px) {
  .img-responsive,.thumbnail>img {
    width: 100%;
    margin: 6px 0;
    height: 100%;
  }
}
      .btn-primary{
    padding: 10px 20px;
    background-color: blue;
    border: 1px;
    margin-left: auto;
    margin-right: auto;
    display:inline-block;
    text-align: center;
    margin-top:3%;
    
}
.btn-primary:hover{
    background-color: black;
  
}
        .quotes{
            text-align: center;
            font-family: cursive;
        }
    .checked {
  color: blue;
  font-size: 1.25em;
position:inherit;

        
        }
        table {
  border-collapse: collapse;
  width: 45%;
}

th, td {
  text-align: left;
  padding: 3px 2px;
}
        .player{
           text-transform: uppercase; 
        }
 
  </style>
    </head>
  <body>
    <div class="container">
     <h2>Cricket Voting </h2>
      <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="virat.png" class="img-responsive" style="width:100%" alt="virat"> 
                   <div class="caption">
                     <h3>VIRAT KOHLI</h3>
                           <h4>(Batsman)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>75</td>
         <td>216</td>
          <td>65</td>
          <td>107</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>25</td>
        <td>38</td>
        <td>0</td>
        <td>32</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>19</td>
        <td>48</td>
        <td>19</td>
          <td>27</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>243</td>
        <td>183</td>
        <td>90*</td>
          <td>243</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"Self-Belief and Hard Work will always earn you Success "</p>
                        <form method="post">
                            <input class="btn btn-primary" role="button"  type="submit" name="virat" value="vote">
                            
                       </form> 
                       <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
          </div>
<!--2-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="dhoni.png" class="img-responsive" style="width:100%" alt="dhoni"> 
                   <div class="caption">
                     <h3 class="player"> Dhoni</h3>
                           <h4>(Wicket-keeper)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>90</td>
         <td>332</td>
          <td>93</td>
          <td>131</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>6</td>
        <td>10</td>
        <td>0</td>
        <td>9</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>33</td>
        <td>67</td>
        <td>2</td>
          <td>47</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>224</td>
        <td>183*</td>
        <td>56</td>
          <td>224</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"You don't play for crowd, you play for the COUNTRY"</p>
                        <form method="post"> 
                              <input class="btn btn-primary" role="button"  type="submit" name="dhoni"  value="vote">  
                            
                       </form> <br> 
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
              
              
        </div>
    <!--3-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="rohith.png" class="img-responsive" style="width:100%" alt="rohith"> 
                   <div class="caption">
                     <h3 class="player">Rohit Sharma</h3>
                           <h4>(Batsman)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>27</td>
         <td>193</td>
          <td>86</td>
          <td>85</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>3</td>
        <td>21</td>
        <td>4</td>
        <td>20</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>10</td>
        <td>37</td>
        <td>15</td>
          <td>29</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>177</td>
        <td>264</td>
        <td>118</td>
        <td>309*</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"You have to accept the failure and success and you keep moving on."</p>
                        <form method="post">                            
                            <input class="btn btn-primary" role="button"  type="submit" name="rohith" value="vote">

                            
                       </form> <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
        </div>
    <!--4-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="davan.png" class="img-responsive" style="width:100%" alt="davan"> 
                   <div class="caption">
                     <h3 class="player">Dhawan</h3>
                           <h4>(Batsman)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> ListA </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>34</td>
         <td>115</td>
          <td>46</td>
          <td>229</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>7</td>
        <td>15</td>
        <td>0</td>
        <td>27</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>5</td>
        <td>25</td>
        <td>9</td>
          <td>49</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>190</td>
        <td>137</td>
        <td>92</td>
        <td>248</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"The Moustache will stay. Its an Indian thing,I do it for the Crowd"</p>
                        <form method="post">
                           
                       <input class="btn btn-primary" role="button"  type="submit" name="dhawan" value="vote">
                       </form> <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
        </div>
        
        </div>
      </div>
      <!--5-->
      <div class="container">
      <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="theja.png" class="img-responsive" style="width:100%" alt="theja"> 
                   <div class="caption">
                     <h3 class="player">Ravindra Jadeja</h3>
                           <h4>(All-rounder)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>40</td>
         <td>114</td>
          <td>40</td>
          <td>91</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>9</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>9</td>
        <td>10</td>
        <td>0</td>
          <td>24</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>100*</td>
        <td>87</td>
        <td>25</td>
          <td>331</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"If you want learn batting,<br>bat with MS Dhoni"</p>
                        <form method="post">
                          
                       <input class="btn btn-primary" role="button"  type="submit" name="jadeja" value="vote">
                       </form> 
                       <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
          </div>
          <!--7-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="aswin.png" class="img-responsive" style="width:100%" alt="aswini"> 
                   <div class="caption">
                     <h3 class="player">Ravichandran Ashwin</h3>
                           <h4>(Bowler)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>64</td>
         <td>111</td>
          <td>46</td>
          <td>106</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>4</td>
        <td>0</td>
        <td>0</td>
        <td>6</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>11</td>
        <td>1</td>
        <td>0</td>
          <td>19</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>124</td>
        <td>65</td>
        <td>31*</td>
        <td>124</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"Its not about an over.Each ball delivered is an event."</p>
                        <form method="post">
                         <input class="btn btn-primary" role="button"  type="submit" name="aswin" value="vote">
                       </form> <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
        </div>
<!--6-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="rahul.png" class="img-responsive" style="width:100%" alt="rahul"> 
                   <div class="caption">
                     <h3>K.L.Rahul</h3>
                           <h4>(Wicket-keeper)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> FC </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>29</td>
         <td>13</td>
          <td>19</td>
          <td>68</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>5</td>
        <td>1</td>
        <td>2</td>
        <td>14</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>11</td>
        <td>2</td>
        <td>4</td>
          <td>27</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>199</td>
        <td>100*</td>
        <td>110*</td>
          <td>337</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"My parents felt that cricket is not for small town boys.I told them to look at MS Dhoni"</p>
                        <form method="post">
                               
                       <input class="btn btn-primary" role="button"  type="submit" name="rahul" value="vote">
                       </form> <br> 
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
        </div>
    
    <!--8-->
          
          <div class="col-lg-3 col-sm-6 col-xs-12">
             <div class="thumbnail">
               <img src="pujara.png" class="img-responsive" style="width:100%" alt="pujara"> 
                   <div class="caption">
                     <h3 class="player">Hardik Pandya</h3>
                           <h4>(All-rounder)</h4>
                          <table>
<thead>
      <tr>
        <th> Competition</th>
        <th>Test</th>
        <th>ODI</th>
        <th> T20I </th>
        <th> ListA </th>
       </tr>
    </thead>
    <tbody>
      <tr>
        <td>Matches</td>
        <td>10</td>
         <td>38</td>
          <td>35</td>
          <td>23</td>
      </tr>
      <tr>
        <td>100s</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
      </tr>
      <tr>
        <td>50s</td>
        <td>4</td>
        <td>4</td>
        <td>0</td>
          <td>7</td>
      </tr>
    <tr>
        <td>Top Score</td>
        <td>108</td>
        <td>83</td>
        <td>33*</td>
        <td>108</td>
      </tr>
    </tbody>
  </table>
        <br>  <p class="quotes">"When I got the call for the National Team, I thought god wants me to do something Nice."</p>
                        <form method="post">
                           
                       <input class="btn btn-primary" role="button"  type="submit" name="pandya" value="vote">
                       </form> <br>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                       <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                       
                 </div>
              </div>
        </div>
    </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="player";

$conn = mysqli_connect("localhost","root","","player");
    
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
     
if(isset($_POST['virat'])) 
{ 
    $sql=("INSERT INTO virat_koli(id) VALUES (NULL)"); 
    if(mysqli_query($conn, $sql)){
         
    echo "<script> document.location.href='successful.php'</script>";
    }
   

    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
    
if(isset($_POST['dhoni'])) 
{ 
    $sql=("INSERT INTO dhoni(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) {
     echo "<script> document.location.href='successful.php'</script>";
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}

          if(isset($_POST['rohith'])) 
{ 
    $sql=("INSERT INTO rohith(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) {
     echo "<script> document.location.href='successful.php'</script>";
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
              if(isset($_POST['dhawan'])) 
{ 
    $sql=("INSERT INTO dhawan (id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) {
     
    echo "<script> document.location.href='successful.php'</script>";
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}

          if(isset($_POST['jadeja'])) 
{ 
    $sql=("INSERT INTO ravindra_jadeja (id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) {
     
      echo "<script> document.location.href='successful.php'</script>";
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
      if(isset($_POST['rahul'])) 
{ 
    $sql=("INSERT INTO rahul(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) 
     echo "<script> document.location.href='successful.php'</script>";
    
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
      if(isset($_POST['aswin'])) 
{ 
    $sql=("INSERT INTO ravichandran_ashwin(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) 
     
       echo "<script> document.location.href='successful.php'</script>";
    
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Error.. Your vote not submitted")';
        echo '</script>';
    } 
}
         
       if(isset($_POST['pandya'])) 
{ 
    $sql=("INSERT INTO hardik_pandya(id) VALUES (NULL)"); 
    if (mysqli_query($conn, $sql)) 
     
       echo "<script> document.location.href='successful.php'</script>";
    
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