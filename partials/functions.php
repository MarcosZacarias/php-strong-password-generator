<?php
// Funzione per generare la password
function gen_passw($char_string, $lenght_passw)
{
  $password = "";
  // var_dump($lenght_passw);

  // Ciclo per creare la lunghezza della password 
  for ($i = 1; $i <= $lenght_passw; $i++) {

    // Creare numeri randomici
    $rand_number = rand(0, strlen($char_string) - 1);
    // var_dump($rand_number);

    // Per ogni n° random corrisponde una lettera da generare
    $password .= $char_string[$rand_number];
  }
  // Ritorno la password completa
  return $password;
}
?>