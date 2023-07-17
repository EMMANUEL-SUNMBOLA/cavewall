<?php
  
  $url = "https://drive.google.com/drive/folders/1fDjMqjv071T0gWFuysW0dcLxQW_SC2fs";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($curl);
  if(curl_errno($curl)){
    echo "Error no:" . curl_errno($curl) . "Error msg:" . curl_error($curl);
    exit;
  }  
  curl_close($curl);
  $patt = '/data-id="(.*?)"/';
  preg_match_all($patt, $result, $matches);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cave Wallpapers</title>
</head>
<body id="body">
    <nav>
        <div class="brandName"><p><span>CAVE</span>WALLS</p></div>
        <div class="functions"><button onclick="dark()" id="theme"><i class="fa-solid fa-moon"></i></button></div>
    </nav>
    <main>
        <h1>My Special Collection of Hd Wallpapers</h1>
        <div class="imgWrap">
            <?php
                if(!empty($matches[2])){
                    foreach($matches[2] as $fileUrl){
                        echo 
                        '<div class="imgCont">
                        <img src="https://drive.google.com/uc?id=' . $fileUrl . '" alt="caveWalls">
                        <p><a href="https://drive.google.com/uc?id=' . $fileUrl . '" target="_blank" download><i class="fa-solid fa-download">Download</i></a></p>
                        </div>';
                    }
                }
            ?>
        </main>
        </div>
    <footer>
        <p class="myName">Caveman</p>
        <p class="socials">
            <a href="https://github.com/EMMANUEL-SUNMBOLA" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a></p>
    </footer>
    <script src="main.js"></script>
</body>
</html>