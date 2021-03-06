<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/portfolio.css">
    </head>
    
    <div id="main">
      <header class="cl-lg-18 cl-pg-11 cl-md-10">
      <div id="logo">
        <img src="../images/logo.jpg" alt="logo" title="Logo Birds"> 
        <p>Logo Name</p>
      </div>
      <div class="center_menu">
        <ul>
          <li><a href="../index.php">Pagrindinis puslapis</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="../kontaktai/kontaktai.php">Kontaktai</a></li>
        </ul>
      </div>
      <div id="search_input">
        <form>
          <input type="text" placeholder="Paieška" class="search_form">
        </form>
      </div>
    </header>
  
    <!-- Start Article -->

    <article class="portfolio_carus cl-lg-14 cl-pg-11 cl-md-10">
      <h5>Portfolio</h5>
      <div class="carousel">
        <a class="carousel-item" href="#port1"><img src="../images/port1.jpg"></a>
        <a class="carousel-item" href="#port2"><img src="../images/port2.jpg"></a>
        <a class="carousel-item" href="#port3"><img src="../images/port3.jpg"></a>
        <a class="carousel-item" href="#port4"><img src="../images/port4.jpg"></a>
        <a class="carousel-item" href="#port5"><img src="../images/port5.jpg"></a>
        <a class="carousel-item" href="#port6"><img src="../images/port6.jpg"></a>
      </div>
    </article>
    <div class="clear"></div>
    
    <!-- Start Parallax -->
      <div class="parallax-container">
            <div class="parallax"><img src="../images/par2.jpg"></div>
        </div>
    <!-- End Parallax -->

      <article class="portfolio_size cl-lg-18 cl-md-10 cl-pg-10">

        <div class="row">
              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port1.jpg" id="port1">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>

              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port2.jpg" id="port2">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>

              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port3.jpg" id="port3">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
        </div>

        <div class="row">
              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port4.jpg" id="port4">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>

              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port5.jpg" id="port5">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>

              <div class="col s5 m4">
                <div class="card">
                  <div class="card-image">
                    <img src="../images/port6.jpg" id="port6">
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
        </div>

      </article>
    <!-- End Article -->

    <!-- Start Parallax -->
      <div class="parallax-container">
            <div class="parallax"><img src="../images/par3.jpg"></div>
        </div>
    <!-- End Parallax -->

    <?php 
      include_once '../footer.php';
    ?>