<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'dashboard') {
        include 'dashboard.php';
    } else if ($_GET['page'] === 'product') {
        include 'ModifyProduct.php';
    } else if ($_GET['page'] === 'deleteProduct') {
        include 'DeleteProduct.php';
    }
} else {
    include 'form.php';
}
