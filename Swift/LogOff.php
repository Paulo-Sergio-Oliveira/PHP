<?php
if(isset($_SESSION['user'])){
    session_destroy();
}
header("Location:Login.php");
die();