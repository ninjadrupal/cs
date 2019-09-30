<?php session_start();  header("refresh:5;url=/cs/boot.php");?>
  <!doctype html>
  <html lang="fr">
  <head><meta charset="utf-8"></head>
<body>
<?php
if(isset( $_SESSION['user'])){
  $seesion = $_SESSION['user'];
  $file = "log.txt";
  $image = $_SESSION['url'] .'icon-8.png';
  $search_pattern = "^" . $seesion;
  $file_safe = escapeshellarg($file);
  $pattern_safe = escapeshellarg($search_pattern);
  $result = exec('grep ' . $pattern_safe . ' ' . $file_safe);
  if(!empty($result)){
    $number = explode(";", $result);
    ?>
    <script>
      var CallNotification = new Notification("Pick up the phone ☎️", {
        icon: "<?php echo $image ;?>",
        body: "'<?php echo$number['1']?> 👋 ",
        requireInteraction: true

      });

      var audio = new Audio('falling-into-place.mp3');
      audio.loop = true;
      audio.play();
    </script>
    <?php
    $contents = file_get_contents($file);
    $array = explode("\n", $contents);
    foreach ($array as $arr) {
      if(!(preg_match("/^$seesion/", $arr))){$output[] = $arr;}
    }
    $out = implode("\n", $output);
    file_put_contents($file, $out);
  }
}
?>
</body>
</html>

