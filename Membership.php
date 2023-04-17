<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="member.css" />
    <script src="javas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <title>Toko Komputer</title>
    <link rel="icon" href="img/icon web.png" />
  </head>
  <body>
    <!--nav bar-->
    <?php include 'navbar.php';?>

    <!--mulai flex-->
    <div class="d-flex flex-wrap">
      <div class="p-2 left">
        <h4 class="headreward">Your Reward(s)</h4>

        <!--MODAL-->
        <div
          class="modal fade"
          id="haruskliktombol"
          data-bs-backdrop="static"
          data-bs-keyboard="false"
          tabindex="-1"
          aria-labelledby="haruskliktombolLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1
                  class="modal-title fs-5"
                  id="haruskliktombolLabel"
                  style="color: black"
                >
                  Penggunaan Rewards
                </h1>
              </div>
              <div class="modal-body" style="color: black">
                Berikan ID Customer saat pembelian di toko terdekat:
                <b>WX2EA22</b>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-dismiss="modal"
                >
                  Oke
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="list-group"
          data-bs-toggle="modal"
          data-bs-target="#haruskliktombol"
        >
          <!--LIST 1-->
          <a class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Discount 10%</h5>
              <small class="text-muted">Exp. in 5 day(s)</small>
            </div>
            <p class="mb-1">Pada setiap pembelian Hardware</p>
            <small class="text-muted">Min. Rp 10.000.000</small>
          </a>

          <!--LIST 2-->
          <a class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Cashback 50%</h5>
              <small class="text-muted">Exp. in 5 day(s)</small>
            </div>
            <p class="mb-1">Untuk semua produk</p>
            <small class="text-muted"
              >Min. Rp 100.000 | Max. Cashback Rp. 10.000</small
            >
          </a>

          <!--LIST 3-->
          <a class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Free Merchandise</h5>
              <small class="text-muted"> No Exp.</small>
            </div>
            <p class="mb-1">Dapatkan merch. tumblr khusus untuk anda</p>
            <small class="text-muted">Min. Rp 0</small>
          </a>
        </div>
      </div>
      <div class="p-2 flex-fill">
        <div class="contcurrentstatus">
          <h4 class="headcurrentstats">Current Status</h4>
          <h1 style="color: rgb(172, 86, 36)">Bronze</h1>

          <h1 style="color: rgb(248, 223, 80)" class="currentstatus">Gold</h1>

          <h1 style="color: rgb(65, 163, 255)">Diamond</h1>
        </div>
      </div>

      <div class="p-2 contback">
        <a type="button" onclick="balik()"><h2>Back</h2></a>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <div class="footer">
    <?php include 'footer.php';?>
  </div>
</html>
