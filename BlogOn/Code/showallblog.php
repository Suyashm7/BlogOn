
<?php  
$database = "blogon"; 
$mysqli = new mysqli("localhost", "root", "", $database); 
$query = "SELECT * FROM blog";



if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["title"];
        $field2name = $row["author"];
        $field3name = $row["category"];
        $field4name = $row["image"];
        $field5name = $row["content"];
        $url = "../images/";

        echo '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
    <link rel="stylesheet" type="text/css" href="../css/template.css">
    <title>Show All Blogs</title>';


        echo ' <div class="template1 container mt-5 ">
        <div class="form-box" > 
            <form  id="printTable" enctype="text/plain">
                <div class="form-group"> 
                    <div class="row">
                        <p class="col-lg-12 formfield text-center" id="title" disabled >'.$field1name.'</p>
                        <p class=" col-lg-12 formfield text-center" id="author" disabled >'.$field2name.'</p>
                        <p class=" col-lg-12 formfield text-center mb-5" id="category"  disabled>'.$field3name.'</p>
                        <div class=" row">
                        <div class="col-lg-4" ><img src='.$url.$field4name.' id="templateimage" alt="Image"></div>
                        
                                <p class=" col-lg-8 formfield">'.$field5name.'</p>
                            
                             
                    </div> 
                </div>
            </form> 
            <div class="row">
            <div class="col-lg-11"> </div>
            <button id="printButton" name="printButton"><i class="fa fa-trash-o" style="font-size:30px"></i></button>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div> </br><br>';

    if(isset($_POST["printButton"])) {
        $query2 = "DELETE * FROM blog where '$field1name' = '$field1name'";
        //echo $author;

        if(mysqli_query($mysqli, $query2)){
            //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
           // echo '<script> message => alert("Check your gmail spam") </script>';
           header("Location: login.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                .mysqli_error($conn);
        }
        
    }

    }

    
    
    $result->free();
} 
?>