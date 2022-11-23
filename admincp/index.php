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
    <h3>Welcome to Admin</h3>
    <?php 
      include("config/config.php");
    ?>
    <?php 
     include("modules/header.php");
    ?>
      <div class="wrapper">
      <?php 
            
            include("modules/main.php");
      ?>
    </div>
    <?php 
      include("modules/footer.php");
    ?>
</body>
</html>