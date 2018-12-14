<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="css/kontaktai.css">
      <link rel="stylesheet" href="../index/css/main.css">
    </head>
    <body>
      <?php 
        session_start();
      ?>
      <div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Prašome palaukti<br><small>svetainė kraunasi</small></div></div>

      <div class="sendMail">
        <form name="mailex" method="post" ectype="text/plain" action="mailto:robert123xd1@gmail.com">

          <p class="textUs"><label for="name2">Jusu vardas: <input type="text" name="name" id="name2"/></label>
          </p>

        <p class="textUs"><label for="email2">Jusu E-mail:
          <input type="text" name="email" id="email2"/></label>
        </p>
        <textarea id="" cols="30" rows="10">Žinutė</textarea>

        <p class="textUs">
          <input onclick="closeMenu();" type="submit" name="submit" value="Submit" /></p>

        </form>
      </div>

      <div class="main">

    <header class="cl-lg-18 cl-pg-17 cl-md-16">
      <div id="logo">
        <img src="../images/logo.jpg" alt="logo" title="Logo Birds"> 
        <p>Logo Name</p>
      </div>
      <div class="center_menu">
        <ul>
          <li><a href="../index/index.php">Pagrindinis puslapis</a></li>
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

    <div class="contacts cl-lg-18 cl-pg-11 cl-md-12">

      <?php 
        include_once '../signup.php';
      ?>
      <div class="nav-login">
        <?php 
          if(isset($_SESSION['u_id'])) {
            echo '<form action ="includes/logout.inc.php" method="post"><button type="submit" name="logout">Iseiti</button></form>';
          } else {
            echo '<div id="login_user">
                    <h5>Login:</h5>
                    <form action="includes/login.inc.php" method="post">
                      <span><b>UserName:</b></span>
                      <input type="text" name="uid">
                      <span><b>Slaptazodis:</b></span>
                      <input type="password" name="pwd">
                      <button class="btn waves-effect waves-light" type="submit" name="login">Ieiti
                        <i class="material-icons right">send</i>
                      </button>
                    </form>
                  </div>';
          }
        ?>
        <?php 
          if(isset($_SESSION['u_id'])) {
            echo "<p class='join' onclick='testFunction()'>Prisijungete sekmingai</p>";
          }
        ?>
      </div>
      

      <div class="my_contacts">
        <h5>Kontaktai</h5>
        <address>
          <ul>
            <li>EMAIL: <a href="#" id="mailform" onclick="sendMail();">robert123xd1@gmail.com</a></li>
            <li>NAME: <b>Robert</b></li>
            <li>TEL: <a href="+3708022432">+3708022432</a></li>
            <li>Skype: <b>robertas.97</b></li>
          </ul>
        </address>
      </div>
    </div>
      <!-- Start Parallax -->
      <div class="parallax-container cl-lg-18 cl-pg-10 cl-md-16">
            <div class="parallax"><img src="../images/par1.jpg"></div>
        </div>
    <!-- End Parallax -->

    <div class="clear"></div>

    <footer class="cl-lg-18 cl-pg-15 cl-md-16">
      <ul class="cl-md-9">
        <li><a href="../index/index.php">Pagrindinis Puslapis</a></li>
        <li><a href="../portfolio/portfolio.php">Portfolio</a></li>
        <li><a href="#">Kontaktai</a></li>
      </ul>
      <a href="#"><img src="../images/logo.jpg" alt="logo"></a>
      <p><?php echo '&copy;'.' '.date('Y'); ?></p>
      <p class="myemail">Visiems klausimams (email): <a href="#">robert123xd1@gmail.com</a></p>
    </footer>

  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
    
    function sendMail() {
      document.getElementsByClassName('sendMail')[0].style.display = "block";
      setTimeout(function() {
        var r_g = 0.5;
        document.getElementsByClassName('sendMail')[0].style.backgroundColor = "rgba(119, 119, 119, " + r_g + ")";
      }, 1000);
      setTimeout(function () {
        document.getElementsByName('mailex')[0].style.width = "50%";
        document.getElementsByName('mailex')[0].style.height = "40%";
      },2000);
      setTimeout(function () {
        var textUs = document.getElementsByClassName('textUs');
        for (var i = 0; i < textUs.length; i++) {
          document.getElementsByClassName('textUs')[i].style.opacity = 1;
        }
      },2500);
    }
    function closeMenu() {
      document.getElementsByName('mailex')[0].style.width = "0%";
      document.getElementsByName('mailex')[0].style.height = "0%";
      setTimeout(function() {
        var r_g = 0.0;
        document.getElementsByClassName('sendMail')[0].style.backgroundColor = "rgba(119, 119, 119, " + r_g + ")";
        document.getElementsByClassName('sendMail')[0].style.display = "none";
        document.getElementsByClassName('mailex')[0].style.display = "none";
        var textUs = document.getElementsByClassName('textUs');
        for (var i = 0; i < textUs.length; i++) {
          document.getElementsByClassName('textUs')[i].style.opacity = 0;
        }
      },1000);
    }

    window.onload = function () {
      setTimeout(function() {
        var getElementJoin = document.getElementsByClassName('join')[0].style.color = "#f45d0c";
          setTimeout(function () {
            var getElementJoin = document.getElementsByClassName('join')[0].style.color = "red";
          }, 1000)
      }, 1000);
      setTimeout(function() {
        var getElementJoin = document.getElementsByClassName('join')[1].style.color = "#f4870c";
        var getElementJoin = document.getElementsByClassName('join')[1].style.textDecorationLine = "underline";
          setTimeout(function () {
            var getElementJoin = document.getElementsByClassName('join')[1].style.color = "red";
            var getElementJoin = document.getElementsByClassName('join')[1].style.textDecorationLine = "none";
          }, 2500)
      }, 2500);
    }
  </script>
</body>
</html>