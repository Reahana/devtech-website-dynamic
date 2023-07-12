<nav class="navbar sticky-top navbar-expand-lg top-menu navbar-light border-bottom border-dark ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/')}}front/image/logo.png" alt="" width="210" height="60" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse fs-4 " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="./about.html">Story</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Fabric
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./fabric/jacquard.html">Jacquard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./fabric/dobby.html">Dobby</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./fabric/plain.html">Plain</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Women Wears
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./women-wears/dress.html">Dress</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./women-wears/tops.html">Tops</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./women-wears/skirts.html">Skirts</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./women-wears/jumpsuit.html">Jumpsuit</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./women-wears/pants.html">Pants</a></li>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./women-wears/jackets.html">Jacket</a></li>

                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="./contact.html">Contact</a>
                </li>
            </ul>
            <!-- social link -->
            <!-- <div class="d-flex social justify-content-sm-start">
              <a href="http://" class="facebook  me-3" target="_blank"><i class="fab fa-facebook-f  "></i></a>
              <a href="http://" class="instagram  me-3"  target="_blank"><i class="fab fa-instagram  "></i></a>
              <a href="http://" class="email  me-3" target="_blank"><i class="fas fa-envelope   "></i></a>
              <a href="http://" class="search   me-5"  target="_blank"><i class="fas fa-search   "></i></a>
            </div> -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

</nav>