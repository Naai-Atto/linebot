 <?php
  

function send_LINE($msg){
 $access_token = 'BvD4wWX3vFNMy1QOZrd/onyCNGvC9mQzQRzuwc2dmzMG42uKu/CCTQKRByc3CBL7OovAmlaQsS4foDweQV9E5Hswb//YE7b0o60Ka+MZ0R/6ZJLrrTQUqBLISIeip9UYLwQce7MYQ8uoG+fy9/3sGAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ubbc7673c0909df9495237b42aed327bb',
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
