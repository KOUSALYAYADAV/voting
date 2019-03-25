<?php
if(isset($_GET['results'])){
    $conn = mysqli_connect("localhost","root","","player");
    $result = mysqli_query( $conn,"SELECT * FROM virat_koli");
    $virat = mysqli_num_rows($result);
    echo "<table style='border: 2px solid black ;font-family:monospace; font-size:25px; color:black; text-align:left; border-collapse:collapse; width:50%; '>";
    echo "<th style='background-color:black;color:white;padding: 3px 2px;'>Name</th><th style='background-color:black;color:white;'>Score</th>";
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Virat Kholi</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>$virat</td>";
   //dhoni
    $result1 = mysqli_query( $conn,"SELECT * FROM dhoni");
    $dhoni = mysqli_num_rows($result1);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Dhoni</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black;'>$dhoni</td>";
    //echo "<br>MS Dhoni: $dhoni";
    //rohith
    $result2= mysqli_query( $conn,"SELECT * FROM rohith");
    $rohith = mysqli_num_rows($result2);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; 'd black:'>Rohith</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>$rohith</td>";
    //echo "<br>Rohith: $rohith";
    //dhawan
    $result3 = mysqli_query( $conn,"SELECT * FROM dhawan");
    $dhawan = mysqli_num_rows($result3);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Dhawan</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '> $dhawan</td>";
    //echo "<br>Dhawan: $dhawan";
    //jadeja
    $result4 = mysqli_query( $conn,"SELECT * FROM ravindra_jadeja");
    $jadeja= mysqli_num_rows($result4);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Jadeja</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '> $jadeja</td>";
    //echo "<br>Jadeja: $jadeja";
    //ashwin
    $result5 = mysqli_query( $conn,"SELECT * FROM ravichandran_ashwin");
    $ashwin = mysqli_num_rows($result5);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Ashwin</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>$ashwin</td>";
   // echo "<br>Ashwin: $ashwin";
    //rahul
    $result6 = mysqli_query( $conn,"SELECT * FROM rahul");
    $rahul= mysqli_num_rows($result6);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Rahul</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>$rahul</td>";
    //echo "<br>Rahul: $rahul";
    //pandiya
    $result7 = mysqli_query( $conn,"SELECT * FROM hardik_pandya");
    $pandya = mysqli_num_rows($result7);
    echo "<tr> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>Pandya</td> <td style='  padding: 3px 2px; color:black;border: 2px solid black; '>$pandya</td>";
    //echo "<br>Pandya: $pandya";
    echo "<table>" ;
}
?>      