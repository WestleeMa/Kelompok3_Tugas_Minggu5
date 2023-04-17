<?php
require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
$head = "DASHBOARD";
include 'bootstrap.php';
include 'sweetalert.php';
?>

<body class="back-color">
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5 pt-4 text-center">
        <h1 class="fw-bolder">Toko Komputer</h1>
        <table class="table caption-top table-responsive mt-4 table-light">
            <caption><a href="./ModifyProduct.php" class="btn btn-outline-success"><i class="bi bi-plus-lg me-2"></i>Add Product</a></caption>
            <thead class="table-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                    <th scopr="col">ID_Supplier</th>
                    <th scope="col">Stok</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- TODO 1 : LOOP DATA -->
                <?php
                $num = 1;
                $queryData = $conn->query("SELECT ID_Barang, 
                                            Nama_Barang, 
                                            Tipe,
                                            Harga, 
                                            ID_Supplier, 
                                            Stok
                                            FROM barang");
                while ($data = $queryData->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?= $num ?></th>
                        <td><?= $data['Nama_Barang'] ?></td>
                        <td><?= $data['Tipe'] ?></td>
                        <td><?= $data['Harga'] ?></td>
                        <td><?= $data['ID_Supplier'] ?></td>
                        <td><?= $data['Stok'] ?></td>
                        <td><a href="./index.php?page=product&ID_Barang=<?= $data['ID_Barang'] ?>" class="btn btn-outline-warning px-3 py-1"><i class="bi bi-pencil me-2"></i>Edit</a></td>
                        <td><a href="./index.php?page=deleteProduct&ID_Barang=<?= $data['ID_Barang'] ?>" class="btn btn-outline-danger px-3 py-1"><i class="bi bi-trash2-fill me-2"></i>Delete</a></td>
                    </tr>
                <?php
                    $num++;
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>

<style>
    .back-color {
        background-color: #EEEEEE;
    }

    .prev-img {
        max-width: 100px;
        max-height: 100px;
    }
</style>