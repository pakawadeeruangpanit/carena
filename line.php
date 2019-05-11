 <?php
  

function send_LINE($msg){
 $access_token = 'haFsIbSlLqVVUfIerwcdWA1KaqjZkGPPCqXG2H5dAoFWwRRVDJwAoMP39gh9nvq7UZrvCGgeWu+Hj1xaNK/m5EXvIASv9H/bVNLsBioziqA263H+CRinPryFtpRIgwAwaQZzLKL63Ks7py0tkGNYggdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U57352d0d652b50c975d0ee39b84ea3b2',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
