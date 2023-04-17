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
      <div class="container conatinsmall">
        <h2>
          Intel Core i5-13500 offers all-core boost of 4.5 GHz with power
          unlocked, 12600/12700K performance for $270
        </h2>

        <img src="img/13500-LUCKY-NOOB-2-768x768.jpg" class="img" />

        <h3>Intel Core i5-13500 14-core CPU tested ahead of launch</h3>
        <p>
          Intel's new 13th Gen Core CPUs are so easy to obtain that they are
          literally sitting on shelves in Asian stores as we speak. Luckily for
          us, more than a week before formal launch, a known overclocker from
          JagatOC team Alva “Lucky_n00b” Jonathan has been able to buy one
          himself. This provides first-hand information on one of the most
          interesting Intel desktop CPUs for this generation.
        </p>

        <p>
          As a reminder, the Core i5-13500 is a 14-core CPU with 6 Performance
          and 8 Efficient cores. That's one of the biggest jumps compared to
          12th Gen series, as the predecessor had no Efficient cores at all.
          What is intriguing is that Alva seemingly confirms that this i5-13500
          might be using Alder Lake C0 die.
        </p>

        <p>
          The Core i5-13500 is part of the new 65W TDP series. This power level
          applies to PL1 (Power Limit 1) or Processor Base Power as Intel calls
          it now. However, the CPU also supports PL2 or MTP (Max Turbo Power) of
          154W which can actually be forced in motherboard BIOS. Many of
          existing and upcoming Intel motherboards will offer an option to
          increase the period for the CPU to stay boosted with maximum power,
          effectively putting the CPU into a higher performance state for a
          prolonged time.
        </p>

        <p>
          According to Alva, this CPU gains massively from running in max power
          mode, with a difference of 1.5 GHz for all cores running
          simultaneously during heavy workloads such as Cinebench. With default
          65W TDP the max all-core boost is 2.9 to 3.0 GHz, but with TDP
          unlocked it goes up to 4.5 GHz with all cores. This, of course,
          applies to Performance cores, but Efficient cores gain higher
          frequency as well, from 2.9 GHz to 3.5 GHz, as per report.
        </p>

        <p>
          It is said that the CPU running at 4.5 GHz all-core mode almost
          reaches a multi-core performance of Core i7-12700K processor, while in
          65W mode it almost matches i5-12600K (both tested in Cinebench R23).
          However, unlocked power mode means that stock cooler is insufficient
          and not recommended using in this mode.
        </p>

        <img src="img/13500-CINEBENCH-SCORE-768x768.jpg" class="img2" />

        <p>
          Alva did not have time for a full review yet, but here are his notes
          from the brief testing:
        </p>

        <ol class="list-group list-group-numbered">
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              Run on MSI PRO Z690-A DDR4 (1.90 BIOS), and GSkill TridentZ RGB
              DDR4-3600 2x16GB
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">
              Judging from the L2 Cache, seems like an Alder Lake C0 die with 2
              less P-Core?
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              Default detected power config is 65W PL1/154W PL2
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">
              Increasing PL1 from default 65W to Max/Unlimited mode will give
              massive clock boost
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">Max Clock 1-Core 4.8Ghz (P-Core)</div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">
              Sustained All-core Clock on default 65W Mode 2.9-3Ghz P-Core,
              2.9Ghz E-Core
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              Sustained All-core Clock on Max/unlimited PL1 4.5Ghz P-Core,
              3.5Ghz E-Core
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">
              Default 65W Mode might be feasible for Stock Heatsink (Temp might
              be higher just for the initial Burst to 130W ish)
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              Unlimited/Max PL1 Power IS NOT RECOMMENDED for Stock Heatsink
              (will easily hit TjMax)
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">
              65W Multi-Core Performance almost match an i5-12600K on Cinebench
              R23
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start"
          >
            <div class="ms-2 me-auto">
              Max/Unlimited Power Multi-Core Performance slightly below
              i7-12700K!
            </div>
          </li>
          <li
            class="list-group-item d-flex justify-content-between align-items-start list-group-item-dark"
          >
            <div class="ms-2 me-auto">Single-Core close to i5-12600K.</div>
          </li>
        </ol>
      </div>

      <div class="sourcecontain">
        <p>
          <a
            href="https://videocardz.com/newz/intel-core-i5-13500-offers-all-core-boost-of-4-5-ghz-with-power-unlocked-12600-12700k-performance-for-270"
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
