<?php
try {
    $conn = new PDO("mysql:dbname=crudphp; host=127.0.0.1; charset=utf8", "root","");
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão".utf8_encode($e->getMessage());
}
?>