<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Object Oreinted PHP</title>
</head>
<body>
   <form action="includes/signup.inc.php" method="post">
      <input type="text" name="username" placeholder="Name">
      <input type="passsword" name="pwd" placeholder="Password">
      <button>Signup</button>
   </form>
<?php
   // require_once 'Classes/car.php';

   // //Accessing a method and a property from within a class
   // $car01 = new Car("G-wagon", "Black");
   // $car02 = new Car("Volvo", "Green");
   // $car03 = new Car("BMW");
   // echo $car02->getCarInfo();
   // echo "<br>";
   // $car01->setColor("Yellow");
   // echo $car01->getColor();

   // echo $car01->vehicleType;
   // echo $car02->color;
?>
</body>
</html>