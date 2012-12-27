<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Society of Physics Students - UCF </title>

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
-->

<!-- Included CSS Files (Compressed) -->
<link rel="stylesheet" href="../stylesheets/foundation.min.css">
<link rel="stylesheet" href="../stylesheets/foundation.custom.css">
<link rel="stylesheet" href="../stylesheets/app.css">
<link rel="stylesheet" href="../javascripts/fullcalendar/fullcalendar.css">

<script src="../javascripts/modernizr.foundation.js"></script>
</head>
<body>
  <!-- Header and Nav -->
  <?php include 'includes/header.php';
  include 'includes/people.php'; ?>
<div class="row">
  <div class='two columns'>
  </div>
  <div class="ten columns">
  <?php
  $student_list = 'students.txt';
  $char = new GroupList();
  $char->initialize($student_list);
  $char->scan_list();
  $max = count($char->giant_list) - 1;
  foreach($char->giant_list as $key => $value)
  {
    if($key%6 == 0)
    {
      echo '<div class="row">'."\n";
    }
    echo '<div class="two columns">'."\n";
    echo '<div class="panel ">'."\n";
    $char->generate_head($value);
    echo '</div>'."\n";
    echo '</div>'."\n";
    if((($key+1)%6) == 0)
    {
      echo '</div>';
    } else
    {
      if($max == $key)
      {
        echo '</div>';
      }
    }
  }
  ?>
</div>
</div>

  <?php include 'includes/footer.php';?>

  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/foundation.min.js"></script>

  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>

  <script src="../javascripts/jquery.frontpage.slider.js" type="text/javascript"></script>

  <script src="../javascripts/jquery.events.js" type="text/javascript" charset="utf-8"></script>
  <script type='text/javascript' src='javascripts/fullcalendar/fullcalendar.js'></script>
  <script type='text/javascript' src='javascripts/fullcalendar/gcal.js'></script>
  <script type='text/javascript' src='javascripts/jquery.calendar.gcal.js'></script>
</body>
</html>