<!DOCTYPE html>
<html>
  <?php session_start(); ?>
  <head>
    <title>Reference</title>
  </head>

  <body>
    <form method="POST" action="script.php">
      <p>input is ' dEzE TeKSt wOrDt opgeSchoond'</p>
      <input type="submit">
    </form>

    <h1>Uitkomst1:</h1>
    <?php echo $_SESSION['uitkomst']; ?>
    <br>
    <?php echo $_SESSION['uitkomst2']; ?>

    <h1>Uitkomst2:</h1>
    <?php echo $_SESSION['uitkomst3']; ?>
    <br>
    <?php echo $_SESSION['uitkomst4']; ?>
  </body>
</html>
