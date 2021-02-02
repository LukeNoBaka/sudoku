<?php
$lvlNum=rand(1, 3);
$difNum=rand(1, 2);
$servername = "localhost";
$username = "root";
$password = "khangisme";
$dbname = "sudokuTables";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysql_error());
}
$sql = "select * from sdklvl where lvl=".$lvlNum;
$result= mysqli_query($conn, $sql);

if( $sql==""){
  echo "no";
}
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $difLvl="dif".$difNum;
        $value=$row[$difLvl];
    }

  }else {
  echo "0 results";
}

$conn->close();
?>
