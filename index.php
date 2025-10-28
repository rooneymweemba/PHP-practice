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
        <input type = text name = "country"><br>
        <input type = submit value = "Find Capital">
    </form>
    
</body>
</html>
<?php 
$capitals = array("USA" => "washigton D.C",
                    "Japan" => "kyoto",
                    "south korea" => "seoul",
                    "mexico" => "città del messico",
                    "italy" => "rome",
                    "germany" => "berlin",
                    "france" => "paris",
                    "spain" => "madrid",
                    "canada" => "ottawa",
                    "brazil" => "brasilia",
                    "india" => "new delhi",
                    "china" => "beijing",
                    "russia" => "moscow",
                    "australia" => "canberra",
                    "egypt" => "cairo",
                    "south africa" => "pretoria",
                    "argentina" => "buenos aires",
                    "sweden" => "stockholm",
                    "norway" => "oslo",
                    "finland" => "helsinki",
                    "netherlands" => "amsterdam",
                    "switzerland" => "bern",
                    "turkey" => "ankara",
                    "greece" => "athens",
                    "portugal" => "lisbon",
                    "ireland" => "dublin");
$capital = $capitals[$_POST["country"]];
echo "The capital of " . $_POST["country"] . " is " . $capital;
?>