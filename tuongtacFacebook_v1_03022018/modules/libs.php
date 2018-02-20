<?php
function crab($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
   )
);
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}


?>