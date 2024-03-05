
<?php  
$database = "blogon"; 
$mysqli = new mysqli("localhost", "root", "", $database); 
$query = "SELECT * FROM feedback";

echo '<br><center><h1>Feedback</h1></center> <br><br>';
echo '<table width="1200px" border="3" cellspacing="10" cellpadding="3" align="center" bgcolor="#c4e5f7" > 
<tr style="color:black"  > 
    <td> <b><font face="Arial">Name</font></b> </td> 
    <td> <b> <font face="Arial">Mobile</font> </b> </td> 
    <td> <b> <font face="Arial">Email</font> </b> </td> 
    <td> <b> <font face="Arial">Comment</font> </b> </td>
</tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["mobile"];
        $field3name = $row["email"];
        $field4name = $row["msg"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>