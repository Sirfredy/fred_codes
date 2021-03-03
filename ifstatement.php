<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php primer - if statements</title>
</head>
<body>
    <h3 style="color: red"></h3>
    <?php
    // an if statement that will carry out an action based on the value of the value.
    echo '<h2>If statement</h2>';
    $grade = 80;
    // ===, ==, >, <, >=,<=,
    if($grade >= 80){
        echo '<h3 style = "color:red">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style = "color:green">YOU HAVE FAILED</h3>';

    }
    $grade = 'A';
    // if else if else
    if($grade == 'A'){
        echo '<h2> YOU ARE A SUPWERSTAR</H2>';


    }
    elseif ($grade == 'B') {
        # code...
        echo '<h2>  you did well</h2>';
    }
    else{

       echo '<h2>you have failed... </h2>';
    }
    ?>
</body>
</html>