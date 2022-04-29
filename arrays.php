<?php
$estados = array("RJ"=>"Rio de janeiro", "MG"=>"Minas gerais", "SP"=>"Sao paulo", "ES"=>"Espirito santo");

foreach($estados as $x => $x_value) {
  echo " - " . $x . " - " . $x_value;
  echo "<br>";
}
?>