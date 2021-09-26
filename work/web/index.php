<?php

// $today = date('Y-m-d H:i:s l');
require('../app/functions.php');
// $names = [
//   'taro',
//   'jiro',
//   'saburo',
// ];

// $color = filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

include('../app/_parts/_header.php');
?>

<!-- <input type="text" name="message">
<input type="text" name="username"> -->
  <!-- <textarea name="message" id="" cols="30" rows="10"></textarea> -->
  <!-- <select name="colors[]" multiple>
    <option value="orange"></option>
    <option value="pink"></option>
    <option value="gold"></option>
  </select> -->
<form action="result.php" method="get">
  <!-- <label><input type="checkbox" name="colors[]" value="orange"></label>
  <label><input type="checkbox" name="colors[]" value="pink"></label>
  <label><input type="checkbox" name="colors[]" value="gold"></label> -->
  <label><input type="radio" name="color" value="orange"></label>
  <label><input type="radio" name="color" value="pink"></label>
  <label><input type="radio" name="color" value="gold"></label>
  <button>Send</button>
  <a href="reset.php">[reset]</a>
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

