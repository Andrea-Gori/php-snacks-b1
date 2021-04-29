<?php 
  $classe = [
    [
      'nome' => 'Gino',
      'cognome' => ' Boh',
      'voti' => [6, 6, 5.5, 7, 4, 6]
    ],
    [
      'nome' => 'Nino',
      'cognome' => '?_?',
      'voti' => [3, 4, 5, 2, 7, 6]
    ],
    [
      'nome' => 'Zul',
      'cognome' => 'Jhin',
      'voti' => [7, 6, 6, 6, 6, 8]
    ],
  ];

  for ($i=0; $i < count($classe) ; $i++) { 
    $media = array_sum($classe[$i]['voti']) / count($classe[$i]['voti']); ?>

    <div>
      <p><?php echo "Nome : " . $classe[$i]['nome'] ?></p>
      <p><?php echo "Cognome : " . $classe[$i]['cognome'] ?></p>
      <p><?php echo "Media voti : " . $media ?></p>
    </div>
  <?php
  }


?>