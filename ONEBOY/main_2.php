<?php
	$sql="select * from news";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
 <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/banner/photo-1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner/photo-2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner/photo-3.jpg" alt="Third slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner/photo-4.jpg" alt="Four slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="images/banner/photo-5.jpg" alt="Five slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
<?php
do{
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-110">
                <a href="?g=look&go=<?=$row["n_seq"]?>"><img class="card-img-top" style='height:120%;' src="../201/new_pic/<?=$row["n_pic1"]?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="?g=look&go=<?=$row["n_seq"]?>"><?=$row["n_title"]?></a>
                  </h4>
                  <h5>$<?=$row["n_mon"]?></h5>
                  <p class="card-text"><?=nl2br($row["n_con"])?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

<?php
}while($row=mysqli_fetch_assoc($ro));
?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->