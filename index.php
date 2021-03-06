<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formação Arquiteto PHP</title>
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/style.css">
  <script defer src="assets/index.js"></script>
</head>

<body>
  <div class="card card-main">
    <?php
    foreach (scandir(__DIR__ . '/src') as $content) :
      if (!preg_match('/^([A-Z]{1}[a-z])/', $content)) continue;
      preg_match_all('/([A-z]{1}[a-z]+)/', $content, $match);
      $directory = $match[0];
    ?>
      <div class="card card-sub">
        <div class="card-title">
          <?= implode(' ', $directory) ?>
        </div>
      </div>
    <?php
    endforeach;
    ?>
  </div>
  <main>
    <?php
    require_once __DIR__ . "/src/index.php"
    ?>
  </main>
</body>

</html>
