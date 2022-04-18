<section id="navbar" class="navbar navbar-expand-lg navbar-dark px-3 py-1">
    <div class="container">
        <!-- <nav class="navbar navbar-expand-lg navbar-dark px-3"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-4 py-2 ">
                    <a class="nav-link text-light px-0" href=home">BERANDA</a>
                </li>
                <li class="nav-item mr-4 py-2 ">
                    <a class="nav-link text-light px-0" href=About">TENTANG</a>
                </li>
                <li class="nav-item mr-4 py-2 ">
                    <a class="nav-link text-light px-0" href=blog">ARTIKEL</a>
                </li>
                <li class="nav-item mr-4 py-2  ">
                    <a class="nav-link text-light px-0" href=kabinet">KABINET</a>
                </li>
                <li class="nav-item mr-4 py-2 ">
                    <a class="nav-link text-light px-0" href=agenda">AGENDA</a>
                </li>
                <li class="nav-item mr-4 py-2 ">
                    <a class="nav-link text-light px-0" href=galeri">GALERI</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" action='search" method="POST">
                @csrf
                <div class="input-group input-group-sm my-2 input-search">
                    <input type="text" name="term" class="form-control pl-3" placeholder="Cari Judul Artikel"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-search" type="submit" id="button-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="nav my-3 d-flex d-sm-none justify-content-center">
                <div class="wrapper">
                    <a href="https://www.facebook.com/himitpens" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span>Facebook</span>
                        </div>
                    </a>
                    <a href="https://twitter.com/himitpens" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span>Twitter</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/himitpens/" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span>Instagram</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/channel/UCkzRFCIhe9pDsmWtIgP_uAw" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <span>YouTube</span>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/company/himitpens/mycompany/" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <span>LinkedIn</span>
                        </div>
                    </a>
                    <a href="https://medium.com/himit-pens" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-medium"></i>
                            </div>
                            <span>Medium</span>
                        </div>
                    </a>
                    <a href="https://open.spotify.com/show/5ADBxdUSvSvrty1skscpmr?si=I9dQ6ehWS5K9FPqxLOfjDw&dl_branch=1"
                        target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-spotify"></i>
                            </div>
                            <span>Spotify</span>
                        </div>
                    </a>
                </div>
            </ul>
        </div>
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" style="height: 26px;"> -->


    </div>
    <!-- </nav> -->
    </div>
</section>
