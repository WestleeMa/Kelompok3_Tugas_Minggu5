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
      <h1 class="padding newshead"><a href="News.php">Back</a></h1>
    </div>

    <div>
      <div class="container">
        <h2>
          Rumor | Nvidia Blackwell RTX 50 rumored to offer biggest perf leap in
          history, company planned GH202 Hopper as contingency in case AMD had
          faster RDNA 3
        </h2>

        <img src="img/nvidia_blackwell_RTX_50_6.png" class="img" />
        <p>
          Nvidia's Ada AD102-based GeForce RTX 4090 has been leading the GPU
          performance charts since launch, with AMD's RDNA 3 restricting its
          wrestling arena to the RTX 4080. The rumor mill hardly sleeps,
          however, and now we already are getting to know some rough information
          about Nvidia's upcoming GPU architecture codenamed Blackwell.
        </p>

        <p>
          Blackwell is named after David Harold Blackwell, an American
          statistician who is credited with important contributions to the
          fields of game theory and information theory.
        </p>

        <p>
          The first references for Blackwell popped up in leaked driver code
          back in March this year alongside references to Ada and Hopper. It is
          not entirely clear whether Blackwell would be a high-performance
          compute (HPC) or consumer GPU.
        </p>

        <p>
          Paul from RedGamingTech on YouTube claims he has information that
          Nvidia has already begun evaluating Blackwell SKUs internally. These
          are not taped-out designs but more like proof-of-concept prototypes.
        </p>

        <p>
          According to Paul's sources, Nvidia is apparently looking to keep its
          leads intact going in to the next generation — even if it means
          putting out a halo card that would be made in limited quantities and
          priced significantly higher than comparable mainstream offerings.
        </p>

        <p>
          Blackwell is likely to be based on an entirely new multi-chip module
          (MCM)-based shading multiprocessor (SM) design. Paul notes that one of
          the evaluation SKUs is an MCM monstrosity with hyperspeed bus links
          between various chiplets in the MCM package. The current Grace Hopper
          CPU+GPU package uses a high-speed 900 GB/s interconnect.
        </p>

        <p>
          Several leaks earlier this year actually pegged GH100 Hopper to be an
          MCM, but Nvidia opted for a traditional monolithic die instead. Rumor
          is that Nvidia would have actually brought GH202 Hopper to the
          consumer segment in an "emergency, break glass scenario" had the RDNA
          3-based RX 7900 XTX surpassed the RTX 4090.
        </p>

        <p>
          RTX 50 Blackwell will also apparently ship with a denoising
          accelerator as part of the ray tracing pipeline. Nvidia originally
          used a Spatiotemporal Variance-Guided Filtering (SVGF) denoising
          solution for real-time ray tracing. This was supplanted by the Nvidia
          Real-time Denoiser (NRD) that can work with low ray counts to the
          extent of 0.5 or 1 ray per pixel (rpp) and can work with diffuse,
          specular, and infinite light source shadows. NRD is slated to offer
          50% more performance than SVGF-based denoising.
        </p>

        <p>
          It looks like Blackwell will integrate denoising directly as part of
          the RT pipeline, which should theoretically help with higher RT
          performance, particularly in path tracing.
        </p>

        <p>
          In the same video, Paul also talks about how RDNA 4 Navi 41 can be 2x
          as fast as RDNA 3 Navi 31 with much improved performance per Watt.
        </p>

        <p>
          Nvidia and AMD are even yet to fully launch the complete Ada and Navi
          3x stack, respectively, so these very early rumors about their next
          gen GPUs should be taken with a pound of salt.
        </p>
      </div>

      <div class="sourcecontain">
        <p>
          <a
            href="https://www.notebookcheck.net/Nvidia-Blackwell-RTX-50-rumored-to-offer-biggest-perf-leap-in-history-company-planned-GH202-Hopper-as-contingency-in-case-AMD-had-faster-RDNA-3.676091.0.html"
            target=”_blank”
            >source</a
          >
        </p>
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
