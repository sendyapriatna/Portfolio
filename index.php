<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="icon/png" href="img/pika.ico">

    <title>Sendy Apriatna</title>
  </head>
  <body>

  	<!-- Navbar -->
  	<nav class="navbar navbar-expand-sm navbar-dark fixed-top scrolling-navbar">
  		<div class="container">
  			<div class="navbar-header">
  				<a class="navbar-brand page-scroll" href="#home" style="">The Smurf.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
  			</div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      			<ul class="navbar-nav">
    				<li class="nav-item">
    			        <a class="nav-link page-scroll" href="#portfolio">portfolio</a>
    		      	</li>
    				<li class="nav-item">
    				    <a class="nav-link page-scroll" href="#about">about</a>
    				</li>
    				<li class="nav-item">
    				    <a class="nav-link page-scroll" href="#contact">contact</a>
    				</li>
    			    <li class="nav-item">
    				    <a class="nav-link page-scroll" href="#info">info</a>
    				</li>
    			</ul>
            </div>
  		</div>
		</nav>
    <!-- End Navbar -->

    <!-- Header -->
    <div class="header" style="background-image: url(img/jum.png);">
        <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-5 align-self-center" style="padding-top: 160px;">
                        <h1 style="font-size: 45px" class="font-weight-bold">Hallo . . .</h1>
                        <h1 style="font-size: 70px" class="font-weight-bold">I AM SENDY</h1>
                        <h1 style="font-size: 20px">WEB DEVELOPER AND DESIGNER</h1 style="font-size: 30px">
                    </div>
                    <div class="col-5 align-self-center">
                        <img class="img-fluid" src="img/me.png">
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- End Header -->

	<!-- Konten Portfolio -->
    <section class="portfolio" id="portfolio" >
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-sm-2 text-center">
    				<h5>PORTFOLIO</h5>
    				<br><br>
    			</div>
    		</div>
    		<div class="row">
                <?php 
                    $no = 1;
                    while($col = mysqli_fetch_array($query))
                    {
                ?>
    			<div class="col-sm-4">    
                    <div class="cc">
                        <img class="img-fluid img-tamnel" src="image_view.php?id_gambar=<?php echo $col['id_gambar']; ?>">
                        <p>-<?php echo $col['keterangan']; ?>-</p> 
                        <a href="delete_gambar.php?id_gambar=<?php echo $col['id_gambar']; ?>" onclick="return confirm('Delete Image?')">-</a>  
                    </div>  
    			</div>
                <?php
                    }
                ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-2 text-center cus" style="margin-top: 50px">
                    <a href="form_upload.php">-UPLOAD-</a>
                </div>
    	   </div>   
           <div class="row">
                <div class="col-sm-12">
                    <img src="img/dj.png" class="img-fluid" alt="Responsive image" style="margin-top: 30px">
                </div>
            </div>	
    </section>
    <!-- End Portfolio -->

    <!-- About -->
    <section class="about" id="about">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-sm-2 text-center">
    				<h5>ABOUT</h5>
    				<br>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col-6">
    				<p style="text-align: center;">
    					Hello, My name is Sendy Apriatna. I am a Develover and also a Designer. My experience has taught me that good design is not created in a moment of inspiration or a bubble. It is an iterative process rquiring collaboration between multiple teams and your end user. It is easy to get attached to inital design selution and forgo research and testing but this rarely works. First solution are often wrong because in the early stages it is hard to know enough about the problem you ar attempting to solve.
    				</p>
    			</div>
    		</div>
    	</div>  
    </section>
    <!-- End About -->

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-2 text-center">
                    <h5>CONTACT</h5>
                    <br>
                </div>  
            </div>
            <div class="row justify-content-center">
                <div class="col-6  text-white">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <input type="textarea" id="comment" class="form-control" style="height: 100px">
                        </div>
                        <button class="cusbutton" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Info -->
    <section class="info" id="info">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h5>Info</h5>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <h5>Follow us</h5>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p> - 📌 Pangandaran, Jawa Barat</p>
                    <p> - 📞 +62 857 5911 0587</p>
                    <p> - ⚠️ Informatics'19</p>
                </div>
                <div class="col-6">
                    <a href="https://www.facebook.com/sendyapriatna10/"><img src="img/1.png"></a>
                    <a href="https://www.instagram.com/sndy.prtn/"><img src="img/2.png"></a>
                    <a href=""><img src="img/3.png"></a>
                    <a href=""><img src="img/4.png"></a>
                    <a href=""><img src="img/5.png"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info -->

	<!-- Footer -->
    <footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 text-center">
    				<p>- &copy; Copyright 2020 All rights reserved | Made with ❤️ by Sendy Apriatna -</p>
    			</div>
    		</div>
    	</div>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>