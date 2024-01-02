<!--
    AVAILABLE HEADER CLASSES

    Default nav height: 96px
    .header-md 		= 70px nav height
    .header-sm 		= 60px nav height

    .b-0 		= remove bottom border (only with transparent use)
    .transparent	= transparent header
    .translucent	= translucent header
    .sticky			= sticky header
    .static			= static header
    .dark			= dark header
    .bottom			= header on bottom

    shadow-before-1 = shadow 1 header top
    shadow-after-1 	= shadow 1 header bottom
    shadow-before-2 = shadow 2 header top
    shadow-after-2 	= shadow 2 header bottom
    shadow-before-3 = shadow 3 header top
    shadow-after-3 	= shadow 3 header bottom

    .clearfix		= required for mobile menu, do not remove!

    Example Usage:  class="clearfix sticky header-sm transparent b-0"
-->
<div id="header" class="navbar-toggleable-md sticky clearfix shadow-before-1">

    <!-- SEARCH HEADER -->
    <div class="search-box over-header">
        <a id="closeSearch" href="#" class="fa fa-remove"></a>
        <form action="page-search-result-1.html" method="get">
            <input type="text" class="form-control" placeholder="SEARCH" />
        </form>
    </div>
    <!-- /SEARCH HEADER -->

    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">
            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <!-- BUTTONS -->
            <ul class="float-right nav nav-pills nav-second-main">
                <!-- SEARCH -->
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <!-- /SEARCH -->
            </ul>
            <a class="logo float-left" href="index.html">
                <img src="/website/assets/images/_smarty/logo_dark.png" alt="" />
            </a>
            <div class="navbar-collapse collapse float-right nav-main-collapse">
                <nav class="nav-main">
                    <ul id="topMain" class="nav nav-pills nav-main nav-animate-flipInY hover-animate-bounceIn">
                        <li><a href="index.php">Beranda</a></li>
                        <li class="dropdown menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                            <a class="dropdown-toggle" href="#">My Schools</a>
                            <ul class="dropdown-menu">
                                <li><a href="/sejarah">Sejarah</a></li>
                                <li><a href="/visi-misi">Visi Misi</a></li>
                                <li><a href="/program-keahlian">Program Keahlian</a></li>
                                <li><a href="/sarana-prasarana">Sarana Prasarana</a></li>
                            </ul>
                        </li>
                        <li class="dropdown menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                            <a class="dropdown-toggle" href="#">Kepegawaian</a>
                            <ul class="dropdown-menu">
                                <li><a href="/tenaga-pendidik">Tenaga Pendidik</a></li>
                                <li><a href="/tenaga-kependidikan">Tenaga Kependidikan</a></li>
                                <li><a href="/wakil-kepala-sekolah">Wakil Kepala Sekolah</a></li>
                                <li><a href="/ketua-program-studi">Ketua Program Studi</a></li>
                                <li><a href="/wali-kelas">Wali Kelas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                            <a class="dropdown-toggle" href="#">Kesiswaan</a>
                            <ul class="dropdown-menu">
                                <li><a href="/osis">Organisasi Siswa Intra Sekolah</a></li>
                                <li><a href="/eskul">Organisasi Ekstrakurikuler</a></li>
                            </ul>
                        </li>
                        <li class="dropdown menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn">
                            <a class="dropdown-toggle" href="#">Repository</a>
                            <ul class="dropdown-menu">
                                <li><a href="/event">Event</a></li>
                                <li><a href="/galery">Galery</a></li>
                                <li><a href="/go-blog">Go Blog</a></li>
                            </ul>
                        <li><a href="/about">About Us</a></li>
                        <!--
                        MENU ANIMATIONS
                        .nav-animate-fadeIn
                        .nav-animate-fadeInUp
                        .nav-animate-bounceIn
                        .nav-animate-bounceInUp
                        .nav-animate-flipInX
                        .nav-animate-flipInY
                        .nav-animate-zoomIn
                        .nav-animate-slideInUp

                        .nav-hover-animate 		= animate text on hover

                        .hover-animate-bounceIn = bounceIn effect on mouse over of main menu
                        -->
                    </ul>

                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>
