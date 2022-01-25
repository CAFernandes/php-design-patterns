<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formação Arquiteto PHP</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script defer src="index.js"></script>
</head>

<body>
  <div class="card card-main">
    <div class="card card-sub">
      <div class="card-title">
        Chains Of Responsibility
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        Command
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        Iterator
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        Observer
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        State
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        Strategy
      </div>
    </div>
    <div class="card card-sub">
      <div class="card-title">
        Template Method
      </div>
    </div>
  </div>
  <main>
    <?php
    if (count($_GET) > 0) {
      $designPattern = array_keys($_GET)[0];
      file_exists(__DIR__ . "/$designPattern/index.php") ? require_once __DIR__ . "/$designPattern/index.php" : 'Unexpeted Error 404 - Design Pattern Not Found';
    } else {
      echo "Escolha um Design Pattern";
      phpinfo();
    }
    ?>
  </main>
</body>

</html>
