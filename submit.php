<?php
$dataFolder = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR;
$separator = ';';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La mobilité sur le territoire - Codecom des Portes de Meuse</title>
    <meta name="Description" content="Questionnaire visant à recueillir les besoins de la mobilité des habitants du territoire Portes de Meuse">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container">
      <h1 class="text-center my-4">Enregistrement de vos réponses</h1>
      <?php if(!empty($_POST)) {
        $str = "";
        $str .= ($_POST['city'] ?? '').$separator; // $str .= ($_POST['city'] ? $_POST['city'] : '').$separator;
        $str .= ($_POST['ageRadio'] ?? '').$separator;
        $str .= ($_POST['healthSectors'] ?? '').$separator;
        $str .= ($_POST['hasHealthSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['healthSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['publicSectors'] ?? '').$separator;
        $str .= ($_POST['hasPublicSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['publicSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['shopsSectors'] ?? '').$separator;
        $str .= ($_POST['hasShopsSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['shopsSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['hobbiesSectors'] ?? '').$separator;
        $str .= ($_POST['hasHobbiesSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['hobbiesSectorsProblems'] ?? '').$separator;
        $str .= ($_POST['publicTransportUseful'] ?? '').$separator;
        $str .= ($_POST['publicTransportRate'] ?? '').$separator;
        $str .= ($_POST['otherTransports'] ?? '');
        print_r($str_);
        $str_ = str_replace(PHP_EOL, "", $str);
        $str_ .= "\n";
        print_r($str_);
        $contents = file_get_contents($dataFolder.'database.csv');
        $contents .= $str_;
        if(file_put_contents($dataFolder.'database.csv', $contents)) { ?>
          <div class="alert alert-success" role="alert">
            Merci d'avoir participé à ce questionnaire! Vous pouvez à présent fermer cette fenêtre.
          </div>
        <?php } else { ?>
          <div class="alert alert-danger" role="alert">
            Oups! Une erreur s'est produite! <a href="./" class="alert-link">Recommencer</a>
          </div>
        <?php }
      } else { ?>
        <div class="alert alert-danger" role="alert">
          Oups! On dirait que votre questionnaire n'a pas été envoyé! <a href="./" class="alert-link">Recommencer</a>
        </div>
      <?php } ?>
    </div>
  </body>
</html>
