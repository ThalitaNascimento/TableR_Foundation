<!doctype html>
<html class="no-js" lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo Star Wars</title>
  <link rel = "icon" type = "image" href = "img/icon.PNG"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">


  <!-- Particle -->
  <link rel="stylesheet" media="screen" href="particle/styleparticle.css">


</head>


  <body>

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <center>
          <h1>Table Responsiva</h1>
          </center>
        </div>
      </div>

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">
            


 <?php
  $json = file_get_contents("https://swapi.co/api/people/?format=json");
$json_data = json_decode($json, true);
  ?>

<table class="responsive-card-table stack" id="table">
  <thead>
    <tr>
      <th >NOME</th>
      <th >PESO</th>
      <th >CABELOS</th>
      <th >OLHOS</th>
      <th >GÊNERO</th>
    </tr>
  </thead>

  <tbody>

    <?php for ($i = 0; $i < 10; $i++) {  ?>
   
      <tr>
        <td><?php echo $json_data['results'][$i]['name']; ?></td>
        <td><?php echo $json_data['results'][$i]['mass']; ?></td>
        <td><?php echo $json_data['results'][$i]['hair_color']; ?></td>
        <td><?php echo $json_data['results'][$i]['eye_color']; ?></td>
        <td><?php echo $json_data['results'][$i]['gender']; ?></td>
      </tr>
    
  <?php }  ?>
   
  </tbody>
</table>


</div>

            </div>
          </div>
        </div>
      </div>

     

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
