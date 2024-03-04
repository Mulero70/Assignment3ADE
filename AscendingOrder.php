<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sorting Numbers</title>
  </head>
  <body>
    <h1>Enter three numbers:</h1>
    <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
      <label for="num1">Number 1:</label><br>
      <input type="number" id="num1" name="num1" required><br>
      <label for="num2">Number 2:</label><br>
      <input type="number" id="num2" name="num2" required><br>
      <label for="num3">Number 3:</label><br>
      <input type="number" id="num3" name="num3" required><br>
      <input type="submit" name="submit" value="Sort">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numbers = array($_POST['num1'], $_POST['num2'], $_POST['num3']);
      sort($numbers);
      echo '<h2>Numbers in ascending order:</h2>';
      foreach($numbers as $number) {
        echo $number . '<br>';
      }
    }
    ?>
  </body>
</html>