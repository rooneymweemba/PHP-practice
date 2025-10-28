<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method = "POST">
        <lable>Country</lable><br> 
        <input type = text name = "country">
        <input type = submit value = "Find Capital">
    </form>
    
</body>
</html>
<?php 
$capitals = array("USA" => "washigton D.C",
                    "Japan" => "kyoto",
                    "south korea" => "seoul");
$capital = $capitals[$_POST["country"]];
echo "The capital of " . $_POST["country"] . " is " . $capital;
?>