<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <link rel="stylesheet" href="/kanjuruhan/css-js/components-v2.css">--}}
{{--    <link rel="stylesheet" href="/kanjuruhan/css-js/style_old.css">--}}
{{--    <script src="/kanjuruhan/css-js/components-v2.js"></script>--}}
{{--    <script src="/kanjuruhan/css-js/alpine.js"></script>--}}
{{--    <script type="text/javascript" src="/kanjuruhan/css-js/jquery-3.3.1.min.js"></script>--}}
{{--    <link rel="stylesheet" href="/kanjuruhan/css-js/floating-wpp.css">--}}
{{--    <script type="text/javascript" src="/kanjuruhan/css-js/floating-wpp.js"></script>--}}
    <link rel="icon" href="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-FIX-SEP-2021-01.png" type="image/x-icon">



    <link rel="stylesheet" href="/css-js/css/style_old.css">

    <!--CSS-JS for UI/UX - Tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="/css-js/js/components-v2.js"></script>
    <link rel="stylesheet" href="/css-js/css/components-v2.css">
    <script type="text/javascript" src="/css-js/js/alpine.js"></script>

    <!--SCC-JS for WhatsApp Floating Button-->
    <link rel="stylesheet" href="/css-js/css/floating-wpp.css">
    <script type="text/javascript" src="/css-js/js/floating-wpp.js"></script>
    <script type="text/javascript" src="/css-js/js/jquery-3.3.1.min.js"></script>
</head>
<body>

