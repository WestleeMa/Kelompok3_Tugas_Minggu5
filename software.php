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

    <link rel="stylesheet" href="style.css" />
    <script src="javas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <title>Software</title>
    <link rel="icon" href="img/icon web.png" />
  </head>
  <body>
    <!--nav bar-->
    <?php include 'navbar.php';?>

    <div class="paddingtengah">
    <!--test heading-->
    <h2 class="white padding">Softwares(s)</h2>

    <div class="d-flex flex-row mb-3 flex-wrap">
      <div class="p-2">
        <ul>
          <div class="card cardsize">
            <img
              class="cardimage"
              src="img/Adobe-Premiere-Pro-Logo.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titlelimit">Adobe Premiere Pro CC 2022</h5>
              <p class="card-text stocked">In Stock</p>
              <p class="card-text">Rp.xx.xxx.xxx</p>
              <a href="#" class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>
      <div class="p-2">
        <ul>
          <div class="card cardsize">
            <img
              class="cardimage"
              src="img/C4D_Logo.png"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titlelimit">Cinema 4D</h5>
              <p class="card-text stocked">In Stock</p>
              <p class="card-text">Rp.xx.xxx.xxx</p>
              <a href="#" class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>
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

  <?php include 'footer.php';?>
</html>
