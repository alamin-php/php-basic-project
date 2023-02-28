<?php 
    require_once('circle.php');
    require_once('rectangle.php');
    require_once('triangle.php');

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $shape       = $_POST['shape'];
    $masurement = $_POST['masurement'];

    switch ($shape) {
        case 'circle':
            $circle = new Circle('Circle', $masurement);
            $area = $circle->getArea();
            break;
        case 'rectangle':
            $rectangle = new Rectangle('Rectangle', $masurement, $masurement);
            $area = $rectangle->getArea();
            break;
        case 'triangle':
            $triangle = new Triangle('Triangle', $masurement, $masurement);
            $area = $triangle->getArea();
            break;
        
        default:
            $area = "Invalid shape selected";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Masurement Result</title>
</head>
<body>

</body>
</html>