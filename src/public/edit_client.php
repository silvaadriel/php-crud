<?php
include_once 'php_actions/db_connection.php';
include_once 'includes/header.php';

$id = pg_escape_string($_GET['id']);

$sql = "SELECT * FROM clients WHERE id = '$id'";
$result = pg_query($connect, $sql);
$data = pg_fetch_array($result);
?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Edit Client</h3>
    <form action="php_actions/update_client.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
      <div class="input-field">
        <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>"/>
        <label for="name">Name</label>
      </div>

      <div class="input-field">
        <input type="text" name="last_name" id="last_name" value="<?php echo $data['last_name']; ?>"/>
        <label for="last_name">Last Name</label>
      </div>

      <div class="input-field">
        <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>"/>
        <label for="email">Email</label>
      </div>

      <div class="input-field">
        <input type="date" name="birth_date" id="birth_date" value="<?php echo $data['birth_date']; ?>"/>
        <label for="birth_date">Birth Date</label>
      </div>

      <button class="btn waves-effect" type="submit">Save</button>
      <a class="btn green waves-effect" href="index.php" >Clients List</a>
    </form>
  </div>
</div>
<?php include_once 'includes/footer.php' ?>