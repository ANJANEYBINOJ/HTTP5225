<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week2</title>
</head>
<body>
<!-- Learning Echo     -->
    <?php
    
    echo "<h1>Hello World!</h1>";

    echo "<p>My name is Anjaney Binoj</p>"
    
    ?>

    <hr>

    <!-- Learning variables -->

    <?php


    $fname = "Anjaney";
    $lname = "Binoj";

    echo "<h1>Hello $fname $lname</h1>"


    ?>

    <?php
    $students1 = array(
     'Anjaney',
     'Fenil',
     'Iqbal');

    $students2['first'] = 'Anjaney';
    $students2['last'] = 'Binoj';


    echo $students1[0];
    echo '      ';

    echo $students2 ['last'];

    

    
   


    ?>







</body>
</html>