<div id="container" class="relative">
    <head>
        <title>Kanjuruhan, Ratusan Kematian</title>
    </head>

    <div id="header">
        <!--Header-->
        <div class="bg-img-index relative overflow-hidden">
            <div class="relative pt-6 pb-16 sm:pb-24">
                <div x-data="Components.popover({ open: false, focus: true })" x-init="init()"
                     @keydown.escape="onEscape"
                     @close-popover-group.window="onClosePopoverGroup">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6">
                        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center"
                             aria-label="Global">
                            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                    <a href="/kanjuruhan/">
                                        <span class="sr-only">UCiputra</span>
                                        <img class="h-10 w-auto sm:h-16"
                                             src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-PANJANG-FIX-SEP-2021-01.png"
                                             alt="">
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                        <button type="button"
                                                class="bg-gray-50 bg-opacity-0 rounded-md p-2 inline-flex items-center justify-center text-black hover:text-gray-500 hover:bg-gray-100"
                                                @click="toggle" @mousedown="if (open) $event.preventDefault()"
                                                aria-expanded="true" :aria-expanded="open.toString()">
                                            <span class="sr-only">Open main menu</span>
                                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M4 6h16M4 12h16M4 18h16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:flex md:space-x-10">
                                <a href="/kanjuruhan/" class="font-medium text-gray-200 hover:text-white">Home</a>
                                <a href="https://sites.kevinchr.com/kanjuruhan/" class="font-medium text-gray-200 hover:text-white">Breaking News</a>
                                <a href="/kanjuruhan/about.php" class="hidden font-medium text-gray-200 hover:text-white">About</a>
                            </div>
                        </nav>
                    </div>
                    <div x-show="open" x-transition:enter="duration-150 ease-out"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
                         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                         x-description="Mobile menu, show/hide based on menu open state."
                         class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
                         x-ref="panel"
                         @click.away="open = false">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto"
                                         src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-PANJANG-FIX-SEP-2021-01.png"
                                         alt="">
                                </div>
                                <div class="-mr-2">
                                    <button type="button"
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100"
                                            @click="toggle">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3">
                                <a href="/kanjuruhan/"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="https://sites.kevinchr.com/kanjuruhan/"
                                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Breaking
                                    News</a>
                                <a href="/kanjuruhan/about.php"
                                   class="hidden block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>
                            </div>
                        </div>
                    </div>

                </div>
                <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-200 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Kanjuruhan </span>
                            <!-- space -->
                            <span class="block text-blue-400 xl:inline"> <br>Ratusan Korban Jiwa Akibat Fanatisme </span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto md:text-lg text-white sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Rekor Terburuk Sepanjang Sejarah Sepak Bola Indonesia
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <div id="main">
        <p class="hidden paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Sebuah kronologi suatu kejadian pasti dilatarbelakangi oleh suatu masalah atau suatu dorongan yang mendorong itu
            untuk terjadi. Sama halnya seperti sebuah kebiasaan akan terbentuk karena adanya society dan kehidupan
            masyarakat di dalam suatu negara. Bentuk sebuah negara pun juga akan mempengaruhi adanya suatu tindakan,
            perilaku, dan kegiatan masyarakatnya. Komparasikan antara budaya kebiasaan antara negara maju dan negara
            berkembang, semisal di Indonesia (negara berkembang) yang memiliki stigma bahwa makan menggunakan tangan secara
            langsung itu hal yang normal, namun di Amerika Serikat atau negara maju lainnya, hal ini akan dianggap tidak
            sopan. Hal ini akan sama halnya dengan budaya atau kultur dalam bertindak, salah satunya dalam kebiasaan
            menyaksikan suatu pertandingan olahraga di negara maju supporter cenderung damai (dapat diamati dari pagar
            pembatas lapangan dengan tribun yang minim/rendah) serta bersikap lebih sportif dari negara berkembang yang
            sering kali terjadi kerusuhan yang diakibatkan oleh beberapa provokator (maka dari itu pagar pembatasan tribun
            dan lapangan seringkali dibuat tinggi agar supporter sulit untuk memanjat dan memasuki area lapangan). Contohnya
            adalah kasus menonton suatu pertandingan sepak bola di negara berkembang Indonesia ini hingga menyebabkan
            ratusan kematian di pertandingan sepak bola stadion Kanjuruhan kemarin. Berikut adalah penjelasan mengenai
            komparasi antara zona mitigasi dan peraturan mengenai penembakan gas air mata, sehingga pada akhirnya massa di
            stadion Kanjuruhan kemarin tidak bisa keluar dan harus merusak pintu stadion.
        </p>
        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Kekacauan terjadi dan banyak memakan korban jiwa pada hari itu (1 Oktober 2022). Kejadian ini dimulai karena Persebaya (Klub Sepak Bola Surabaya) melawan Arema (Klub Sepak Bola Malang). Kejadian baru-baru ini tidak hanya terjadi sekali dan pertama kali, namun kejadian bentrok antara fans Persebaya dan Aremania sudah terjadi berkali-kali. Namun, kebetulan pertandingan yang terjadi kemarin ini berlangsung di tuan rumah Arema, yaitu berada di stadion Kanjuruhan Malang itu sendiri. Pertandingan berlangsung dan menghasilkan skor 3 (Persebaya) - 2 (Arema). Arema mengalami kekalahan.
            <br>Namun, kedewasaan sangat kurang terjadi di dalam sebuah pertandingan ini. Semua ini disebabkan karena dimulainya dari 1 orang yang turun ke dalam lapangan dan berusaha berontak karena ketidak terimaannya terhadap kekalahan itu, lalu disusul dengan aremania dan aremanita lainnya, sehingga polisi tidak bisa mengendalikan aksi berontak ini dan terjadilah sebuah “perang” antara fans Arema kepada pemain sepak bola Persebaya (ilustrasi sebagai berikut).
        </p>
        <img class="mx-auto my-6" width="300px" src="/kanjuruhan/images/gif_canva_mitigasi_(1).gif">
        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Banyak luka fisik, penderitaan, bahkan sampai kehilangan nyawa terjadi dalam pertandingan tersebut. Polisi sontak berinisiatif untuk menghentikan massa, dengan cara menyemprotkan gas air mata yang bisa membahayakan banyak orang dan menimbulkan banyak kematian pada akhirnya (ilustrasi di bawah ini).  Berdasarkan data dari Tim Kedokteran Polisi (Dokpol), total ada 450 korban yang meninggal dunia dan luka-luka. Sedangkan Wakil Gubernur Jatim Emil Elestianto Dardak, menyatakan bahwa jumlah korban meninggal dunia kericuhan di Kanjuruhan tercatat 131 orang. Jumlah total korban ini hingga saat ini dipastikan tidak pasti karena adanya beberapa miss information karena media center stadion kanjuruhan tidak bekerja dengan baik.
        </p>
        <img class="mx-auto my-6" width="300px" src="/kanjuruhan/images/gif_canva_mitigasi_(2).gif">
        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Tak hanya itu, tidak tahu motif apa yang mendorong polisi ini, mereka juga menutup seluruh pintu akses stadion sehingga orang di dalam stadion tidak dapat keluar ke luar stadion (ilustrasi di bawah ini).
        </p>
        <img class="mx-auto my-6" width="300px" src="/kanjuruhan/images/pintu12_pintu13.png">
        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Misteri dibalik pintu stadion 13. Investigasi PSSI menemukan pintu 13 ini tidak terbuka walaupun pertandingan telah usai, padahal pada dasarnya peraturan pertandingan dinyatakan bahwa 10 menit sebelum pertandingan usai, pintu harus dibuka. Penonton sepak bola bersaksi bahwa pintu 13 ini seperti kuburan massal, puluhan orang meninggal di pintu 13 ini, manusia-manusianya bertumpukan dan tergeletak tak bernyawa. Dikarenakan pintu tertutup rapat, massa terpaksa harus merusak dan membobol tembok stadion untuk bisa keluar dari stadion dan selamat dari tembakan gas air mata.
        </p>
        <img class="mx-auto my-6" width="300px" src="/kanjuruhan/images/pintu13.png">

        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Berikut adalah infografis mengenai misteri dibalik pintu stadion 13.
        </p>
        <img class="mx-auto mt-6 lg:w-[600px] md:w-[450px]" width="300px" src="/kanjuruhan/images/infografis-pintu-13-kanjuruhan.jpeg">

        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Selain hebohnya massa yang saling memprovokasi satu sama lain untuk terjun ke dalam lapangan dan menimbulkan adanya “peperangan” hingga kematian, jika ditelusuri lebih dalam akar permasalahannya, tidak hanya sekedar manusia-manusia yang beraktivitas di waktu itu saja yang bersalah, namun juga mengenai bentuk stadion, denah, dan bahkan hal sedetail arsitektur dari bangunan stadion kanjuruhan ini. Terlihat simple, namun jika sebuah bangunan atau sesuatu yang digunakan oleh manusia didesain dengan sembarangan dan tidak mempertimbangkan bibit bobot bebetnya, serta tidak mempertimbangkan resiko-resiko apa saja yang akan terjadi apabila terjadi suatu kekacauan atau bahkan bentrok seperti kejadian kanjuruhan lalu.
        </p>
        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Komparasikan antara stadion di negara Indonesia, dengan stadion dengan spesifikasi FIFA (persepakbolaan internasional dan peraturan internasional dari cabang olahraga sepak bola).
        </p>
        <table class="lg:mx-48 md:mx-12 mx-3 my-6 border-collapse table-auto">
            <thead>
            <tr class="border-black">
                <th scope="col" class="align-middle text-center border-black border-2 px-2 py-1">Peraturan FIFA</th>
                <th scope="col" class="align-middle text-center border-black border-2 px-2 py-1">Stadion Kanjuruhan (Contoh: Stadion Kanjuruhan Malang)</th>
                <th scope="col" class="align-middle text-center border-black border-2 px-2 py-1">Sudah Memenuhi Kriteria atau Tidak</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Pintu masuk dan keluar stadion harus bisa dibuka dan ditutup dengan mudah untuk memudahkan akses masuk penonton</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Pintu akses stadion susah dibuka dan ditutup (Pintu 13)</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Pintu masuk dan keluar stadion wajib dirancang dengan memerhatikan aspek kemudahan setiap penonton untuk bergerak</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Pintu stadion (terlebih pintu 12-14) dibuat terlalu sempit hingga para penonton berdesak-desakan untuk keluar</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Pintu stadion wajib didesain dengan desain yang tahan tekanan banyak orang</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Tahan, karena orang-orang sudah berdesakan di pintu 13 namun pintu 13 tetap tidak terbuka</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Sudah memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Pintu wajib memiliki kunci tahan api</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Kunci di pintu stadion 13 menghilang dan tergembok dari luar, tidak ada pengawasan kunci. (gemboknya warna hitam tapi tidak diketahui spesifikasi jenis gemboknya)</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Tidak diketahui</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Area di sekitar stadion wajib diberikan batas, seperti pagar dan tembok dengan tinggi minimal 2,5 meter</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Tidak ada pagar pembatas</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Setiap stadion wajib menyediakan pintu keluar darurat</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Tidak ada pintu darurat hanya ada pintu service kecil yang hanya bisa digunakan staff</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Setiap stadion internasional dan berstandar FIFA harus memiliki akses yang mudah dan dilengkapi dengan jaringan transportasi</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Jaringan transportasi berada jauh dari stadion dan memerlukan waktu untuk mencapai ke transportasi tersebut</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Wajib menyediakan petunjuk arah yang jelas untuk memudahkan penonton</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Tidak ada denah dan arah petunjuk yang jelas</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Ruang ganti pemain atau <i>locker room</i> wajib dilengkapi dengan <i>shower</i> area dan toilet</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Toilet masih terbatas dan kumuh</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Wajib memiliki <i>lighting</i> dengan standar minimal 2.400 lux</th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Lampu <i>lighting</i> dikabarkan masih tidak sesuai dengan standar minimal FIFA</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            <tr>
                <th scope="row" class="align-middle text-left border-black border-2 px-2 py-1">Wajib memiliki fasilitas <i>media center</i></th>
                <td class="align-middle text-left border-black border-2 px-2 py-1">Terlihat tidak ada media center yang membantu menyebarkan informasi, bahkan menyebarkan pengumuman mengenai informasi pintu darurat yang dapat digunakan untuk keluar dan masih banyaknya misinformasi</td>
                <td class="align-middle text-center border-black border-2 px-2 py-1">Belum memenuhi kriteria</td>
            </tr>
            </tbody>
        </table>

        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Komparasi denah antara stadion yang ideal berdasarkan peraturan FIFA dan stadion di Indonesia (contohnya stadion Kanjuruhan) adalah sebagai berikut.
        </p>

        <img class="mx-auto mt-6 lg:w-[600px] md:w-[450px]" width="300px" src="/kanjuruhan/images/fifa.jpg">
        <p class="paragraph text-center mb-6 text-sm">Stadium Al Bayt FIFA World Cup 2022</p>

        <img class="mx-auto mt-6 lg:w-[600px] md:w-[450px]" width="300px" src="/kanjuruhan/images/knjrh.png">
        <p class="paragraph text-center mb-6 text-sm">Denah Stadion Kanjuruhan</p>

        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Dengan melihat beberapa kriteria ideal stadion dari peraturan FIFA dan realisasi yang terjadi di negara-negara lain, salah satunya di Indonesia dengan contoh stadion Kanjuruhan, maka dari itu, untuk mencegah hal ini terulang kembali (dan jangan sampai terjadi lagi), dibutuhkan perbaikan yang cukup agar stadion ideal dan sesuai dengan peraturan FIFA (yang sudah menjadi acuan stadion sepak bola di berbagai negara). Pada pertengahan bulan Oktober 2022 kemarin, Presiden RI (Joko Widodo), menunjuk PUPR (Kementerian Pekerjaan Umum dan Perumahan Rakyat) untuk merenovasi dan mendesain ulang akan bangunan stadion Kanjuruhan ini, dengan tujuan agar stadion bisa berguna dengan baik dan meminimalisir terjadinya kematian yang menarik perhatian internasional. Proyek ini ditargetkan dimulai pada awal 2023 dan diperkirakan membutuhkan durasi kurang lebih 1 tahun dalam pengerjaannya. Dalam perbaikan ini, akan ada beberapa hal yang akan direnovasi, diantaranya adalah sebagai berikut.
        </p>
        <ol class="list-decimal list-outside lg:mx-56 md:mx-20 mx-12 my-6 text-lg xl:text-xl md:text-xl">
            <li>Tangga-tangga tribun ekonomi tidak ada akses untuk ke bangku ekonomi.</li>
            <li>Pintu stadion yang tidak memiliki jarak dengan tangga, serta sudut elevasi tangganya yang sangat curam.</li>
            <li>Perbaikan lampu penerangan stadion.</li>
            <li>Perbaikan toilet.</li>
            <li>Pembuatan pagar pembatas dengan tinggi minimal 2,5 meter (Perimeter).</li>
            <li>Pembangunan monumen untuk mengenang kejadian 1 Oktober 2022 kemarin.</li>
        </ol>

        <p class="paragraph lg:mx-48 md:mx-12 mx-3 my-6 text-lg xl:text-xl md:text-xl">
            Walaupun Indonesia juga memiliki kekurangan dan tidak mungkin semuanya akan dicontoh persis sama, seperti kurangnya dana APBN dan kurangnya lahan di Indonesia, namun pentingnya desain-desain simple ini agar semua bisa mengakses keluar masuk stadion dengan mudah dan mencegah terjadinya desakan-desakan yang menimbulkan kekurangan oksigen hingga kematian. Dengan renovasi dan perbaikan ini, harapannya semoga dunia persepakbolaan di Indonesia dan negara-negara lainnya bisa menjadi lebih baik, dan persepakbolaan di Indonesia tidak terkena dampak banned selamanya.
        </p>
    </div>
    <div id="myButton" class="floating-wpp" style="left: auto; right: 15px;"></div>
    <div id="footer" class="text-center lg:text-left">
        <div class="bg-gray-100 p-6 text-gray-800">
            <div class="grid lg:grid-cols-2 gap-4">
                <div class="mb-6 md:mb-0">
                    <h5 class="font-medium mb-2 uppercase">Mini Announcement</h5>

                    <p class="mb-4">
                        Laman ini dibuat untuk pemenuhan AFL (UTS) Becoming Indonesia (2022/2023 Ganjil).<br>
                        Sepenuhnya dibuat dan dianalisis berdasarkan data, fakta, dan berita yang ada
                        Opini, pandangan, dan artikel dibuat nyata dan dapat dipertanggungjawabkan
                    </p>
                </div>

                <div class="mb-6 md:mb-0">
                    <h5 class="font-medium mb-2 uppercase">Author</h5>

                    <p class="mb-4">
                        Laman ini dibuat oleh:<br>
                        - Kenneth Raffelino (IMT'21 - 0706012110005)<br>
                        - Ileene Trinia (IMT'21 - 0706012110019)<br>
                        - Kevin Christian (IMT'21 - 0706012110041)<br>
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-gray-600" href="#top"><br>Becoming Indonesia<br>Information and Multimedia Technology<br>Universitas
                Ciputra Surabaya<br>Kevin - Ileene - Kenneth</a>
        </div>
    </div>
</div>
<div id="myButton"></div>
</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '6285157227250',
            popupMessage: 'Bisa dibantu?',
            message: "Halo saya dari website anda kevinchr.com/kanjuruhan/ ingin menyampaikan sesuatu ...",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Kritik dan Saran',
            headerColor: '#128C7E',
            backgroundColor: '#128C7E',
            buttonImage: '<img src="/images/whatsapp.svg" />'
        });
    });
</script>

</html>
