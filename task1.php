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
        <input class="input" type="text" name="string" placeholder="Text input">
    </label>
    <button class="success button">Submit</button>
</form>
<?php


if (isset($_POST['string'])) {
    $string = $_POST['string'];
    function reverseString($string)
    {
        $num_char = strlen($string);

        if ($num_char == 1) {
            return "$string";
        } else {
            $num_char--;
            return reverseString(substr($string, 1, $num_char)) . substr($string, 0, 1);

        }

    }

    print_r(reverseString($string));
}
?>
</body>
</html>
