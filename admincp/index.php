<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleadmincp.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/them.css"> -->
    <title>AdminPage</title>
</head>
<body>
    <?php 
      include("config/config.php");
    ?>
  
    <div class="wrapper">
      <?php 
            include("modules/header.php");
            include("modules/main.php");
            // include("modules/footer.php");
      ?>
    </div>
   
</body>
</html>