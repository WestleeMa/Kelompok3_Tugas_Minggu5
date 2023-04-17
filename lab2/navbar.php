
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <img src="../img/icon web.png" class="iconnav" />Toko Komputer
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-1">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../News.php">News</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../Hardware.php">Hardware</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../software.php">Software</a>
                </li>

                <!--buat garis dropdown
                  <li><hr class="dropdown-divider" /></li>
                -->

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../Membership.php" style="color: gold;">Membership</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" style="color: red;">Dashboard</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              onclick="search()"
            />
            <button
              class="btn btn-outline-success"
              type="submit"
              onclick="search()"
            >
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>