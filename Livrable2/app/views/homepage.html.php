<h1><?php echo g("h1") ?></h1>

<?php
  print_r(Db::sql("select * from athletes"));
?>

<form method="POST">
  <input name="myName" placeholder="Your Name">
  <button>Go</button>
</form>

