<?php
require_once 'includes/connect.php';

$query = "SELECT text_content
        FROM text_table
        WHERE ID = 3
";
$result = mysqli_query($conn, $query);
$content = mysqli_fetch_assoc($result);

 ?>
<div class="banner">
    <img class="banner-img" src="image/road.jpg" alt="banner road photo">
</div>
<!-- ############### SECTION ############### -->

<div class="wrapper">
	<section>
		<h1>Patrik Hogler</h1>
     <h2>Front End Developer</h2>
      <p><?php echo $content['text_content']; ?></p>

  		<!-- <p>Hello, today I am studying to Front End Developer at KYH Stockholm, and working part time with sales at Svea Ekonomi AB.</p>
      <p>As a Front End Developer I create and develop the future of sites and applications that works on all browsers and platforms.</p>
      <p>I'm using HTML, CSS, JavaScript and many other modern techniques.</p> -->

  	<!-- <div id="countposition">
       <span class="countdowntext">Time left to <strong>LIA</strong>:</span>
        <div data-countdown="2018/01/15" id="countdown1"></div>
       <span class="countdowntext">Time left to <strong>graduation</strong>:</span>
       <div data-countdown="2018/05/31" id="countdown"></div>
    </div> -->

  </section>
</div>

<iframe class="hangman" src=""></iframe>

<div class="videoWrapperOuter">
  <div class="videoWrapperInner">
    <iframe src="https://www.youtube.com/embed/uxBganA7KnY"
      frameborder="0" allowfullscreen></iframe>
  </div>
</div>


<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
<script type="text/javascript" src="js/main.js"></script>
