<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/main.css">
      <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
      
      <div id="main">
        <header class="cl-lg-18 cl-pg-11 cl-md-10">
      <div id="logo">
        <img src="../images/logo.jpg" alt="logo" title="Logo Birds"> 
        <p>Logo Name</p>
      </div>
      <div class="center_menu cl-pg-14">
        <ul>
          <li><a href="../index.php">Pagrindinis puslapis</a></li>
          <li><a href="../portfolio/portfolio.php">Portfolio</a></li>
          <li><a href="#">Kontaktai</a></li>
        </ul>
      </div>
      <div id="search_input">
        <form>
          <input type="text" placeholder="Paieška" class="search_form">
        </form>
      </div>
    </header>

    <div class="contacts cl-lg-18 cl-pg-11 cl-md-8">

      <div class="contacts_user">
        <h5>User Info</h5>
        <form action="..kontaktai/includes/signup.inc.php" method="post">
          <div class="input-field col s2">
          <input id="first_name" name="vardas" type="text" class="validate" required>
          <label for="first_name">Vardas</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="pavarde" required>
          <label for="last_name">Pavarde</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="uid" required>
          <label for="last_name">UserName</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Siusti
          <i class="material-icons right">send</i>
        </button>
        </form>
      </div>

      <div class="my_contacts">
        <h5>Kontaktai</h5>
        <address>
          <ul>
            <li>E-MAIL: <a href="#">robert123xd1@gmail.com</a></li>
            <li>NAME: <b>Robert</b></li>
            <li>Tel: <b>86000022</b></li>
            <li>Skype: <b>robertas.97</b></li>
          </ul>
        </address>

        <div id="login_user">
          <h5>Login:</h5>
          <form action="" method="post">
            <span><b>Vardas:</b></span>
            <input type="text" name="log_vardas">
            <span><b>Pavarde:</b></span>
            <input type="text" name="log_pass">
            <button class="btn waves-effect waves-light" type="submit" name="action">Siusti
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>

      </div>
    </div>
      <!-- Start Parallax -->
      <div class="parallax-container">
            <div class="parallax"><img src="../images/par1.jpg"></div>
        </div>
    <!-- End Parallax -->

      <footer class="cl-lg-18 cl-pg-13 cl-md-10">
      <ul class="cl-md-11">
        <li><a href="../index.php">Pagrindinis puslapis</a></li>
        <li><a href="../portfolio/portfolio.php">Portfolio</a></li>
        <li><a href="#">Kontaktai</a></li>
      </ul>
      <a href="#"><img src="../images/logo.jpg" alt="logo"></a>
      <p>(c)2018 -</p>
      <p class="myemail">Visiems klausimams (email): <a href="#">robert123xd1@gmail.com</a></p>
    </footer>

      </div>
      
      <!--JavaScript at end of body for optimized loading-->
      <script src="../js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script src="../js/script.js"></script>
    </body>
  </html>