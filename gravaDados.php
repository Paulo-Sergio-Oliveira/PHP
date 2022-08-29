<style type="text/css">
    body{
        background-color: black;
        text-align: center;
    }
    li{
        color: blueviolet;
        font-size: large;
        text-decoration: none;
        list-style: none;
        font-size: 50px;
    }
</style>
<?php
$filhosPessoa = $_GET["filhos"];
$bonusPessoa = $_GET["bonus"];
echo "<li> $filhosPessoa </li> <li> $bonusPessoa </li>";
?>