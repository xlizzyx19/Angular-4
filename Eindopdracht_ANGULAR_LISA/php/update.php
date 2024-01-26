<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$id = $request->id;
$naam = $request-> voornaam;
$achternaam = $request-> achternaam;
$straat = $request-> straat;
$huisnummer = $request-> huisnummer;
$postcode = $request-> postcode;
$plaats = $request-> plaats;
$telefoonnummer = $request-> telefoonnummer;

$conn = new mysqli("localhost", "root", "", "angulartest");

//Update query
$sql = "
UPDATE `personen` SET
`voornaam`='".$naam."',
`achternaam`='".$achternaam."',
`straat`='".$straat."',
`huisnummer`='".$huisnummer."',
`postcode`='".$postcode."',
`plaats`='".$plaats."',
`telefoonnummer`='".$telefoonnummer."' WHERE `id` = ".$id;


if($conn->query($sql) === TRUE) {
  echo "Record updated succesfully!";
}else {
  echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();







  ?>
