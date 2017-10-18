<?php
    if(isset($_GET['pagina_anterior'])){
        $pagina_anterior = filter_input(INPUT_GET, 'pagina_anterior');
    }
session_start();
$_SESSION = array();
session_destroy();
header("location:index.php?p=$pagina_anterior");
?>