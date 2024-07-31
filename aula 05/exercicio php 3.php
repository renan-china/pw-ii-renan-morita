<?php
function ultimoItem($array) { 
    return end($array);
}

// exemplo de uso 
$exemploArray = [23, 242, 45, 65, 69];
echo ultimoItem($exemploArray); //output : 69;

?>