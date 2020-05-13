<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client([
 'base_uri' => 'https://api.quotable.io/',
]);
$response = $client->get('random');
$quote = json_decode($response->getBody(), TRUE);
print
"<h3>".$quote['content']."</h3><br>".$quote['author'];
?>

</body>
</html>