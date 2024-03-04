<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>String to Uppercase</title>
  </head>
  <body>
    <h1>Enter the string:</h1>
    <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
      <label for="stringInput">String:</label><br>
      <input type="text" id="stringInput" name="stringInput" required><br>
      <input type="submit" name="submit" value="Convert to uppercase">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $stringInput = $_POST['stringInput'];
      $charArray = str_split($stringInput);
      $charArray = array_map('strtoupper', $charArray);
      $uppercaseString = implode($charArray);
      echo '<h2>String in uppercase:</h2>';
      echo $uppercaseString;
    }
    ?>
  </body>
</html>