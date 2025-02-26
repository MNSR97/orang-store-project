<?php

require_once __DIR__ . "/../models/Product.php";
$products = new Product();
$products = $products->getProducts();

require_once __DIR__ . "/../viewers/products-view.php";
?>