<?php 
  $nome = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  
  $validMail = filter_var($mail, FILTER_VALIDATE_EMAIL);
  $validMailAt = strpos($mail, "@");
  $mailDot = strpos($mail, ".");

  $validAge = filter_var($age, FILTER_VALIDATE_INT);

  $validName = strlen($nome);


  if ($validMail === false || $validMailAt === false || $mailDot === false) {
    var_dump("Invalid E-Mail");
  } elseif ($validAge === false ) {
    echo "L'età deve essere inserita con un numero !";
  } elseif ($validName <= 2 ) {
    echo "Il nome è troppo corto.";
  } else {
    echo "Tutti i dati sono validi";
  };


?>