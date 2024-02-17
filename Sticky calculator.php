<html>
<head><title>Simple sticky calculator</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
First number:
<input type="nummber" name="num1" /> <br />
Second number:
<input type="number" name="num2" /> <br/>
<input type="submit" name="add" value="+"/>
<input type="submit" name="sub" value="-"/>
<input type="submit" name="mul" value="*"/>
<input type="submit" name="div" value="/"/>
</form>
<?php
$result = "";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (isset($_POST['add'])) {
        $result = $num1 + $num2;
    } else if (isset($_POST['sub'])) {
        $result = $num1 - $num2;
    } else if (isset($_POST['mul'])) {
        $result = $num1 * $num2;
    } else if (isset($_POST['div'])) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            echo "Cannot divide by zero!";
        }
    }
    echo "The result is: " . $result;

?>
</body>
</html>