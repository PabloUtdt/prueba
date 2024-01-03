


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generador QR</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div id="t-c">
    <h1 id="title">Qr Generator PRUEBA</h1>
    <img src="image/hackerman.jpg" alt="">
  </div>
  <form method="post" action="index.php">
    <input type="text" id="text" name="qr">
    <button type="submit" id="generar">Generar</button>
      <div id="container">
        <?php 
          require_once __DIR__.'/vendor/autoload.php';
          use chillerlan\QRCode\{QRCode, QROptions};

          if(!empty($_POST['qr'])){
            $qrImg = (new QRCode)->render($_POST['qr']);
            echo '<img style="width: 240px" src="'.$qrImg.'" alt="QR Code" />';
            echo '<a id="btn-download" href="'.$qrImg.'" download>Descargar</a>';
          }
        ?>
      </div>
  </form>  
</body>
</html>