<?php
$sugupuu=simplexml_load_file("kassidXML.xml");
$synniaastad=array($sugupuu->synniaasta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kass php ülesanne</title>
</head>
<body>
<h1>Kassid</h1>
<strong>Trüki välja kõikide kassi sünniaastad</strong>
<table>
    <tr>
        <th>Nimi</th>
        <th>Synniaasta</th>
    </tr>
    <?php
    foreach ($sugupuu->xpath("//kass") as $kass){
        echo "<tr>";
        echo "<td>".($kass->nimi) ."</td>";
        echo "<td>".($kass->synniaasta) ."</td>";
        echo "</tr>";
    }
    ?>
</table>
<strong>Lisaks eelmisele väljasta andmed sorteerituna sünniaastate järgi.</strong>
<table border="1">
    <tr>
        <th>Nimi</th>
        <th>Synniaasta</th>
    </tr>
    <?php
    foreach ($sugupuu->xpath("//kass") as $kass){
        echo "<tr>";
        echo "<td>".($kass->nimi) ."</td>";
        echo "<td>".(asort($synniaastad)) ."</td>";
        echo "</tr>";
    }
    ?>
</table>
</table>
<br><br>
<strong>Väljastatakse kassinimed, kel on sünniaasta lõpeb 10- ga.</strong>
<table border="1">
    <tr>
        <th>Nimi</th>
        <th>Synniaasta</th>
    </tr>
    <?php
    foreach ($sugupuu->xpath("//kass") as $kass) {
        if ($kass->synniaasta ==2010) {
            echo "<tr>";
            echo "<td>" . ($kass->nimi) . "</td>";
            echo "<td>" . ($kass->synniaasta) . "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>
<br><br>
<strong>Näita pärast 2019. aastat sündinud kasside nimesid ja aastat</strong>
<?php
foreach ($sugupuu->xpath("//kass") as $kass){
    if ($kass->synniaasta>2019){
        echo "<li>".($kass->nimi).",";
        echo ($kass->synniaasta) ."</li>";
    }
}
?>
</body>

