<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body style="margin-top: 5%;
    margin-left: 20%;
    margin-right: 20%;
    padding-bottom: 2%;">

    <h1>Selamat Datang di Toko Komputer</h1>
    <h5>Kelompok 3</h5>
    <?php include 'form-e.php'; ?>

    <?php
    session_start();
    require_once 'dbcon.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s = TRUE;

        if(empty($_POST["member"])){
            $s = False;
            echo "<script>
             alert('member harus di isi');
            </script>";
        }
        else {
            $member = $_POST["member"];
        }
        if (empty($_POST["pass"])){
            $s = False;
            echo "<script>
             alert('pw harus di isi');
            </script>";
        }
        else {
            $pw = $_POST["pass"];

        }

        if($s){
            $queryLogin = $conn->prepare("SELECT ID_Member, pw FROM membership WHERE ID_Member = '$member' ;");
            $queryLogin->execute();
            $resLogin = $queryLogin->get_result();
            $numResLogin = $resLogin->num_rows;
            if($numResLogin === 1){
                $rowResLogin = $resLogin->fetch_assoc();
                if($rowResLogin['pw'] == $pw){
                    header("location: ../index.php");
                }
                else{
                    echo "<script>
                    alert('password salah');
                    </script>";
                }
            }
            else{
                echo "<script>
             alert('member tidak ada');
            </script>";
            }
                
                
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

</body>

</html>