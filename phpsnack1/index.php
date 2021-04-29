<?php
  $campionato = [
    'partita1' => [
      'squadre' => 'Puzzones - Zoppos',
      'punti' => '88 - 12',
    ],
    'partita2' => [
      'squadre' => 'Zoppos - Puzzones',
      'punti' => '8 - 42',
    ],
  ];

  var_dump($campionato);

  for ($i=1; $i <= count($campionato) ; $i++) { ?>
   <div>
      <?= $campionato["partita".$i]["squadre"] ?>
      <?= $campionato["partita".$i]["punti"] ?>
   </div>
  <?php
  }
?>