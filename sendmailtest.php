<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('a5d4422bb9800ced19b80e844361ca93','3bf741f5ead841f4f55b47184e29273d',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "divine10646@gmail.com",
          'Name' => "Kingsley"
        ],
        'To' => [
          [
            'Email' => "kingsleyakahibe@gmail.com",
            'Name' => "Kingsley"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success(); //&& print_r($response->getData());
  $_data = (array) $response->getData();
  var_dump($_data);
  echo "<br/><br/>";
  $status = $_data["Messages"][0]["Status"];
  var_dump($status);
?>
