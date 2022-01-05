<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="header-one">
      <?php if($access) : ?>
        <?php if($rol == "client") : ?>
          <div class= "header-one-user-loged"><a href="index.php?r=client">Àrea Client</a></div>
        <?php else : ?>
          <div class= "header-one-user-loged"><a href="index.php?r=admin">Administració</a></div>
        <?php endif; ?>
      <?php else : ?>
        <div class= "header-one-user"><a href="index.php?r=login">Iniciar sessió&nbsp;</a> | <a href="index.php?r=signup">&nbsp;Registrar-se</a></div>
      <?php endif; ?>    
        <div class="header-one-logo"><a href="./"><img src="./img/logo.svg" alt="logo" /></a></div>
        <div class="header-one-info">+34 972 000 000</div>    
  </div>
  <div class="header-two">
    <div class="topnav" id="myTopnav">
      <a href="./">Inici</a>
      <a href="./index.php?r=habitacions">Habitacions</a>
      <a href="./index.php?r=contacte">Contacte</a>
      <a href="./index.php?r=quisom">Qui som</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
