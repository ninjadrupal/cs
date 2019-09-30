<?php
/**
 * http://cs.flyer.be/logger.php?idcall=$remote&user=$user_name1
 **/

// SNOM 300
if(isset($_GET['idcall']) && isset($_GET['user'])){
  $myfile = fopen("log.txt", "a") or die("Unable to open file!");
  $user=$_GET['user'];$idcall=$_GET['idcall'];
  fwrite($myfile, "\n" . "$user;$idcall");
  fclose($myfile);
}

// Otehrs Phone
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Now we can read the raw POST data from PHP standard input
    $rawPostData = trim(file_get_contents('php://input'));
  if(isset($rawPostData)){
    preg_match('~<CalledPartyNumber>sip:(.*?)@fc3.voipfoehn.net~', $rawPostData, $user);
    preg_match('~<CallingPartyName>(.*?)</CallingPartyName>~', $rawPostData,  $idcall);
    $myfile = fopen("log.txt", "a") or die("Unable to open file!");
    //fwrite($myfile, "\n" . "$rawPostData");
    fwrite($myfile, "\n" . "$user[1];$idcall[1]");
    fclose($myfile);
  }
}






