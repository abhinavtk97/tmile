<?php
//
   echo ini_get('allow_url_fopen');
   $url = 'http://takshak.herokuapp.com/';
   $ch = curl_init();
   curl_setopt ($ch, CURLOPT_URL, $url);
   curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
   curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
   $contents = curl_exec($ch);
   if (curl_errno($ch)) {
     echo curl_error($ch);
     echo "\n<br />";
     $contents = '';
   } else {
     curl_close($ch);
   }

   if (!is_string($contents) || !strlen($contents)) {
   echo "Failed to get contents.";
   $contents = '';
   }

   echo $contents;
// $fp = fsockopen("www.takshak.herokuapp.com/", 80, $errno, $errstr, 30);
// if (!$fp) {
//   echo "$errstr ($errno)<br />\n";
// } else {
//   $out = "GET / HTTP/1.1\r\n";
//   $out .= "Host: www.takshak.herokuapp.com/\r\n";
//   $out .= "Connection: Close\r\n\r\n";
//   fwrite($fp, $out);
//   while (!feof($fp)) {
//     echo fgets($fp, 128);
//   }
//   fclose($fp);
// }