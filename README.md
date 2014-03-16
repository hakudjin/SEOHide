SEOHide
=======

Script SEOHide designed to hide links from search engines. It is written in the PHP and JavaScript (using jQuery).

## Installation

Copy files in you directory.

## Usage

Require **SEOHide.php**.

```php
<?php 
  require_once 'SEOHide/SEOHide.php';
?>
```

Call method **SEOHide::link()** or function **seohide_link()**.

```php
<?php 
  SEOHide::link('Google Search', 'http://www.google.com/', 'class="some-class"');
?>
```

or 

```php
<?php 
  seohide_link('Google Search', 'http://www.google.com/', 'class="some-class"');
?>
```

Call method **SEOHide::print_javascript()** or function **seohide_print_javascript()** end site.

```php
<!doctype html>
<html lang="en">
<head>
  ...
</head>
<body>
  ...
  <?php 
    SEOHide::print_javascript();
  ?>
</body>
</html>
```

or 


```php
<!doctype html>
<html lang="en">
<head>
  ...
</head>
<body>
  ...
  <?php 
    seohide_print_javascript();
  ?>
</body>
</html>
```
