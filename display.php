<?php
if ($_SERVER['REQUEST_METHOD']='POST'){
    $price=$_POST['price'];
    $dis=$_POST['dis'];

    echo $result=$price*$dis*0.1;
}
?>;