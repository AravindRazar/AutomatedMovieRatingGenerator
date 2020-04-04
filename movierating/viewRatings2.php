<?php
session_start();
$AvgRating="";
$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'MoviesRating');
if (isset($_POST['viewRatings2']))
{
echo "<center><h1>THE Ratings are</h1></center>";
$sql="SELECT * from inception";
$result = $db->query($sql);
    if (!$result) 
  {
     trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) 
    {
    echo "<table><tr><th>id</th><th>username</th><th>comment</th><th>rating</th>";
    // output data of each row
     while($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>".$row["id"]."</td> <td>".$row["username"]."</td> <td>".$row["comment"]."</td> <td>".$row["rating"]."</td></tr>";
        }
                echo "</table>";
        } 
        else 
        {
            echo "0 results";
        }
        $sql = "SELECT avg(rating) FROM inception"; 
        $result = $db->query($sql);

        // Print out result
        while($row = $result->fetch_assoc())
        {
            echo "The average rating of darkknight is ".$row['avg(rating)'];
            echo "<br />";
            
    }
}
?>
<style>
table {
  width:80%;
  margin-left: 10%;
  margin-top: 10px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;

</style>