<?php include_once 'includes/header.php' ?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">New Client</h3>
    <form action="php_actions/create_client.php" method="POST">
      <div class="input-field">
        <input type="text" name="name" id="name"/>
        <label for="name">Name</label>
      </div>

      <div class="input-field">
        <input type="text" name="last_name" id="last_name"/>
        <label for="last_name">Last Name</label>
      </div>

      <div class="input-field">
        <input type="email" name="email" id="email"/>
        <label for="email">Email</label>
      </div>

      <div class="input-field">
        <input type="date" name="birth_date" id="birth_date"/>
        <label for="birth_date">Birth Date</label>
      </div>

      <div class="row right">
        <button class="btn waves-effect" type="submit">Register</button>
        <a class="btn green waves-effect" href="index.php" >Clients List</a>
      </div>
    </form>
  </div>
</div>
<?php include_once 'includes/footer.php' ?>