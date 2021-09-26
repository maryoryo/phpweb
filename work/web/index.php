<?php

// $today = date('Y-m-d H:i:s l');
require('../app/functions.php');
$names = [
  'taro',
  'jiro',
  'saburo',
];

?>

<form action="result.php" method="get">
  <!-- <input type="text" name="message">
  <input type="text" name="username"> -->
  <textarea name="message" id="" cols="30" rows="10"></textarea>
  <button>Send</button>
</form>

<?php

include('../app/_parts/_header.php');

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
  <?php if (empty($names)): ?>
    <li>nobady!</li>
  <?php else: ?>
    <?php foreach ($names as $name): ?>
      <li><?= h($name); ?></li>
    <?php endforeach; ?>
  <?php endif ?>

  </ul>

<?php

include('../app/_parts/_footer.php');

