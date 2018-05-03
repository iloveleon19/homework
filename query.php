<?php
    // $_GET['q']="book";
    echo file_get_contents('https://cdict.net/?q='.$_GET['q']) ;
?>