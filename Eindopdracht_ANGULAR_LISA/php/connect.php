<?php
//maakt verbinding met database
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$naam =  $request->voornaam;
$achternaam =  $request->achternaam;
$straat =  $request->straat;
$huisnummer = $request->huisnummer;
$postcode = $request->postcode;
$plaats =  $request->plaats;
$telefoonnummer = $request->telefoonnummer;

  $conn = new mysqli("localhost", "root", "", "angulartest");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO personen (voornaam, achternaam, straat, huisnummer, postcode, plaats, telefoonnummer)
  VALUES ('$naam', '$achternaam', '$straat', '$huisnummer', '$postcode', '$plaats', '$telefoonnummer')";

  if($conn->query($sql) === TRUE) {
    echo "New record created succesfully!";
  }
  else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  ?>
