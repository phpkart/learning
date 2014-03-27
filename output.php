<?php 
namespace fred;

include 'courier.php';
$mono = new \Shipping\Courier('Flipkart');
echo "Courier Name is ".$mono->name.'<br>';
echo \Shipping\Courier::norules("Sai sri");

?>