
<?php 
  if(isset($_SESSION['u_id'])) {
    echo '<p class="join">Sveiki atvyke</p>';
  } else {
    echo '<div class="contacts_user">
        <h5>User Info</h5>
        <form action="includes/kontaktai.inc.php" method="post">
          <div class="input-field col s2">
          <input id="first_name" name="first" type="text" class="validate" required>
          <label for="first_name">Vardas</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last" required>
          <label for="last_name">Pavarde</label>
        </div>
        <div class="input-field col s6">
          <input id="user_name" type="text" class="validate" name="uid" required>
          <label for="user_name">UserName</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="pwd" required>
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
      </div>';
  }
?>
