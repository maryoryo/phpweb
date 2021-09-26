<?php

// $today = date('Y-m-d H:i:s l');
require('../app/functions.php');
$names = [
  'taro',
  'jiro',
  'saburo',
];

$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';
// $username = filter_input(INPUT_GET, 'username');

include('../app/_parts/_header.php');

?>

<p><?= h($message); ?> <?#= h($username); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');
