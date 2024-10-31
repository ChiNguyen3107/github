<?php
session_start();
include 'config.php';

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }

    echo json_encode(['success' => true]);
    exit();
}

echo json_encode(['success' => false]);
exit();