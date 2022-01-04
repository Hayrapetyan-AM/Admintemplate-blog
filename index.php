<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Admin page </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-success">
    
      
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Բարի գալուստ Green eagle!</h1>
                    <p class="lead mb-0">Դուք գտնվում եք <a href="index.php" class="text-decoration-none text-dark">Ադմին պանելում</a>.</p>
                </div>
            </div>
        </header>




        <!-- Page content-->
        <!-- Futured post-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
    <?php
   
        require_once __DIR__.'\classes\Pagination\dbConn.php';
        require_once __DIR__.'\classes\Pagination\paginateClass.php';

        $test = new Pagination($db, 4, "posts"); // passing db connection and limit of items per page (LIMIT) and table name
        
        
?>
</div>

                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-success" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" class="text-success text-decoration-none">HTML</a></li>
                                        <li><a href="#!" class="text-success text-decoration-none">CSS</a></li>
                                        <li><a href="#!" class="text-success text-decoration-none">PHP</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" class="text-success text-decoration-none">Mysql</a></li>
                                        <li><a href="#!" class="text-success text-decoration-none">OOP</a></li>
                                        <li><a href="#!" class="text-success text-decoration-none">Javascript</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <!-- <div class="card-header">Add post</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div> -->
                         <button class="btn btn-dark"  type="button"><a href="add-post.php" class="text-decoration-none text-white">Add new post</a></button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
