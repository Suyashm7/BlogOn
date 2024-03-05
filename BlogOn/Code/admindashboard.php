<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <title>Admin Dashboard</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold" href="#"><i class='fas fa-blog'></i>BlogON</a>
       
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form action="showparticularuserblog.php" class="form-inline ml-5 my-2 my-lg-0" method="POST">
                        <input class="form-control mr-lg-2" type="search" placeholder="Search" aria-label="Search" id="author" name="author">
                            <button class="btn searchbtn my-2 my-sm-0" type="submit" name="searchblog">Search</button>
                      </form>

                    <ul class="navbar-nav nav ml-auto text-uppercase">
                    <li class="nav-item ">
                        <a class= "nav-link" href="userinfo.php">User Details</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="showallblog.php">View Blogs<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutid">Delete Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="afeedback.php">Feedback</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
</body>
</html>




