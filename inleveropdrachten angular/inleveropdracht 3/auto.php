
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("127.0.0.1", "root", "", "angular opdr 3");
$result = $conn->query("SELECT * FROM gegevens");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
if ($outp != "") {$outp .= ",";}
$outp .= '{"Name":"' . $rs["bedrijfsnaam"] . '",';
$outp .= '"adres":"' . $rs["adres"] . '",';
$outp .= '"telnr":"' . $rs["telnr"] . '",';
$outp .= '"City":"'. $rs["woonplaats"] . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>
