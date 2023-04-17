<?php
require_once 'dbcon.php';
if (isset($_GET['ID_Barang'])) {
    $productId = $_GET['ID_Barang'];
    $queryDeleteProduct = $conn->prepare("DELETE FROM barang WHERE ID_Barang = ?");
    $queryDeleteProduct->bind_param("s", $productId);
    if ($queryDeleteProduct->execute()) {
        header('location: dashboard.php');
    }
}
