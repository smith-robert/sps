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
  <?php include 'includes/header.php'; ?>
  

  <!-- End Header and Nav -->

  <!-- Main Grid Section -->
  <div class="row" style="background-color:#22282D">
    <div class="ten columns centered">
      <div id="slider">
        <img src="../images/sps/frontpage/group1.jpg" />
        <img src="../images/sps/frontpage/group2.jpg" />
        <img src="../images/sps/frontpage/group3.jpg" />
      </div>
    </div>
  </div>

  
  <hr />
  <div class="row">

    <div class="six columns">
      <h4>Welcome </h4>
      <p>Please visit the <a href="http://www.spsnational.org/about/benefits.htm">SPS Membership</a> page for information on how to join the Society of Physics students. Benefits include subscription to <b>Physics Today</b> magazine and one of its online journals. You must be a member if you with to participate in this local chapter. </p>
      <div class='row'>
        <div class'five columns'>
         <h4> Announcements </h4>
         <hr />
         <p> Dr. Costas Efthimiou accepts applications for ΣΠΣ, the Physics Honor Socienty. Those who have successfully completed several upper level physics courses, have a 3.0 overall GPA, and a 3.5 GPA in math and physics may bring an official transcipt to PSB 131 for Dr. Efthimiou to review. </p>
         <hr />
       </div>
     </div>
   </div>

   <div class='six columns'>
    <div class='row'>
      <div class='eleven columns centered'>
        <dl class="tabs">
          <dd class="active"><a href="#simple1">Meetings</a></dd>
          <dd><a href="#simple2">Mission</a></dd>
        </dl>

        <ul class="tabs-content">
          <li class="active" id="simple1Tab">
            <h5>SPS Meetings</h5>
            <p>We have meetings every other Tuesday in the Physical Sciences building (PSB) room 456. To be added to the mailing list for meetings and SPS group events please send an email to sps(at)ucf(dot)gmail(dot)com.
              Please stay tuned for the Fall 2012 meeting schedule. </p>
          </li>
          <li id="simple2Tab">
            <h5>Mission</h5>
              The purpose of this Chapter is the advancement and diffusion of knowledge of the science of physics and serious encouragement of student interest in physics throughout the academic and local communities.</li>
            </li>


            </ul>
          </div>
        </div>

        <div class='row'>
          <div class='eleven columns centered'>
            <div class='panel'>
              <h4> Events </h5>
               <?php include 'includes/events.php';?>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>

  <div class="row">
    <div class="four columns">
      <div class="panel">
        <a href='http://www.aip.org/'>
          <img src="../images/sps/frontpage/AIP.jpg" /></a>
        </p>
      </div>
    </div>
    <div class="four columns">
      <div class="panel">
        <a href='http://www.spsnational.org/about/benefits.htm'>
          <img src="../images/sps/frontpage/SPS_LOGO.jpg" /></a>
        </p>
      </div>
    </div>
    <div class="four columns">
      <div class="panel">
        <a href='http://www.sps.physics.ucf.edu/images/PlanetarySciencesGroup.jpg'>
          <img src="../images/sps/frontpage/PlanetarySciencesGroup.jpg" /></a>
        </p>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="six columns">
      <div class="panel">
        <a href='http://www.wolframalpha.com/'>
          <img src="../images/sps/frontpage/WolframAlpha.jpg" /></a>
        </p>
      </div>
    </div>
    <div class="six columns">
      <div class="panel">
        <a href='http://mathworld.wolfram.com/'>
          <img src="../images/sps/frontpage/WolframMathworld.jpg" /></a>
        </p>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class="twelve columns">


    </div>
  </div>


  <!-- End Grid Section -->



  <!-- Footer -->
  <?php include 'includes/footer.php';?>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
-->

<!-- Included JS Files (Compressed) -->
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
