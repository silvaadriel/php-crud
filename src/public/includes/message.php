<?php
session_start();

if (isset($_SESSION['message'])): ?>
<script>
  window.onload = () => M.toast({ html: '<?php echo $_SESSION['message'] ?>' });
</script>
<?php
endif;
session_unset();
?>