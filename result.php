<?php 
$main = 100;
$a = $_POST['test1'];
$b = $_POST['test2'];
$c = $_POST['test3'];

$total = $a+$b+$c;


function rassel($main, $total){
    if($total > $main){
        echo "you are qualified";
    }else{
        echo "you are disqualified";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style=" width: 300px; height: 300px; border: 1px solid; margin: auto; margin-top: 100px; text-align: center;"> <h1 style="color: red; "><?php rassel($main, $total); 
?></h1> </div>
</body>
</html>?