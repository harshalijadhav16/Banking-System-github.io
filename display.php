<html>
<head>
<title>User Records</title>
<style>
h2{
  padding:40px;
  font-weight:bold;
  text-transform:uppercase;
  color:#414141;
}
.style-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 300px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.style-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.style-table th,
.style-table td {
    padding: 12px 12px;
}
</style>
</head>
<?php
include("connection.php");

$query = "SELECT * FROM user_data";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


//echo $total;

if($total != 0)
{
 ?>
 <h2 align="center">User Records</h2>
 <center>
 <table class="style-table" border="3" cellspacing="5" align="center">
  <thead>
    <tr>
    <th width="10%">Name</th>
    <th width="10%">Email</th>
    <th width="10%">Balance</th>
    </tr>
   </thead>
   </center>
 <?php
 while($result = mysqli_fetch_assoc($data))
 {
  echo "<tr>
        <td>".$result[Name]."</td>
        <td>".$result[Email]."</td>
        <td>".$result[Balance]."</td>
        </tr>
        ";
 }
}
else
{
echo "No Records Found";
}
?>
</table>
</html>
