<?php 
  require_once 'SEOHide/SEOHide.php';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Example 01</title>
</head>
<body>
  ...
  <ul>
    <li>
      <? SEOHide::link('Google Search', 'http://www.google.com/', 'class="some-class"') ?>
    </li>
    <li>
      <? seohide_link('Google Search', 'http://www.google.com/', 'class="some-class"') ?>
    </li>
  </ul>
  ...
  <?php 
    SEOHide::print_javascript();
  ?>
</body>
</html>