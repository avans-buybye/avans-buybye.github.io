<!DOCTYPE html>
<html lang="nl">

<head>
<title>buybye</title>
<meta name="keywords"
content="Buybye is een online bestelmiddel waarmee consumenten direct producten kunnen bestellen zonder tussenkomt van winkelwagens en langdurige bestelprocedures." />
<meta charset="UTF-8" />
<body>

<?php
    $greet = "Welkom bij Buybye";
    $order = ", selecteer een bestaand product a.u.b.";
    echo $greet;
    echo $order;

?>

<form action="view/OrderView.php" method="post">
    <select name="option">
        <option type="text" value="select">select</option>
        {foreach from }
        <option type="text" value="Fiets">Fiets</option>
        <option type="text" value="Playstation">Playstation</option>
        <option type="text" value="Schoen">Schoen</option>
    </select>
    <input type="submit">
</form>



</body>
</html>