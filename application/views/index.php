<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?= base_url(); ?>assets/css/output.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/Reginashop.ico" type="image/x-icon" />
    <title>Reginashop</title>
    <!-- Import Font -->
    <link rel="preconnect" href="https://Qfonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- NAVBAR SECTION -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-navbar">
        <div class="container">
            <div class="flex item-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="block py-6 text-2xl font-bold text-white tracking-wide"
                        style="font-family: 'Explora', cursive"> Reginashop</a>
                </div>
                <div class="flex item-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 py-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white rounded-lg shadow-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark xl:text-white py-2 mx-8 group-hover:text-primary flex">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark xl:text-white py-2 mx-8 group-hover:text-primary flex">About</a>
                            </li>
                            <li class="group">
                                <a href="#service"
                                    class="text-base text-dark xl:text-white py-2 mx-8 group-hover:text-primary flex">Service</a>
                            </li>
                            <li class="group">
                                <a href="#product"
                                    class="text-base text-dark xl:text-white py-2 mx-8 group-hover:text-primary flex">Products</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- END OF NAVBAR SECTION -->

    <!-- HERO SECTION -->
    <section id="home" class="pt-16 xl:pt-20">
        <div class="w-full">
            <div
                class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] xl:h-[650px] h-[500px] bg-[url('../../assets/img/hero.jpg')]">
                <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.75)]">
                    <div class="flex h-full items-center justify-center">
                        <div class="px-6 text-center text-white md:px-12">
                            <h1 class="mt-24 mb-5 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">Equipments
                                you need</h1>
                            <h1 class="mb-10 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl opacity-60">For
                                your life</h1>
                            <a class="mb-2 inline-block rounded-full border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-primary hover:bg-opacity-80 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 md:mr-2 md:mb-0"
                                data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HERO SECTION -->

    <!-- ABOUT SECTION -->
    <section class="overflow-hidden pt-16 pb-12 lg:pt-[120px] lg:pb-[90px]" id="about">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap items-center justify-between">
                <div class="w-full px-4 lg:w-6/12">
                    <div class="-mx-3 flex items-center sm:-mx-4">
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="py-3 sm:py-4">
                                <img src="<?= base_url(); ?>assets/img/about/about-1.jpg" alt=""
                                    class="w-full rounded-2xl" />
                            </div>
                            <div class="py-3 sm:py-4">
                                <img src="<?= base_url(); ?>assets/img/about/about-2.jpg" alt=""
                                    class="w-full rounded-2xl" />
                            </div>
                            <div class="py-3 sm:py-4">
                                <img src="<?= base_url(); ?>assets/img/about/about-3.jpg" alt=""
                                    class="w-full rounded-2xl" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:px-4 xl:w-1/2">
                            <div class="relative z-10 my-4">
                                <img src="<?= base_url(); ?>assets/img/about/about-4.jpg" alt=""
                                    class="w-full rounded-2xl pb-3" />
                                <img src="<?= base_url(); ?>assets/img/about/about-5.jpg" alt=""
                                    class="w-full rounded-2xl" />
                                <span class="absolute -right-7 -bottom-7 z-[-1]">
                                    <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                            fill="#3056D3" />
                                        <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                            fill="#3056D3" />
                                        <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                            fill="#3056D3" />
                                        <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                            fill="#3056D3" />
                                        <circle cx="60.3334" cy="104" r="1.66667" transform="rotate(-90 60.3334 104)"
                                            fill="#3056D3" />
                                        <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                            fill="#3056D3" />
                                        <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                            fill="#3056D3" />
                                        <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                            fill="#3056D3" />
                                        <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                            fill="#3056D3" />
                                        <circle cx="1.66667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 89.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 89.3333)" fill="#3056D3" />
                                        <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                            fill="#3056D3" />
                                        <circle cx="45.6667" cy="89.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 89.3333)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 89.3338)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 89.3338)" fill="#3056D3" />
                                        <circle cx="117.667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 117.667 89.3338)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="89.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 89.3338)" fill="#3056D3" />
                                        <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                            fill="#3056D3" />
                                        <circle cx="1.66667" cy="74.6673" r="1.66667"
                                            transform="rotate(-90 1.66667 74.6673)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 31.0003)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 16.3333 74.6668)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 31.0003)" fill="#3056D3" />
                                        <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                            fill="#3056D3" />
                                        <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                            fill="#3056D3" />
                                        <circle cx="45.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 45.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="31.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 31.0003)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 60.3333 74.6668)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 60.3333 30.9998)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 88.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 88.6667 30.9998)" fill="#3056D3" />
                                        <circle cx="117.667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 117.667 74.6668)" fill="#3056D3" />
                                        <circle cx="117.667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 117.667 30.9998)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="74.6668" r="1.66667"
                                            transform="rotate(-90 74.6667 74.6668)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="30.9998" r="1.66667"
                                            transform="rotate(-90 74.6667 30.9998)" fill="#3056D3" />
                                        <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                            fill="#3056D3" />
                                        <circle cx="103" cy="30.9998" r="1.66667" transform="rotate(-90 103 30.9998)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="30.9998" r="1.66667" transform="rotate(-90 132 30.9998)"
                                            fill="#3056D3" />
                                        <circle cx="1.66667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 1.66667 60.0003)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 16.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 16.3333 60.0003)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 16.3333)" fill="#3056D3" />
                                        <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                            fill="#3056D3" />
                                        <circle cx="31" cy="16.3333" r="1.66667" transform="rotate(-90 31 16.3333)"
                                            fill="#3056D3" />
                                        <circle cx="45.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 45.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 60.3333 60.0003)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 60.3333 16.3333)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 88.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 88.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="117.667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 117.667 60.0003)" fill="#3056D3" />
                                        <circle cx="117.667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 117.667 16.3333)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="60.0003" r="1.66667"
                                            transform="rotate(-90 74.6667 60.0003)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="16.3333" r="1.66667"
                                            transform="rotate(-90 74.6667 16.3333)" fill="#3056D3" />
                                        <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                            fill="#3056D3" />
                                        <circle cx="103" cy="16.3333" r="1.66667" transform="rotate(-90 103 16.3333)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="16.3333" r="1.66667" transform="rotate(-90 132 16.3333)"
                                            fill="#3056D3" />
                                        <circle cx="1.66667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 1.66667 45.3333)" fill="#3056D3" />
                                        <circle cx="1.66667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 1.66667 1.66683)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 16.3333 45.3333)" fill="#3056D3" />
                                        <circle cx="16.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 16.3333 1.66683)" fill="#3056D3" />
                                        <circle cx="31" cy="45.3333" r="1.66667" transform="rotate(-90 31 45.3333)"
                                            fill="#3056D3" />
                                        <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                            fill="#3056D3" />
                                        <circle cx="45.6667" cy="45.3333" r="1.66667"
                                            transform="rotate(-90 45.6667 45.3333)" fill="#3056D3" />
                                        <circle cx="45.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 45.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 60.3333 45.3338)" fill="#3056D3" />
                                        <circle cx="60.3333" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 60.3333 1.66683)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 88.6667 45.3338)" fill="#3056D3" />
                                        <circle cx="88.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 88.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="117.667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 117.667 45.3338)" fill="#3056D3" />
                                        <circle cx="117.667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 117.667 1.66683)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="45.3338" r="1.66667"
                                            transform="rotate(-90 74.6667 45.3338)" fill="#3056D3" />
                                        <circle cx="74.6667" cy="1.66683" r="1.66667"
                                            transform="rotate(-90 74.6667 1.66683)" fill="#3056D3" />
                                        <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                            fill="#3056D3" />
                                        <circle cx="103" cy="1.66683" r="1.66667" transform="rotate(-90 103 1.66683)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                            fill="#3056D3" />
                                        <circle cx="132" cy="1.66683" r="1.66667" transform="rotate(-90 132 1.66683)"
                                            fill="#3056D3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                    <div class="mt-10 lg:mt-0 px-4">
                        <span class="text-primary mb-2 block text-2xl font-semibold md:text-3xl xl:text-3xl"> Tentang
                            Kami </span>
                        <h1
                            class="text-secondary mb-8 text-lg font-normal sm:text-4xl text-justify pt-3 md:text-xl xl:text-xl">
                            <span class="text-primary font-bold text-xl opacity-70 md:text-2xl xl:text-2xl">Selamat
                                datang di Reginashop 👋</span>, destinasi belanja online terpercaya untuk kecantikan,
                            kesehatan, peralatan rumah tangga, dan bahan
                            pangan sandang pokok. Kami telah hadir sejak tahun 2018 dengan tekad kuat untuk memberikan
                            pengalaman berbelanja yang istimewa dan produk berkualitas tinggi kepada pelanggan kami.
                            <p class="pt-3 font-bold">Produk kami</p>
                            Kami memahami bahwa setiap produk memiliki peran penting dalam kehidupan Anda. Oleh karena
                            itu, kami menawarkan beragam produk berkualitas tinggi dari kategori kecantikan dan
                            kesehatan, peralatan rumah tangga, serta bahan
                            pangan sandang pokok. Semua produk yang kami tawarkan telah melalui seleksi ketat untuk
                            memastikan hanya yang terbaik yang sampai kepada Anda.
                            <p class="pt-3 font-bold">Pelayanan pelanggan</p>
                            Kepuasan pelanggan adalah prioritas utama kami. Tim pelayanan pelanggan kami siap membantu
                            Anda dalam menjawab pertanyaan, menangani masalah, dan memberikan panduan selama perjalanan
                            berbelanja Anda di Reginashop. Kami
                            percaya bahwa hubungan yang kuat dengan pelanggan kami adalah fondasi kesuksesan kami.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF ABOUT SECTION -->

    <!-- SERVICE SECTION -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-100" id="service">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[510px] text-center lg:mb-20">
                        <span class="text-primary mb-2 block text-2xl font-semibold"> Our Services </span>
                        <h2 class="text-dark mb-4 text-xl font-bold">Pelayanan yang kami tawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 flex items-center justify-center">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                        <center>
                            <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="752.000000pt"
                                    height="752.000000pt" viewBox="0 0 752.000000 752.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,752.000000) scale(0.100000,-0.100000)" fill="#ffff"
                                        stroke="none">
                                        <path d="M1790 5663 c-94 -33 -174 -107 -219 -203 l-26 -55 -3 -1029 c-3
                 -1143 -6 -1088 64 -1193 43 -67 112 -117 193 -143 61 -19 90 -20 988 -20 l924
                 0 24 25 c32 31 32 69 0 100 l-24 25 -917 0 c-696 0 -927 3 -958 12 -53 16
                 -118 81 -134 134 -9 31 -12 190 -12 613 l0 571 1775 0 1775 0 0 -119 c0 -66 3
                 -127 6 -136 4 -8 20 -23 36 -31 37 -19 80 -5 97 32 8 18 11 184 11 562 0 602
                 -1 614 -68 712 -45 66 -103 111 -177 139 -56 21 -58 21 -1683 21 -1453 -1
                 -1632 -3 -1672 -17z m3327 -150 c80 -43 123 -120 123 -222 l0 -51 -1775 0
                 -1775 0 0 60 c0 118 65 204 175 231 17 4 745 6 1620 6 l1590 -2 42 -22z m123
                 -643 l0 -220 -1775 0 -1775 0 0 220 0 220 1775 0 1775 0 0 -220z" />
                                        <path d="M2004 4179 c-18 -20 -19 -41 -19 -345 0 -323 0 -323 23 -346 l23 -23
                 400 0 401 0 19 24 c18 22 19 43 19 347 0 311 -1 325 -20 344 -19 19 -33 20
                 -423 20 -398 0 -404 0 -423 -21z m716 -344 l0 -225 -295 0 -295 0 0 218 c0
                 120 3 222 7 225 3 4 136 7 295 7 l288 0 0 -225z" />
                                        <path d="M4830 4148 c-225 -136 -572 -238 -811 -238 -42 0 -63 -5 -83 -21
                 l-27 -21 3 -482 4 -481 26 -98 c103 -376 387 -687 823 -899 179 -87 185 -87
                 386 15 181 91 308 179 437 301 162 155 270 319 332 503 53 159 60 241 60 711
                 l0 423 -23 23 c-20 20 -36 23 -132 29 -269 15 -562 107 -788 245 -37 23 -79
                 42 -95 42 -15 -1 -65 -24 -112 -52z m231 -172 c212 -109 404 -170 637 -201 62
                 -8 118 -15 123 -15 7 0 9 -141 7 -417 -4 -391 -5 -423 -25 -495 -57 -203 -136
                 -333 -302 -499 -134 -133 -257 -219 -433 -304 -86 -42 -124 -55 -140 -50 -53
                 17 -230 111 -318 170 -222 148 -366 308 -461 509 -81 173 -83 187 -87 663 l-3
                 422 43 5 c235 29 375 61 529 122 98 38 223 99 274 133 17 11 31 20 31 20 1 1
                 57 -28 125 -63z" />
                                        <path d="M5118 3073 l-318 -317 -168 167 c-155 154 -171 167 -204 167 -40 0
                 -78 -36 -78 -73 0 -14 72 -93 207 -229 191 -192 210 -208 242 -208 33 0 59 23
                 374 338 187 185 345 350 352 366 23 53 -10 106 -66 106 -17 0 -110 -87 -341
                 -317z" />
                                    </g>
                                </svg>
                            </div>
                        </center>
                        <h4 class="text-dark mb-3 text-xl font-semibold">Pembayaran Aman</h4>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 flex items-center justify-center">
                    <div class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10">
                        <center>
                            <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill="#fff"
                                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 330.845" width="50">
                                    <path
                                        d="M95.992 0c35.923 22.768 68.373 33.54 96.223 30.995 4.865 98.382-31.466 156.48-95.852 180.727C34.188 189.028-2.587 133.427.142 29.502 32.834 31.213 64.91 24.144 95.992 0zM76.731 103.923a73.156 73.156 0 016.88 6.658c6.723-10.822 13.89-20.757 21.461-29.895 21.401-25.849 11.702-20.867 41.389-20.867l-4.124 4.581c-12.676 14.086-16.952 21.417-27.343 36.429a425.653 425.653 0 00-27.95 46.499l-2.571 4.96-2.363-5.052c-4.359-9.359-9.581-17.95-15.808-25.625-6.228-7.676-11.667-12.684-20.112-18.479 3.87-12.702 22.288-6.201 30.541.791zm301.485 1.74l-35.138-.243V57.97a25.356 25.356 0 00-7.529-18.079 25.353 25.353 0 00-18.079-7.53H213.806c-.435 4.496-1.122 9.147-1.833 13.884H317.47c3.218 0 6.159 1.334 8.278 3.449 2.116 2.12 3.45 5.061 3.45 8.276v217.288H290.06a6.93 6.93 0 00-6.94 6.944 6.925 6.925 0 006.94 6.938h46.077a6.926 6.926 0 006.941-6.938v-7.885h28.044c3.177-72.232 106.9-82.195 117.451 0h22.782c5.868-70.433-28.909-97.805-81.803-103.996-3.805-16.53-11.062-31.874-19.26-47.037-9.747-18.025-12.016-17.297-32.076-17.621zM147.08 275.222a6.929 6.929 0 016.944 6.939 6.93 6.93 0 01-6.944 6.941H73.343c-7.022 0-13.413-3.06-18.082-7.882-4.623-4.821-7.527-11.411-7.527-18.392v-48.35a138.893 138.893 0 0013.881 7.815v40.535c0 3.334 1.375 6.51 3.609 8.824 2.119 2.197 4.98 3.606 8.077 3.606h73.779v-.036zm70.59-38.416c-25.963 0-47.019 21.059-47.019 47.019 0 25.961 21.056 47.02 47.019 47.02 25.961 0 47.017-21.059 47.017-47.02-.038-25.96-21.056-47.019-47.017-47.019zm0 28.942c-9.96 0-18.08 8.08-18.08 18.077 0 9.961 8.08 18.082 18.08 18.082 9.959 0 18.079-8.081 18.079-18.082-.042-9.997-8.12-18.077-18.079-18.077zm212.039-35.86c-25.959 0-47.016 21.059-47.016 47.018 0 25.96 21.057 47.021 47.016 47.021 25.963 0 47.02-21.061 47.02-47.021 0-25.959-21.057-47.018-47.02-47.018zm-18.077 47.018c0 9.961 8.076 18.079 18.077 18.079 10.001 0 18.079-8.077 18.079-18.079 0-9.999-8.078-18.076-18.079-18.076-9.978 0-18.077 8.095-18.077 18.076zm-30.038-151.174l-21.182-.392v45.06h44.866c-5.534-16.073-13.724-30.807-23.684-44.668zM96.049 14.47c30.429 19.287 59.636 30.128 83.227 27.971 4.118 83.335-28.373 134.27-82.908 154.808-52.671-19.224-85.542-68.035-83.23-156.073C43.7 42.778 71.71 33.379 96.049 14.47z" />
                                </svg>
                            </div>
                        </center>
                        <h4 class="text-dark mb-3 text-xl font-semibold">Pengiriman Aman</h4>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 flex items-center justify-center">
                    <div
                        class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10 w-[236.125px] h-[222px]">
                        <center>
                            <div class="bg-primary mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" width="50">
                                    <title>immediate-response</title>
                                    <g id="immediate-response">
                                        <g id="label">
                                            <path
                                                d="M256,512C114.84,512,0,397.16,0,256S114.84,0,256,0,512,114.84,512,256,397.16,512,256,512Zm0-490.54C126.67,21.46,21.46,126.67,21.46,256S126.67,490.54,256,490.54,490.54,385.32,490.54,256,385.33,21.46,256,21.46Z"
                                                fill="#fff" />
                                        </g>
                                        <path id="immediate-response-2" data-name="immediate-response"
                                            d="M245.52,200.91a9.6,9.6,0,1,1,9.6,9.59A9.6,9.6,0,0,1,245.52,200.91Zm144.72,74.46A134.24,134.24,0,1,1,234.82,142.79V130h-10a8,8,0,0,1-8-7.94V110.34a8,8,0,0,1,8-7.94h58.48a8,8,0,0,1,7.94,7.94v11.73a8,8,0,0,1-7.94,7.94h-10v12.26A134.23,134.23,0,0,1,390.24,275.36Zm-34.77,0A99.47,99.47,0,1,0,256,374.83,99.47,99.47,0,0,0,355.47,275.36Zm-37.56-67.83-52.3,52.3a18.65,18.65,0,1,0,5.58,5.45L323.44,213Z"
                                            fill="#fff" />
                                    </g>
                                </svg>
                            </div>
                        </center>
                        <h4 class="text-dark mb-3 text-xl font-semibold text-center">Respon Cepat</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF SERVICE SECTION -->

    <!-- PRODUCT -->
    <section id="product" class="bg-[#1e293b]">
        <div class="w-full">
            <div class="flex item-center justify-center">
                <h3 class="text-center text-primary text-2xl pt-14 pb-20 font-bold">Our Products</h3>
            </div>
        </div>
        <div class="w-full">
            <div class="flex items-center justify-center">
                <form action="" method="get">
                    <div class="mb-3">
                        <div class="relative mb-4 flex w-full flex-wrap items-stretch gap-3">
                            <input type="search"
                                class="relative m-0 block w-50 min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary text-white md:w-72 xl:w-96"
                                placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />

                            <!--Search icon-->
                            <button type="submit" class="bg-slate-950 px-4 py-3 rounded-lg hover:bg-opacity-50">
                                <span
                                    class="input-group-text flex items-center whitespace-nowrap rounded text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                                    id="basic-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff"
                                        class="h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full pt-16">
            <div class="flex items-start justify-center">
                <h5 class="text-xl text-white font-bold bg-primary bg-opacity-50 py-1 px-28 rounded-lg xl:px-96">Product
                    MSI</h5>
            </div>
        </div>
        <div class="w-full pt-10 pb-20">
            <div class="flex flex-wrap items-center justify-center gap-10">
            <?php foreach($msi as $ms): ?>
                <div
                    class="block max-w-[20rem] rounded-lg bg-primary shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-opacity-70 border-b-4 border-white" id="msi">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img class="rounded-t-lg w-[320px] h-[213px]" src="<?= base_url(); ?>assets/img/products/msi/<?= $ms['image']; ?>" alt="" />
                    </div>
                    <div class="w-full">
                        <div class="flex items-center justify-center">
                            <h4 class="text-center mt-4 mb-4 px-2 text-xl text-white"><?= $ms['name']; ?>
                            </h4>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="text-white text-lg">Rp <?= $ms['price']; ?></span>

                        </div>
                        <div class="flex items-center justify-center">
                            <p class=" text-white p-4 text-justify px-5 text-base"><?= $ms['description']; ?></p>
                        </div>
                    </div>
                    <div class="p-6 flex items-center justify-center">
                        <a class="text-white text-lg rounded-lg text-center"><button type="button"
                                class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-8 py-2.5 text-center">
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <div class="w-full">
            <div class="flex justify-center space-x-1 dark:text-gray-100">
                <ol class="flex justify-center gap-1 text-xs font-medium">
                    <li>
                        <a href="#"
                            class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            <span class="sr-only">Prev Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url(); ?>home#msi"
                            class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            1
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url(); ?>home/index/6#msi"
                            class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            2
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url(); ?>home/index/12#msi"
                            class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            3
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url(); ?>home/index/18#msi"
                            class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            4
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180 dark:border-gray-800 dark:bg-gray-900 dark:text-white">
                            <span class="sr-only">Next Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="w-full pt-10">
            <div class="flex items-start justify-center">
                <h5 class="text-xl text-white font-bold bg-primary bg-opacity-50 py-1 px-24 rounded-lg xl:px-96">Product
                    Lainnya</h5>
            </div>
        </div>
        <div class="w-full pt-10 pb-20">
        <div class="flex flex-wrap items-center justify-center gap-10">
            <?php foreach($others as $other): ?>
                <div
                    class="block max-w-[20rem] rounded-lg bg-primary shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-opacity-70 border-b-4 border-white" id="msi">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img class="rounded-t-lg w-[320px] h-[213px]" src="<?= base_url(); ?>assets/img/products/msi/<?= $other['image']; ?>" alt="" />
                    </div>
                    <div class="w-full">
                        <div class="flex items-center justify-center">
                            <h4 class="text-center mt-4 mb-4 px-2 text-xl text-white"><?= $other['name']; ?>
                            </h4>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="text-white text-lg">Rp <?= $other['price']; ?></span>

                        </div>
                        <div class="flex items-center justify-center">
                            <p class=" text-white p-4 text-justify px-5 text-base"><?= $other['description']; ?></p>
                        </div>
                    </div>
                    <div class="p-6 flex items-center justify-center">
                        <a class="text-white text-lg rounded-lg text-center"><button type="button"
                                class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-8 py-2.5 text-center">
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- END OF PRODUCT -->

    <!-- FOOTER -->
    <footer class="relative z-10 bg-white pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
                    <div class="mb-10 w-full">
                        <a class="mb-6 inline-block max-w-[160px]">
                            <img src="<?= base_url(); ?>assets/img/Reginashop.png" alt="logo"
                                class="rounded-2xl w-20 h-20" />
                        </a>
                        <p class="text-body-color mb-7 text-2xl font-extrabold">Reginashop</p>
                        <p class="text-dark flex items-center text-sm font-medium">
                            <span class="text-primary mr-3">
                                <svg width="19" height="21" viewBox="0 0 19 21" class="fill-current">
                                    <path
                                        d="M17.8076 11.8129C17.741 11.0475 17.1088 10.5151 16.3434 10.5151H2.16795C1.40261 10.5151 0.803643 11.0808 0.703816 11.8129L0.00502514 18.8008C-0.0282506 19.2001 0.104853 19.6327 0.371059 19.9322C0.637265 20.2317 1.03657 20.398 1.46916 20.398H17.0755C17.4748 20.398 17.8741 20.2317 18.1736 19.9322C18.4398 19.6327 18.5729 19.2334 18.5396 18.8008L17.8076 11.8129ZM17.2751 19.1668C17.2419 19.2001 17.1753 19.2667 17.0422 19.2667H1.46916C1.36933 19.2667 1.2695 19.2001 1.23623 19.1668C1.20295 19.1336 1.1364 19.067 1.16968 18.9339L1.86847 11.9127C1.86847 11.7463 2.00157 11.6465 2.16795 11.6465H16.3767C16.5431 11.6465 16.6429 11.7463 16.6762 11.9127L17.375 18.9339C17.3417 19.0337 17.3084 19.1336 17.2751 19.1668Z" />
                                    <path
                                        d="M9.25704 13.1106C7.95928 13.1106 6.92773 14.1422 6.92773 15.4399C6.92773 16.7377 7.95928 17.7693 9.25704 17.7693C10.5548 17.7693 11.5863 16.7377 11.5863 15.4399C11.5863 14.1422 10.5548 13.1106 9.25704 13.1106ZM9.25704 16.6046C8.6248 16.6046 8.09239 16.0722 8.09239 15.4399C8.09239 14.8077 8.6248 14.2753 9.25704 14.2753C9.88928 14.2753 10.4217 14.8077 10.4217 15.4399C10.4217 16.0722 9.88928 16.6046 9.25704 16.6046Z" />
                                    <path
                                        d="M0.802807 6.05619C0.869358 7.52032 2.16711 8.11928 2.83263 8.11928H5.16193C5.19521 8.11928 5.19521 8.11928 5.19521 8.11928C6.19348 8.05273 7.19175 7.38722 7.19175 6.05619V5.25757C8.28985 5.25757 10.8188 5.25757 11.9169 5.25757V6.05619C11.9169 7.38722 12.9152 8.05273 13.9135 8.11928H13.9467H16.2428C16.9083 8.11928 18.206 7.52032 18.2726 6.05619C18.2726 5.95636 18.2726 5.59033 18.2726 5.25757C18.2726 4.99136 18.2726 4.75843 18.2726 4.72516C18.2726 4.69188 18.2726 4.6586 18.2726 4.6586C18.1727 3.72688 17.84 2.96154 17.2743 2.36258L17.241 2.3293C16.4091 1.56396 15.4109 1.13138 14.6455 0.865169C12.416 0 9.62088 0 9.48778 0C7.52451 0.0332757 6.26003 0.199654 4.36331 0.865169C3.63125 1.0981 2.63297 1.53068 1.80108 2.29603L1.7678 2.3293C1.20212 2.92827 0.869359 3.69361 0.769531 4.62533C0.769531 4.6586 0.769531 4.69188 0.769531 4.69188C0.769531 4.75843 0.769531 4.95809 0.769531 5.22429C0.802807 5.52377 0.802807 5.92308 0.802807 6.05619ZM2.5997 3.12792C3.26521 2.52896 4.09711 2.16292 4.7959 1.89672C6.52624 1.26448 7.65761 1.13138 9.55433 1.0981C9.68743 1.0981 12.2829 1.13138 14.2795 1.89672C14.9783 2.16292 15.8102 2.49568 16.4757 3.12792C16.8417 3.52723 17.0746 4.05964 17.1412 4.69188C17.1412 4.79171 17.1412 4.95809 17.1412 5.22429C17.1412 5.55705 17.1412 5.92308 17.1412 6.02291C17.1079 6.78825 16.3759 6.95463 16.276 6.95463H13.98C13.6472 6.92135 13.1148 6.78825 13.1148 6.05619V4.69188C13.1148 4.42567 12.9485 4.22602 12.7155 4.12619C12.5159 4.05964 6.69262 4.05964 6.49296 4.12619C6.26003 4.19274 6.09365 4.42567 6.09365 4.69188V6.05619C6.09365 6.78825 5.56124 6.92135 5.22848 6.95463H2.93246C2.83263 6.95463 2.10056 6.78825 2.06729 6.02291C2.06729 5.92308 2.06729 5.55705 2.06729 5.22429C2.06729 4.95809 2.06729 4.82498 2.06729 4.72516C2.00073 4.05964 2.23366 3.52723 2.5997 3.12792Z" />
                                </svg>
                            </span>
                            <span>+(62) 896-6296-5599</span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                    <div class="mt-10 mb-10 w-full">
                        <h4 class="text-dark mb-5 text-lg font-semibold">Telusuri</h4>
                        <ul>
                            <li>
                                <a href="#about"
                                    class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                                    About </a>
                            </li>
                            <li>
                                <a href="#service"
                                    class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                                    Services </a>
                            </li>
                            <li>
                                <a href="#product"
                                    class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                                    Products </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                    <div class="mb-10 w-full">
                        <h4 class="text-dark mb-4 text-lg font-semibold">Follow Us</h4>
                        <div class="mb-6 flex items-center">
                            <a href="https://www.facebook.com/profile.php?id=100009840422975" target="_blank"
                                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                                <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                                    <path
                                        d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
                                </svg>
                            </a>

                            <a href="javascript:void(0)"
                                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                                <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                                    <path
                                        d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)"
                                class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                                <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                                    <path
                                        d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
                                </svg>
                            </a>
                        </div>
                        <p class="text-body-color text-base">&copy; 2023 Reginashop</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 bottom-0 z-[-1]">
                <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                        fill="url(#paint0_linear_1179_5)" />
                    <defs>
                        <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3056D3" stop-opacity="0.08" />
                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="absolute top-10 right-10 z-[-1]">
                <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                        fill="url(#paint0_linear_1179_4)" />
                    <defs>
                        <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#13C296" stop-opacity="0.31" />
                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
    </footer>
    <!-- END OF FOOTER -->

    <!-- Back to top Start -->
    <a href="#home"
        class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse"
        id="to-top">
        <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <!-- Script JS -->
    <script src="<?= base_url(); ?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/tw-elements.umd.min.js"></script>
</body>

</html>