<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="main.php" method="post">
    <p>
        Number 1: <input type="number" name="num1">
    </p>
    <p>
        Number 2: <input type="number" name="num2">
    </p>
    <p>
        <input type="submit" name="plus" value="+" />
        <input type="submit" name="minus" value="-" />
        <input type="submit" name="multi" value="x" />
        <input type="submit" name="division" value="/" />
    </p>

    <?php
    if (isset($_POST['plus']) || isset($_POST['minus']) || isset($_POST['multi']) || isset($_POST['division'])) {
        $num3 = null;
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];


        if ($num1 == null || $num2 == null) {
            echo "Error: Please enter a number";
        } else {
            if (isset($_POST['plus'])) {
                $num3 = $num1 + $num2;
            } else if (isset($_POST['minus'])) {
                $num3 = $num1 - $num2;
            } else if (isset($_POST['multi'])) {
                $num3 = $num1 * $num2;
            } else if (isset($_POST['division'])) {
                if ($num2 != 0) {
                    $num3 = $num1 / $num2;
                } else {
                    echo "Error: Division by zero is not allowed.";
                }
            }

            if ($num3 != null) {
                echo "<h3>Resultado: " . $num3 . "</h3>";
            }
        }
    }
    ?>
</form>

</body>
</html>


