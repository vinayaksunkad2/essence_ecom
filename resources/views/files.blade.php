<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$files = glob("img/bg-img/*.jpg");
foreach($files as $jpg){
    echo $jpg, "\n";
    echo str_replace($jpg,"Peter","Hello world!")

}
?>

</body>
</html>