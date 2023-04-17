<?php
require_once 'dbcon.php';
require_once 'cleaner.php';
$Nama_Barang = $Stok = $ID_Supplier = $Tipe = $Harga = $ID_Barang = "";
$Nama_BarangErr = $StokErr = $ID_SupplierErr = $TipeErr = $HargaErr = $ID_BarangErr= "";
$isValid = TRUE;
// $save_dir = './uploads';
$ID_Barang = "";

if (isset($_GET['ID_Barang'])) {
    $ID_Barang = $_GET['ID_Barang'];
    $queryGetData = $conn->prepare("SELECT * FROM barang WHERE ID_Barang = '$ID_Barang'");
    // $queryGetData->bind_param("i", $ID_Barang);
    $queryGetData->execute();
    $resGetData  = $queryGetData->get_result();
    $rowGetData = $resGetData->fetch_assoc();
    $numRow = $resGetData->num_rows;
    if ($numRow > 0) {
        $ID_Barang = $rowGetData['ID_Barang'];
        $Nama_Barang = $rowGetData['Nama_Barang'];
        $ID_Supplier = $rowGetData['ID_Supplier'];
        $Tipe = $rowGetData['Tipe'];
        $Harga = $rowGetData['Harga'];
        $Stok = $rowGetData['Stok'];
        // $file_dir = $rowGetData['product_image'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // if ((isset($_GET['ID_Barang']) && is_uploaded_file($_FILES['productImage']['tmp_name'])) || !isset($_GET['ID_Barang'])) {

    //     $rand_name = md5(uniqid(mt_rand(), true));

    //     $org_name = $save_dir . basename($_FILES["productImage"]["name"]);

    //     $file_type = strtolower(pathinfo($org_name, PATHINFO_EXTENSION));

    //     $rand_name .= "." . $file_type;

    //     $target_file = $save_dir . $rand_name;
    // }

    if (isset($_POST['submit'])) {

        // Product Name Validation
        if(empty($_POST['ID_Barang'])){
            $isValid = FALSE;
            $ID_BarangErr = "mohon isi field id barang";
        }
        else{
            $ID_Barang = cleaner($_POST['ID_Barang']);
        }
        if (empty($_POST['Nama_Barang'])) {
            $isValid = FALSE;
            $Nama_BarangErr = "Mohon isi field nama product";
        } else {
            $Nama_Barang = cleaner($_POST['Nama_Barang']);
        }

        // Brand Validation
        if (empty($_POST['ID_Supplier'])) {
            $isValid = FALSE;
            $ID_SupplierErr = "Mohon isi field ID Supplier";
        } else {
            $ID_Supplier = cleaner($_POST['ID_Supplier']);
        }

        // Release Year Validation
        if (empty($_POST['Tipe'])) {
            $isValid = FALSE;
            $TipeErr = "Mohon isi field tahun rilis";
        } else {
            $Tipe = cleaner($_POST['Tipe']);
        }

        // Price Validation
        if (empty($_POST['Harga'])) {
            $isValid = FALSE;
            $HargaErr = "Mohon isi field harga";
        } else {
            $Harga = cleaner($_POST['Harga']);
        }

        if (empty($_POST['Stok'])) {
            $isValid = FALSE;
            $StokErr = "Mohon isi field Stok";
        } else {
            $Stok = cleaner($_POST['Stok']);
        }

        // File Validation 

        // Bila valid maka mulai proses insert/update!

        // Proses insert
        if ($isValid == 1 && !isset($_GET['ID_Barang'])) {
            $queryInsert = $conn->prepare("INSERT INTO barang(ID_Barang, Nama_Barang, Tipe, Harga, ID_Supplier, Stok) VALUES ('$ID_Barang','$Nama_Barang' ,'$Tipe' ,'$Harga' ,'$ID_Supplier', '$Stok' )");
            // $queryInsert->bind_param("ssssi", $Nama_Barang, $Tipe, $Harga, $ID_Supplier, $Stok);
            if ($queryInsert->execute()) {
                    header("Location: dashboard.php");
            }
        }
        // Proses update
        else if ($isValid && isset($_GET['ID_Barang'])) {
            if (!is_uploaded_file($_FILES['productImage']['tmp_name'])) {
                $queryUpdate = $conn->prepare("UPDATE barang SET ID_Barang = '$ID_Barang', Nama_Barang = '$Nama_Barang', Tipe = '$Tipe', Harga= '$Harga', ID_Supplier = '$ID_Supplier', Stok = '$Stok' WHERE ID_Barang = '$ID_Barang'");
                // $queryUpdate->bind_param("aaaaa", $Nama_Barang, $Tipe, $Harga, $ID_Supplier, $Stok, $ID_Barang);
                if ($queryUpdate->execute()) {
                    header("Location: index.php?page=dashboard");
                }
            } else {
                $queryUpdate = $conn->prepare("UPDATE barang SET ID_Barang = '$ID_Barang', Nama_Barang = '$Nama_Barang', Tipe = '$Tipe', Harga = '$Harga', ID_Supplier = '$ID_Supplier', Stok = '$Stok' WHERE Nama_Barang = '$Nama_Barang'");
                // $queryUpdate->bind_param("siiisi", $Nama_Barang, $ID_Barang, $Tipe, $Harga, $ID_Supplier, $Stok, $ID_Barang);
                /*if ($queryUpdate->execute()) {
                    if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target_file)) {
                        unlink("./" . $file_dir);
                        header("Location: index.php?page=dashboard");
                    }
                }*/
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_GET['ID_Barang'])) {
    $head = "Edit Product";
} else {
    $head = "Add Product";
}

include 'bootstrap.php';
include 'sweetalert.php';
?>

<body class="back-color">
    <?php
    include 'navbar.php';
    ?>
    <div class="container mt-5 pt-4">
        <h1 class="fw-bold text-center"><?= $head ?></h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Nama_Barang">ID_Barang</label>
                <input type="text" name="ID_Barang" id="ID_Barang" class="form-control form-control-lg" value="<?= $ID_Barang ?>" />
                <small class="text-danger ml-5" id="productError"><?= $ID_BarangErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Nama_Barang">Nama Barang</label>
                <input type="text" name="Nama_Barang" id="Nama_Barang" class="form-control form-control-lg" value="<?= $Nama_Barang ?>" />
                <small class="text-danger ml-5" id="productError"><?= $Nama_BarangErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="ID_Supplier">ID_Supplier</label>
                <input type="text" name="ID_Supplier" id="ID_Supplier" class="form-control form-control-lg" value="<?= $ID_Supplier ?>" />
                <small class="text-danger ml-5" id="productError"><?= $ID_SupplierErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Tipe">Tipe</label>
                <input type="text" name="Tipe" id="Tipe" class="form-control form-control-lg" value="<?= $Tipe ?>" />
                <small class="text-danger ml-5" id="productError"> <?= $TipeErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Harga">Harga</label>
                <input type="text" name="Harga" id="Harga" class="form-control form-control-lg" value="<?= $Harga ?>" />
                <small class="text-danger ml-5" id="productError"><?= $HargaErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4">
                <label class="form-label" for="Stok">Stok</label>
                <input type="number" name="Stok" id="Stok" class="form-control form-control-lg" value="<?= $Stok ?>" />
                <small class="text-danger ml-5" id="productError"><?= $StokErr ?></small>
            </div>
            <div class="form-outline form-dark mb-4 text-center">
                <input type="submit" name="submit" class="btn btn-outline-success px-5 py-2" />
            </div>
        </form>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#productImage').on('change', function() {
            const file = document.getElementById("productImage").files[0];
            const image = URL.createObjectURL(file);
            $('#prev-img').attr('src', image);
        })
    })
</script>
<style>
    .back-color {
        background-color: #EEEEEE;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .prev-img {
        width: 200px;
        height: 200px;
    }
</style>