<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <label>
        <input class="input" type="text" name="number" placeholder="Text input">
    </label>
    <button class="success button">Submit</button>
</form>
<?php
if (isset($_POST[number])) {
    $number = $_POST[number];

    function calculateFactorial($number)
    {

        if ($number <= 1) {
            return 1;
        } else {
            return $number * calculateFactorial($number - 1);
        }

    }

    print_r(calculateFactorial($number));
}
?>
</body>
</html>


