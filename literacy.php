<?php
 include 'connection.php';
 $q=$_GET['q'];
 $q = "SELECT `Male Literacy`, `Female Literacy` FROM `literacy_rate`  WHERE State='$q';";
 $query = mysqli_query($con,$q);
 $row = mysqli_fetch_array($query);
 echo "Male Literacy: ".$row['Male Literacy']." "."Female Literacy: ".$row["Female Literacy"];
?>