<?php  
$database = "blogon"; 
$mysqli = new mysqli("localhost", "root", "", $database); 
$query = "SELECT * FROM signup";


echo '<br><center><h1>User Information</h1></center> <br><br>';
echo '
<div class="table-class">
<table width="800px" border="3" cellspacing="10" cellpadding="3" align="center"  bgcolor="#c4e5f7"> 
<tr style="color:black cellspacing:10 cellpadding:3" > 
    <td> <b><font face="Arial">UserName</font></b> </td> 
    <td> <b> <font face="Arial">Name</font> </b> </td> 
    <td> <b> <font face="Arial">Email</font> </b> </td> 
    <td> <b> <font face="Arial">Mobile</font> </b> </td> 
</tr>
</div>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["name"];
        $field3name = $row["email"];
        $field4name = $row["mobile"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
 
              </tr>';
    }
    $result->free();
} 
?>