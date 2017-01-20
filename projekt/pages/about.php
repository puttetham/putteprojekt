<?php include('header.php'); ?>

<!-- ############### SECTION ############### -->
<br>
<br>
<br>
<div class="wrapper">
  <section class="about">
    <h1>P A T R I K &nbsp;&nbsp;H O G L E R<br><br>
    I'm a Front End Developer based in Stockholm, Sweden.</h1>
    <img src="image/test.jpg" class="profile-photo" alt="Photograph of Patrik Hogler">
    <p>HTML . CSS . JAVASCRIPT <br>
    And many more diffrent modern techniques.</p>
  </section>

  <section>
    <p class="jobedu">Current education.<i id="0" class="fa fa-expand" aria-hidden="true"></i></p>

    <?php
    require_once 'includes/connect.php';

    $query = "SELECT text_content
            FROM text_table
            WHERE ID = 1
    ";
    $result = mysqli_query($conn, $query);
    $content = mysqli_fetch_assoc($result);

     ?>
    <div class="hidden">
        <hr/>
        <p class="databasetext">
        <?php
        echo $content['text_content'];
        ?>
        </p>
        <!-- <p>School: KYH Stockholm. </p>
        <p>Website: <a href="http://kyh.se">https://kyh.se</a></p>
        <p>Program: Front-End Developer.</p>
        <p>Status: Full Time.</p>
        <p>Graduation: 2018.</p>
        <p>Adress: Vanadisvägen 9B, 113 46 Stockholm, Sweden.</p> -->
    </div>
      <p class="jobedu">Current job.<i id="1" class="fa fa-expand" aria-hidden="true"></i></p>

      <?php
      require_once 'includes/connect.php';

      $query = "SELECT text_content
              FROM text_table
              WHERE ID = 2
      ";
      $result = mysqli_query($conn, $query);
      $content = mysqli_fetch_assoc($result);
      ?>

      <div class="hidden">
        <hr/>
        <p class="databasetext">
        <?php
        echo $content['text_content'];
        ?>
        </p>
        <!-- <p>Job: Svea Ekonomi AB.</p>
        <p>Website: <a href="http://exchange.svea.com">http://exchange.svea.com</a></p>
        <p>Status: Extra.</p>
        <p>Position: Sales.</p>
        <p>Adress: Skärholmen Galleria, Bredholmsgatan 3, 127 48 Skärholmen, Sweden.</p> -->
      </div>
  </section>
</div>

<!-- ############### FOOTER ############### -->
</div>

<?php include('footer.php'); ?>
<script type="text/javascript" src="js/expand.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
