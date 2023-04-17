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

    <!-- carousel-->
    <div id="capt" class="carousel slide margincarousel" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#capt"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#capt"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#capt"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#capt"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="GPU.php">
            <img
              src="img/scaled/geforce-rtx-4090-product-gallery-full-screen-3840-3.png"
              class="d-block w-100"
              alt="RTX 4090"
            />
          </a>
          <div class="carousel-caption d-none d-md-block shading">
            <h5>Graphical Processing Unit</h5>
            <p>Check for the latest GPU(s) in stock!</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="RAM.php">
            <img
              src="img/scaled/01-gskill-trident-z5-rgb-black-apex-1.png"
              class="d-block w-100"
              alt="Raptor Lake"
            />
          </a>
          <div class="carousel-caption d-none d-md-block shading">
            <h5>Memory</h5>
            <p>Check for the latest RAM modules in stock!</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="PROC.php">
            <img
              src="img/scaled/intelraptoplake.png"
              class="d-block w-100"
              alt="G.SKILL & MB"
            />
          </a>
          <div class="carousel-caption d-none d-md-block shading">
            <h5>Central Processing Unit</h5>
            <p>Check for the latest CPU(s) in stock!</p>
          </div>
        </div>
        <div class="carousel-item">
          <a href="psu.php">
            <img
              src="img/Pengertian-Power-Supply-jenis-jenis-dan-fungsinya-1.jpg"
              class="d-block w-100"
              alt="Be-Quiet! PSU"
            />
          </a>
          <div class="carousel-caption d-none d-md-block shading">
            <h5>Power Supply</h5>
            <p>Check for the latest PSU(s) in stock!</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#capt"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#capt"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="paddingtengah">
      
      <!--heading-->
      <h1 class="white padding">Category</h1>
      <div class="d-flex flex-row flex-wrap">
        <ul>
          <a href="Hardware.php">
            <div class="p-2 hardsoftcontain">
              <img src="img/962028.png" class="ctgimg" />
              <h2>Hardware</h2>
            </div>
          </a>
        </ul>

        <ul>
          <a href="software.php">
            <div class="p-2 hardsoftcontain">
              <img src="img/150332.png" class="ctgimg" />
              <h2>Software</h2>
            </div>
          </a>
        </ul>
      </div>

      <!--heading-->
      <h1 class="white padding">Recently Added</h1>

      <!--Cards-->
      <div class="d-flex flex-row mb-3 flex-wrap">
        <div class="p-2">
          <ul>
            <div class="card cardsize">
              <img
                class="cardimage"
                src="img/o201808201633495922.png"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title titlelimit">GIGABYTE RTX 2080 TI</h5>
                <p class="card-text stocked" id="stocker"></p>
                <p class="card-text">Rp.xx.xxx.xxx</p>
                <a class="btn btn-primary" onclick="stock()">Check</a>
              </div>
            </div>
          </ul>
        </div>
        <div class="p-2">
          <ul>
            <div class="card cardsize">
              <img
                class="cardimage"
                src="img/-CMT32GX5M2X5200C38-Gallery-DOMINATOR-RGB-PLATINUM-BLACK-DDR5-01.png_1200Wx1200H.jpg"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title titlelimit">
                  Corsair DOMINATOR Platinum RGB BLACK DDR5
                </h5>
                <p class="card-text stocked" id="stocker1"></p>
                <p class="card-text">Rp.xx.xxx.xxx</p>
                <a class="btn btn-primary" onclick="stock()">Check</a>
              </div>
            </div>
          </ul>
        </div>
        <div class="p-2">
          <ul>
            <div class="card cardsize">
              <img
                class="cardimage"
                src="img/ROG-MAXIMUS-Z690-APEX-2D-Aura.png"
                class="card-img-top"
              />
              <div class="card-body">
                <h5 class="card-title titlelimit">
                  ROG MAXIMUS Z690 APEX 2D AURA SYNC
                </h5>
                <p class="card-text stocked" id="stocker2"></p>
                <p class="card-text">Rp.xx.xxx.xxx</p>
                <a class="btn btn-primary" onclick="stock()">Check</a>
              </div>
            </div>
          </ul>
        </div>

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
                <p class="card-text stocked" id="stocker3"></p>
                <p class="card-text">Rp.xx.xxx.xxx</p>
                <a class="btn btn-primary" onclick="stock()">Check</a>
              </div>
            </div>
          </ul>
        </div>
      </div>

      <!--heading sale-->
      <h1 class="white padding">Sale</h1>

      <!--Cards-->
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
