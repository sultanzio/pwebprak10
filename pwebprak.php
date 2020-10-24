<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- my css -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="style.css">

    
    <!-- fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    <title>kel10</title>
  </head>
  <body>      
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <div id="btn"></div>
                <button type="button" class="modal-title" onclick="login()">LOGIN</button>
                <button type="button" class="modal-title" onclick="register()">REGISTER</button>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                  <form id="signup" method="POST">
                      <div class="form-group">
                          <label class="" for="email">Email / Username</label>
                          <input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan email atau username" required>
                      </div>

                      <div class="form-group">
                          <label class="" for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
                      </div>

                      <button type="submit" class="btn btn-outline-primary btn-block">Masuk</button>
                  </form>
                  <form id="register" action="input_act.php" method="POST">
                    <div class="form-group" >
                        <label class="" for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukkan email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="username">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Masukkan username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-outline-primary btn-block">Daftar</button>
                </form>
              </div>
          </div>
      </div>
  </div>

    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <span>Form Upload Gambar</span>
                <div id="btn"></div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="upload.php">
                    <div class="form-group">
                    <input type="file" name="gambar">
                    <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="masukan deskripsi foto!"></textarea>
                    <button type="submit" class="btn btn-outline-primary btn-block">Upload</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </div>

  <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="daftarLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="daftarLabel">Daftar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                  
              </div>
          </div>
      </div>
  </div>
        
          <!-- navigasi -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="#">KUYJogja</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link" href="#">Home</a>
                  <a class="nav-item nav-link" href="event.html">Event</a>
                  <a class="nav-item nav-link" href="#">About</a>
                  <a class="btn btn-secondary tombol" href="#" data-toggle="modal" data-target="#upload">UPLOAD</a>
                  <a class="btn btn-secondary tombol" href="#" data-toggle="modal" data-target="#login">JOIN US</a>
                </div>
              </div>
            </div>
          </nav>

          <!-- jumbotron -->
          <header>
            <!-- <div class="jumbotron"> -->
              <div class="container">
                <h1 class="display-5"><span>AMAZING</span> Place <br> With Traditional <span>CULTURE</h1>
                  <a class="btn btn-secondary tombol" href="#">Gallery</a>
              </div>
            <!-- </div> -->
          </header>

        <!-- container -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-10 info-panel">
              <div class="row">
                <div class="col-lg">
                  <a href="#">
                    <img src="img/Path 2.png" alt="path" class="float-left">
                    <h4>GAMING</h4>
                    <p>Friendship on gaming make  new experiences</p>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="">
                    <img src="img/gunung.png" alt="bola" class="float-left">
                    <h4>ADVENTURES</h4>
                    <p>The Nature make you refresh and brave</p>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="">
                    <img src="img/bola.png" alt="path" class="float-left">
                    <h4>SPORTS</h4>
                    <p>Get the real Friendship in sports and make you sportsmanship</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="penutup">
          <div class="container">
        <div class="row row-cols-1 row-cols-md-2 kartu">
            <div class="col mb-4">
            <div class="card">
                <img src="img/1.jpg" class="card-img-top" alt="1">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col mb-4">
            <div class="card">
                <img src="img/2.jpg" class="card-img-top" alt="2">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col mb-4">
            <div class="card">
                <img src="img/3.jpg" class="card-img-top" alt="3">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            </div>
            <div class="col mb-4">
            <div class="card">
                <img src="img/4.jpg" class="card-img-top" alt="4">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
        </div>
      </div>
          <!-- author -->
          <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
              <figure class="figure">
                <a href="#">
                  <img src="img/zalfa3.jpg" class="figure-img img-fluid rounded-circle" alt="zlf">
                  <figcaption class="figure-caption">
                    <h5>IZAL</h5>
                    <p>author</p>
                  </figcaption>
                </a>
              </figure>
            </div>
          </div>
          <section>

          </section>
          <!-- <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a> -->
          <!-- footer -->
          
          <footer>
            <div class="main-content">
              <div class="left box">
                <h2>About us</h2>
                  <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto reprehenderit vel facere adipisci natus sint? Praesentium quam autem assumenda quis eaque eius debitis dignissimos sequi unde. Dolor eos, exercitationem ipsum libero quis quibusdam odit, odio soluta, inventore iste vero impedit hic nostrum delectus esse optio autem quae! Aut, atque consequatur?</p>
                      <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                      </div>
                      <div class="bottom">
                        <center>
                          <span class="credit">Created By <a href="#">KUYJogja</a> | </span>
                          <span class="far fa-copyright"></span> 2020 All rights reserved.
                        </center>
                      </div>
                    </div>
                  </div>
                    <div class="center box">
                      <h2>Address</h2>
                        <div class="content">
                          <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Sleman, Yogyakarta</span>
                          </div>
                          <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+62-765432100</span>
                          </div>
                          <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">kuyjogja@example.com</span>
                          </div>
                        </div>
                     </div>
                    <div class="right box">
                      <h2>Contact us</h2>
                        <div class="content">
                          <form action="#">
                            <div class="email">
                              <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                             <div class="msg">
                              <div class="text">Message *</div>
                              <textarea id=".msgForm" rows="2" cols="25" required></textarea><br />
                                <!-- <textarea id=".msgForm" rows="2" cols="25" required></textarea> -->
                                <div class="btn">
                                  <button type="submit">Send</button>
                                </div>
                              
                          
                    

              <!-- <div class="header">
                background
                <div class="background"></div>
                sosmed
                <div class="sosmed">
                
                <a href="https://www.instagram.com/?hl=id"class="sosmed"><img src="instagram2.png" alt="">@rizaldifaa</a>
                
                <a href="https://web.facebook.com/"class="sosmed"><img src="fb2.png" alt="">Rizaldi Fathan</a>
                
                <a href="file:///C:/Users/lenovo/Desktop/dwpTA/line.html"class="sosmed"><img src="line1.png" alt="">zalfaa___</a>
                </div>
              <div class="nav">
                <div class="navbar-brand">
                  <a href="" class="title">Jogja</a>
                </div>
             </div>
          </div>
          end of navigasi
    
          jargon
              <div class="jargon">
                <h1><span> </span></h1>
                <div class="gallery">
                <a href="https://drive.google.com/drive/folders/1bEqa3Xnz4eIryyYY2jTfui7PQ4pctjiu" class="tombol1">Gallery</a>
              </div>
            </div>
          </div> 
        </div>
        
            info panel
            <div class="panel">
              <div class="game">
                
                <h4>
              </div>
              <div class="bola">
                
                <h4><img src="gunung.png" alt="bola">ADVENTURES</h4>
                <p>The Nature make <br> you refresh and brave</p>
              </div>
              <div class="gunung">
                
                <h4><img src="bola.png" alt="path">SPORTS</h4>
                <p>Get the real <br> Friendship in sports</p>
              </div>
            </div>
    
            home
            <div class="home">
              <h1><img src="izal2.jpg" alt="izal">gunung merapi</h1><p>Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.
                <br> <br>
              Gunung ini sangat berbahaya karena menurut catatan modern mengalami erupsi setiap dua sampai lima tahun sekali dan dikelilingi oleh permukiman yang sangat padat. Sejak tahun 1548, gunung ini sudah meletus sebanyak 68 kali. Kota Magelang dan Kota Yogyakarta adalah kota besar terdekat, berjarak kurang dari 30 km dari puncaknya. Di lerengnya masih terdapat permukiman sampai ketinggian 1700 m dan hanya berjarak empat kilometer dari puncak. Oleh karena tingkat kepentingannya ini, Merapi menjadi salah satu dari enam belas gunung api dunia yang termasuk dalam proyek Gunung Api Dekade Ini (Decade Volcanoes).</p>
              <a href="https://id.wikipedia.org/wiki/Gunung_Merapi" class="tombol2">Visit ></a>
            </div>
            <div class="profil">
              <img src="author.jpg" alt="">
              <p>Author</p>
              <a href="https://www.instagram.com/?hl=id" class="prof1">@rizaldifaa</a>
            </div>
            <div class="footer">
                <p>Copyright &copy; 2019 by. RENZALI</p>
            </div>
           -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- document.querySelector("#wilcity-root > div.wil-scroll-top.active") -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>
      var x =document.getElementById("signup");
      var y =document.getElementById("register");
      var z =document.getElementById("btn");
      
      function register(){
        x.style.left = "-400px";
        y.style.left = "25px";
        z.style.left = "0px";
        TransitionEvent
      }
    
      function login(){
        x.style.left = "25px";
        y.style.left = "480px";
        z.style.left = "0px";
        TransitionEvent
      }
    
    </script>
      <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jscript.js"></script>
  </body>
</html>