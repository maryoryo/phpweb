<?php

// $today = date('Y-m-d H:i:s l');
require('../app/functions.php');
// $names = [
//   'taro',
//   'jiro',
//   'saburo',
// ];

createToken();

define('FILENAME', '../app/messages.txt');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validateToken();
  
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';
  
  $filename = '../app/messages.txt';
  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);

  header('Location: http://localhost:8081/result.php');
  exit;
} 

$filename = '../app/messages.txt';
$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

// $color = filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

include('../app/_parts/_header.php');
?>

<ul>
  <?php foreach ($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
</ul>

<!-- <input type="text" name="message">
<input type="text" name="username"> -->
  <!-- <textarea name="message" id="" cols="30" rows="10"></textarea> -->
  <!-- <select name="colors[]" multiple>
    <option value="orange"></option>
    <option value="pink"></option>
    <option value="gold"></option>
  </select> -->
<form action="index.php" method="post">
  <!-- <label><input type="checkbox" name="colors[]" value="orange"></label>
  <label><input type="checkbox" name="colors[]" value="pink"></label>
  <label><input type="checkbox" name="colors[]" value="gold"></label> -->
  <!-- <label><input type="radio" name="color" value="orange"></label>
  <label><input type="radio" name="color" value="pink"></label>
  <label><input type="radio" name="color" value="gold"></label> -->
  <input type="text" name="message">
  <button>POST</button>
  <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
  <!-- <a href="reset.php">[reset]</a> -->
</form>

<?php


?>

  <!-- <p>Hello, PHP!</p>
  <p>Hello, <?#= h($name); ?></p>
  <p>Today: <?#php echo date('Y-m-d H:i:s l'); ?></p> -->
  <!-- <p>Today: <?#= $today; ?></p> -->
  <ul>

  <!-- <?#php if (empty($names)) { ?>
    <li>nobady!</li>
  <?#php } else { ?>
    <?#php foreach ($names as $name) { ?>
      <li><?#= h($name); ?></li>
    <#?php } ?>
  <?#php } ?>
   -->
  <!-- <?php if (empty($names)): ?>
    <li>nobady!</li>
  <?php else: ?>
    <?php foreach ($names as $name): ?>
      <li><?= h($name); ?></li>
    <?php endforeach; ?>
  <?php endif ?>

  </ul> -->

<?php

include('../app/_parts/_footer.php');

