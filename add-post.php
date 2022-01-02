<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add new post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="bg-success" style="font-size: 15px;">

 <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Բարի գալուստ Green eagle!</h1>
                    <p class="lead mb-0">Դուք գտնվում եք <a href="index.php" class="text-decoration-none text-dark">Ադմին պանելում</a>.</p>
                </div>
            </div>
        </header>


<div class="container">
<div class="page-header">
    <h1 align="center">Add new post</h1>
</div>

<!-- New Blog Post - START -->
<div class="container">
    <div class="row" id="row_style">
       <!--  <h4 class="text-center">Submit new post</h4> -->
        <div class="col-md-4   col-md-offset-4">
            <form action="" method="post">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Title 251 symbols" name="title" required>
            </div>
            <textarea id="editor" cols="30" rows="10" name="text" required>Text 10 000 symbols</textarea>
            <br>
            <div class="form-group">
                <input type="text" class="form-control mb-1" placeholder="description 300 symbols" name="description" style="font-size: 13px;" required>
                <input type="text" class="form-control mb-1" placeholder="tumbnail 700x350" name="tumbnail" style="font-size: 13px;" required>
                <select name="category" name="category" class="form-control mb-1" style="font-size: 13px;" required>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="PHP">PHP</option>
                    <option value="MySql">MySql</option>
                    <option value="OOP">OOP</option>
                    <option value="Javascript">Javascript</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-dark" type="submit" id="submit" name="submit">Submit new post</button>
            </div>
            </form>
        </div>
    </div>
</div></div>

<?php 
require_once __DIR__ . ("/classes/Post/Post.php");
if (isset($_POST['submit'])) 
{
    $data = $_POST;
    $post = new Post($data);
    $post->create();
}
 ?>

<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>


<style>
    #row_style {
        margin-top: 30px;
    }

    #submit {
        display: block;
        margin: auto;
    }
</style>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 260
        });
    })
</script>
<!-- New Blog Post - END -->

</div>

</body>
</html>