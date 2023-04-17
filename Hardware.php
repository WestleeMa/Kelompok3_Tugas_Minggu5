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

    <title>Toko Komputer</title>
    <link rel="icon" href="img/icon web.png" />
  </head>
  <body>
    <!--nav bar-->
    <?php include 'navbar.php';?>

    <div class="paddingtengah">
    <!--test heading-->
    <h2 class="white padding">CPU(s) <a class="smalltext" href="PROC.php">view more...</a></h2>

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

    <h2 class="white padding">GPU(s) <a class="smalltext" href="GPU.php">view more...</a></h2>
    
    <div class="d-flex flex-row mb-3 flex-wrap">
      <div class="p-2">
        <ul>
          <div class="card cardsizesale">
            <img src="img/pd.png" class="card-img-top cardimage" />
            <div class="card-body">
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              >
                73%
              </span>

              <h5 class="card-title titlelimit">
                ROG Strix RTX® 4090 OC Edition 24GB GDDR6X
              </h5>
              <p class="card-text"><strike>Rp.xxx.xxx.xxx</strike></p>
              <h6>now only</h6>
              <h5>Rp.xx.xxx.xxx</h5>
              <a class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>

      <div class="p-2">
        <ul>
          <div class="card" style="width: 18rem">
            <img
              src="img/o201808201633495922.png"
              class="card-img-top"
            />
            <div class="card-body">
              <h5 class="card-title">
                GIGABYTE RTX 2080 TI
              </h5>
              <p class="card-text stocked">In Stock</p>
              <p class="card-text">Rp.xx.xxx.xxx</p>
              <a class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>
    </div>

    <h2 class="white padding">RAM(s) <a class="smalltext" href="RAM.php">view more...</a></h2> 

    <div class="d-flex flex-row mb-3 flex-wrap">

      <div class="p-2">
        <ul>
          <div class="card cardsizesale">
            <img
              src="img/fe5142111f10cf59ee03c69c28e969af.png"
              class="card-img-top cardimage"
            />
            <div class="card-body">
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              >
                20%
              </span>

              <h5 class="card-title titlelimit">
                XPG 32GB Lancer RGB DDR5 5200 MHz
              </h5>
              <p class="card-text"><strike>Rp.x.xxx.xxx</strike></p>
              <h6>now only</h6>
              <h5>Rp.xxx.xxx</h5>
              <a class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>

        <div class="p-2">
          <ul>
            <div class="card" style="width: 18rem">
              <img
                src="img/-CMT32GX5M2X5200C38-Gallery-DOMINATOR-RGB-PLATINUM-BLACK-DDR5-01.png_1200Wx1200H.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">
                  Corsair DOMINATOR Platinum RGB BLACK DDR5
                </h5>
                <p class="card-text stocked">In Stock</p>
                <p class="card-text">Rp.xx.xxx.xxx</p>
                <a href="#" class="btn btn-primary" onclick="Buy()">Buy Now</a>
              </div>
            </div>
          </ul>
        </div>
    </div>

    <h2 class="white padding">Motherboard(s) <a class="smalltext" href="motherboard.php">view more...</a></h2>

    <div class="d-flex flex-row mb-3 flex-wrap">

      <div class="p-2">
        <ul>
          <div class="card cardsizesale">
            <img
              class="cardimage"
              src="img/Z690-F_01.png"
              class="card-img-top"
            />
            <div class="card-body">
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              >
                99%
              </span>

              <h5 class="card-title titlelimit">ASUS ROG Z690-F</h5>
              <p class="card-text"><strike>Rp.xx.xxx.xxx</strike></p>
              <h6>now only</h6>
              <h5>Rp.x.xxx.xxx</h5>
              <a class="btn btn-primary" onclick="Buy()">Buy Now</a>
            </div>
          </div>
        </ul>
      </div>

        <div class="p-2">
          <ul>
            <div class="card" style="width: 18rem">
              <img
                src="img/ROG-MAXIMUS-Z690-APEX-2D-Aura.png"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">ROG MAXIMUS Z690 APEX 2D AURA SYNC</h5>
                <p class="card-text" style="color: red;">Out of Stock</p>
                <a class="btn btn-primary disabled" onclick="Buy()">Buy Now</a>
              </div>
            </div>
          </ul>
        </div>
      </div>

      <h2 class="white padding">PSU(s) <a class="smalltext" href="psu.php">view more...</a></h2>
      <div class="d-flex flex-row mb-3 flex-wrap">

        <div class="p-2">
          <ul>
            <div class="card cardsize">
              <img
                class="cardimage"
                src="img/be-quiet-pure-power-11-fm-750w-80-plus-gold-effici-319554.png"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title titlelimit">
                  Be Quiet! Pure Power 11 750W 80+ Gold
                </h5>
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
