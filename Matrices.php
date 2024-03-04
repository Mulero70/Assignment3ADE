<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Add Matrices</title>
  </head>
  <body>
     <h1>Enter Matrix Elements:</h1>
     <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Matrix 1</h2>
        <input type="number" name="m1r1c1" required> <input type="number" name="m1r1c2" required> <br>
        <input type="number" name="m1r2c1" required> <input type="number" name="m1r2c2" required> <br>
        <h2>Matrix 2</h2>
        <input type="number" name="m2r1c1" required> <input type="number" name="m2r1c2" required> <br>
        <input type="number" name="m2r2c1" required> <input type="number" name="m2r2c2" required> <br>
        <input type="submit" name="submit" value="Add Matrices">
     </form>
      

      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $m1r1 = array($_POST['m1r1c1'], $_POST['m1r1c2']);
            $m1r2 = array($_POST['m1r2c1'], $_POST['m1r2c2']);
            $matrix1 = array($m1r1, $m1r2);
        
            $m2r1 = array($_POST['m2r1c1'], $_POST['m2r1c2']);
            $m2r2 = array($_POST['m2r2c1'], $_POST['m2r2c2']);
            $matrix2 = array($m2r1, $m2r2);

            $res_matrix = array();
            for ($i = 0; $i < sizeof($matrix1); $i++) {
                $res_row = array();
                for ($j = 0; $j < sizeof($matrix1[$i]); $j++) {
                    array_push($res_row, $matrix1[$i][$j] + $matrix2[$i][$j]);
                }
                array_push($res_matrix, $res_row);
            }
            echo "<h2>Resultant Matrix:</h2>";
            foreach ($res_matrix as $row) {
                foreach ($row as $value) {
                    echo $value . " ";
                }
                echo "<br>";
            }
        }
      ?>
  </body>
</html>