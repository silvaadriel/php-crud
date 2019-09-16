<?php
include_once 'php_actions/db_connection.php';
include_once 'utils/calculate_age.php';
include_once 'includes/message.php';
include_once 'includes/header.php';
?>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clients</h3>
    <table class="striped">
      <thead>
        <tr><th>Name:</th><th>Last Name:</th><th>Email:</th><th>Age:</th></tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM clients";
          $result = pg_query($connect, $sql);

          if (pg_num_rows($result) > 0):
            while ($data = pg_fetch_array($result)):
        ?>
        <tr>
          <td><?php echo $data['name']; ?></td>
          <td><?php echo $data['last_name']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php echo calculate_age($data['birth_date']); ?></td>
          <td><a href="edit_client.php?id=<?php echo $data['id']; ?>" class="btn-floating waves-effect orange"><i class="material-icons">edit</i></a></td>
          <td><a href="#modal<?php echo $data['id']; ?>" class="btn-floating waves-effect red modal-trigger"><i class="material-icons">delete</i></a></td>
        
          <!-- Modal Structure -->
          <div id="modal<?php echo $data['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Warning!</h4>
              <p>Are you sure you want to delete this client?</p>
            </div>
            <div class="modal-footer">
              <form action="php_actions/delete_client.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                <button type="submit" class="btn waves-effect red">Yes, I'm sure</button>
                <a href="#!" class="btn modal-close waves-effect">Cancel</a>
              </form>
            </div>
          </div>
        
        </tr>
        <?php
            endwhile;
          else:
        ?>
        <tr>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        <tr>
        <?php
          endif;
        ?>
      </tbody>
    </table>
    <a href="./add_client.php" class="btn waves-effect">Add client</a>
  </div>
</div>
<?php include_once 'includes/footer.php' ?>