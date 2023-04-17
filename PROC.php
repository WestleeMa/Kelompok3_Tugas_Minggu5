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

    <title>CPU</title>
    <link rel="icon" href="img/icon web.png" />
  </head>
  <body>
    <!--nav bar-->
    <?php include 'navbar.php';?>
    
    <div class="paddingtengah">
    <!--heading-->
    <h2 class="white padding">CPU(s)</h2>

    <!--cards-->
    <div class="d-flex flex-row mb-3 flex-wrap">
      <div class="p-2">
        <ul>
          <div class="card" style="width: 18rem">
            <img
              src="img/12400b_480x480.webp"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title titlelimit">
                Intel Core i5-12400 12th Gen Alder Lake 6 Core(s)
              </h5>
              <p class="card-text stocked">In Stock</p>
              <p class="card-text">Rp.xx.xxx.xxx</p>
              <a href="#" class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>

      <div class="p-2">
        <ul>
          <div class="card cardsizesale">
            <img
              class="cardimage"
              src="img/cpuint1390kr-i9-13900k.png"
              class="card-img-top"
            />
            <div class="card-body">
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              >
                80%
              </span>

              <h5 class="card-title titlelimit">
                Intel Core i9-13900K 13th Gen Processor 8P Cores 16E Cores 32
                Threads 5.8GHz P-Core Boost 4.7GHz E-Core Boost Box
                BX8071513900K
              </h5>
              <p class="card-text"><strike>Rp.xxx.xxx.xxx</strike></p>
              <h6>now only</h6>
              <h5>Rp.x.xxx.xxx</h5>
              <a class="btn btn-primary" onclick="Buy()">Buy Now</a>
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
  </body>

  <?php include 'footer.php';?>
</html>
