<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 
    $text= "Quando alcune cose sono in contraddizione, devi vedere il lato opposto di tutto. E quando i significati dietro azioni apparentemente anormali diventano chiari, si può ottenere una risposta completamente diversa. - Merlin ( Seven Deadly Sins )";

    $badWord = $_GET['badWord'];
    $textbad = str_replace($_GET['badWord'], '***', $text);
  ?>

  <div>
    <p>
      <?php
        echo $text;
      ?>
    </p>

    <p>
      <?php
        echo 'Text length: ' . strlen($text);
      ?>
    </p>
  </div>

  <div>
    <p>
      <?php
        echo $textbad;
      ?>
    </p>

    <p>
      <?php
        echo 'Text length: ' . strlen($textbad);
      ?>
    </p>
  </div>


  
</body>
</html>