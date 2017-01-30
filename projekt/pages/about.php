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
      <!-- HIDDEN BOX 1 -->
      <p class="jobedu">Current education.<i id="0" class="fa fa-expand" aria-hidden="true"></i></p>
            <div class="hidden">
                <hr/>
                <?php
                require_once 'includes/connect.php';

                $query = "SELECT text_content
                          FROM text_table
                          WHERE ID = 1
                         ";

                $result = mysqli_query($conn, $query);
                $content = mysqli_fetch_assoc($result);
                ?>
                <p class="databasetext"><?php echo $content['text_content'];?></p>
            </div>

      <!-- HIDDEN BOX 2 -->
      <p class="jobedu">Current job.<i id="1" class="fa fa-expand" aria-hidden="true"></i></p>
            <div class="hidden">
                <hr/>
                <?php
                  require_once 'includes/connect.php';

                  $query = "SELECT text_content
                            FROM text_table
                            WHERE ID = 2
                           ";

                  $result = mysqli_query($conn, $query);
                  $content = mysqli_fetch_assoc($result);
                ?>
                <p class="databasetext"><?php echo $content['text_content'];?></p>
            </div>
  </section>
</div>

<script type="text/javascript" src="js/expand.js"></script>
<script type="text/javascript" src="js/main.js"></script>
