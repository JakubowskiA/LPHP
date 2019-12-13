<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Learning PHP</title>
  <meta name="author" content="Ariel Jakubowski">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet"> -->
</head>

<body>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
  <!-- <script src="js/script.js"></script> -->
    
    <?php 
        echo(
           Test
        );
    ?>

  <p>Hello, pets!</p>
    <form action="" method="post">
        Name: <input type="text" name="name">
        <br>
        Species: <input type="text" name="species"> 
        <br> 
        Age: <input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    <br><br>
    Pet name: <?php echo $_POST["name"]?>
    <br>
    Pet species: <?php echo $_POST["species"]?>
    <br>
    Pet age: <?php echo $_POST["age"]?>
    <br><br>
    <?php 
    function reportDogInfo(){
    $name = $_POST["name"];
    $species = $_POST["species"];
    $age = $_POST["age"];

    echo "My pet's name is $name. <br>";
    
    echo "My pet is  a $species.<br>";
    
    echo "My pet is $age years old.";
    }
    
    reportDogInfo()
    ?>
    

</body>

</html>