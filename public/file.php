<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <?php 
    echo 'from php file' . '<br />'; // echo not case-sensitive
    ECHO 'from php file' . '<br />'; 

    $grade = 80;
    echo "Your grade is ". $grade;

    // echo "My grade is also ". $Grade;

    # echo "let's comment this line";
    
    $_var = 0;

    /*
    echo "<h2 style='color:red;'>" .
        "hello inside heading 2" .
        "</h2>";
    */
    echo "<h2 style='color:red;'>" ,
    "hello inside heading 2" .
    "</h2>";

    print(50000);
    print '<br>' . 50000;
    ?>

</body>
</html>
