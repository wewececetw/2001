<?php
	include_once("setdb.php");
	include_once("array.php");
	include_once("url.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
	<script src="jquery-3.3.1.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="楊昀軒">

    <title>游媽媽 手作蛋糕</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	
	
	

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="?g=main">游媽媽 手作蛋糕</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?g=check">會員中心
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?g=car">購物車</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?g=phone">客服中心</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?g=hollow">商店資訊</a>
            </li>
			 <li class="nav-item">
              <?=$go_login?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div style="margin:10px 0 30px 0" class="col-lg-3">

          <h1 class="my-4"><img src="images/logoa.png" style="width:200px;height:150px;background-size:100%;"></h1>
          <div class="list-group">
            <a href="?g=main" class="list-group-item">圓形蛋糕</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->
<?php include_once($gogo);?>
       

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <div style="position:absolute;top:100%;width:100%">
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
