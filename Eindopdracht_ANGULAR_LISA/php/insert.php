<?php

  $data = json_decode(file_get_contents("php://input"));
  $voornaam = $data->voornaam;
  $achternaam = $data->achternaam;
  $straat = $data->straat;
  $huisnummer = $data->huisnummer;
  $postcode = $data->postcode;
  $plaats = $data->plaats;
  $telefoonnummer = $data->telefoonnummer ;

  mysql_connect("localhost", "root", "");
  mysql_select_db("angulartest");
  mysql_query("INSERT INTO personen('voornaam', 'achternaam','straat','huisnummer', 'postcode', 'plaats', 'telefoonnummer' ) VALUES('".$voornaam."','".$achternaam."','".$straat."', '".$huisnummer."', '".$postcode."','".$plaats."', '".$telefoonnummer."')");

?>
