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

    <link rel="stylesheet" href="news.css" />
    <script src="javas.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>

    <title>Toko Komputer</title>
    <link rel="icon" href="img/icon web.png" />
  </head>
  <body>
    <!--nav bar-->
    <?php include 'navbar.php';?>

    <!--heading-->
    <div>
      <h1 class="white padding newshead">Latest News</h1>
    </div>

    <!--cards-->
    <div class="newscard">
      <a href="newsdeets.php" class="cardlink">
        <div class="card mb-3">
          <img
            src="img/nvidia_blackwell_RTX_50_6.png"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Rumor | Nvidia Blackwell RTX 50 rumored to offer biggest perf leap
              in history, company planned GH202 Hopper as contingency in case
              AMD had faster RDNA 3
            </h5>
            <p class="card-text">
              Nvidia's Ada AD102-based GeForce RTX 4090 has been leading the GPU
              performance charts since launch, with AMD's RDNA 3 restricting its
              wrestling arena to the...
            </p>
            <p class="card-text">
              <small class="text-muted">Last updated 1 hour(s) ago</small>
            </p>
          </div>
        </div>
      </a>
    </div>

    <div class="newscard">
      <a href="newsdeets2.php" class="cardlink">
      <div class="card mb-3">
        <img
          src="img/13500-LUCKY-NOOB-2-768x768.jpg"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">
            Intel Core i5-13500 offers all-core boost of 4.5 GHz with power
            unlocked, 12600/12700K performance for $270
          </h5>
          <p class="card-text">
            Intel's new 13th Gen Core CPUs are so easy to obtain that they are
            literally sitting on shelves in Asian stores as we speak. Luckily
            for us, more than a week before...
          </p>
          <p class="card-text">
            <small class="text-muted">Last updated 2 day(s) ago</small>
          </p>
        </div>
      </div>
    </a>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>

  <?php include 'footer.php';?>
</html>
