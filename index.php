<?php ?>

<?php

include_once __DIR__."/database.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" href="./assets/style/style.css">
  <title>Dischi in PHP!</title>
</head>
<body>
  <!-- HEADER -->
  <header>
    <img src="./assets/img/logo.svg" alt="">
    <div class="select-container">
      <select class="form-select"></select>
      <select class="form-select"></select>
      <!-- <SelectComp 
        :options="filters.authors"
        type="autore"
        @sendFilterToHeader='sendFilterToApp'/>
      <SelectComp
        :options="filters.genres"
        type="genere"
        @sendFilterToHeader='sendFilterToApp'/> -->
    </div>
  </header>

  <!-- MAIN -->
  <main class="container main-container">
    <div class="cards-container">
      <?php foreach($db["response"] as $disc): ?>
        <div class="disc-card">
          <img src="<?php echo $disc["poster"] ?>" alt="`Title: <?php echo $disc["title"] ?>; Genre: <?php echo $disc["genre"] ?>`">
          <h4><?php echo $disc["title"] ?></h4>
          <span class="author"><?php echo $disc["author"] ?></span>
          <span class="year"><?php echo $disc["year"] ?>}</span>
        </div>
      <?php endforeach; ?>
      <!-- <CardItem
      v-for="(card, index) in filteredCards"
      :key="`card-${index}`"
      :cardInfo="card"/> -->
    </div>
    <!-- <div v-else class="loader-container">
      <div class="lds-ripple">
        <div></div>
        <div></div>
      </div>
    </div> -->
  </main>


  <!-- ============== -->
  <script src="./assets/js/script.js"></script>
</body>
</html>