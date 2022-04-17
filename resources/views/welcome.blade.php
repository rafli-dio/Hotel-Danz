@include('layouts.index')


<link rel="stylesheet" href="/css/welcome-blade.css">
<nav>
        <div class="logo">
            <h4>Hotel<span>Danz</span></h4>
        </div>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#room">Product</a></li>
            <li><a href="#facility">Facility</a></li>
            <li><a href="/login"  id="login-btn">Login</a></li>
        </ul>

        <div class="toggle-menu">
            <span id="first-span"></span>
            <span id="midle-span"></span>
            <span id="last-span"></span>
        </div>
    </nav>

<div class="container">
    <section class="jumbotron">
        <div class="wrapper">
            <div class="warna-bg">
                <div class="desc">
                    <h1 class="desc-h1">Nikmati Liburan <br> Impianmu</h1>
                    <p class="desc-p">Bersenang-senanglah <br>dan nikmati liburan mu dengan orang yang tercinta</p>
                    <button class="desc-bt">
                        Mulai Petualanganmu
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="facility">
        <!-- Section BOOKING -->
        <div class="booking-hotel">
            <h3 class="title-booking">Booking</h3>
            <div class="booking-wrapper-items">
                <div class="booking">
                    <i class="fas fa-calendar-plus"></i>
                    <p>check in</p>
                    <form action="">
                        <input type="date">
                    </form>
                </div>
                <div class="booking">
                    <i class="fas fa-calendar-minus"></i>
                    <p>check out</p>
                    <form action="">
                        <input type="date">
                    </form>
                </div>
                <div class="booking">
                    <i class="fas fa-bed"></i>
                    <p>jumlah kamar</p>
                    <form action="" >
                        <input type="number">
                    </form>
                </div>
                <br>
                <div class="booking">
                   <button class="btn-pesan"><a href="/login">Pesan</a></button>
                </div>
                
            </div>
        </div>
        <!-- End Section Booking -->
    </section>

    <!-- Abaouts -->
    <section class="about" id="about">
        <!-- img -->
        <div class="about-items">
            <section class="image-ilustration">
                <img src="/assets/image/ilustration-about.jpg" width="500px">
            </section>
        </div>
        <!-- text -->
        <div class="about-items">
            <section class="text-about">
                <p id="title-about">Tentang kami</p>
                <p id="desc-about">  
                Hotel Danz sudah berdiri sejak tahun 2004, dan memiliki bintang 5.Hotel Danz Memilik 100+ destinasi wisata yang tersebar di berbagai kota yang ada di Indonesia.Hotel Danz memiliki 25 Cabang yang berada di 20 Kota di Indonesia.Hotel Danz sendiri memilik 201 Penghargaan yang sudah diraih dengan penuh usaha.
                </p>
                <div class="advantages">
                    <div class="advantage-items">
                        <h2 class="advantage-title">100+</h2>
                        <p class="advantage-desc">Destinasi</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">25</h2>
                        <p class="advantage-desc">Cabang Hotel</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">201</h2>
                        <p class="advantage-desc">Penghargaan</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">20</h2>
                        <p class="advantage-desc">Kota</p>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <!-- CLASS ROOM -->
    <h2 class="title-class-room" id="room">Tipe Kamar</h2>
    <p class="desc-items">Tipe kamar yang ada di hotel kami</p>
    <section class="class-room">
        <div class="owl-carousel owl-theme card-owl">
            @foreach($rooms as $room)
            <div class="card-class">
                <img src="{{asset('storage/'. $room->room_image)}}" alt="">
                <div class="description-class">
                    <h3 class="title-class">{{$room->roomtype->name}}</h3>             
                    <ul style="margin-top:10px">
                        <li>{{$room->roomtype->facilityroom1->name}}</li>
                        <li>{{$room->roomtype->facilityroom2->name}}</li>
                        <li>{{$room->roomtype->facilityroom3->name}}</li>
                    </ul>
                    <p class="desc-class" style="margin-top:10px;">harga : <span>RP.{{$room->price}}</span> </p>
                </div>
                <div class="button-detail">
                    <button class="btn-detail"><a href="/guest">Reservasi</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    
    <h2 class="title-class-room" style="margin-top:80px" id="facility">Fasilitas Hotel</h2>
    <p class="desc-items">Fasilitas yang ada di hotel kami</p>
    <section class="class-room">
        <div class="owl-carousel owl-theme">
            @foreach($facilityhotels as $facilityhotel)
            <div class="card-class">
                <img src="{{asset('storage/'. $facilityhotel->image)}}" alt="">
                <div class="description-class">
                    <h3 class="title-class">{{$facilityhotel->name}}</h3>
                    <p class="desc-class" style="margin-top:10px;">Deskripsi : <span>{{$facilityhotel->desc}}</span> </p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer>
        <div class="footer-items">
            <div class="logo">
                <h4>Hotel<span>Danz</span></h4>
            </div>
            <p class="items1-desc">Jl. Anggrek No.2, Denokan, Jetis, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57511</p>
        </div>
        <div class="footer-items">
            <div class="title-items">
                <h4>Tentang Hotel Danz</h4>
            </div>
            <ul>
                <li>Cara Pesan</li>
                <li>Hubungi Kami</li>
                <li>Pusat Bantuan</li>
                <li>Tentang Kami</li>
            </ul>
        </div>
        <div class="footer-items">
            <div class="title-items">
                <h4>Lainya</h4>
            </div>
            <ul>
                <li>Flash Sale</li>
                <li>Blog Hotel Danz</li>
                <li>Kebijakan Privasi</li>
                <li>Syarat & Ketentuan</li>
            </ul>
        </div>
        <div class="footer-items">
            <div class="title-items">
                <h4>Follow kami di</h4>
                <ul>
                    <li>
                        <i class="fab fa-twitter"></i>
                        Twitter
                    </li>
                    <li>
                        <i class="fab fa-facebook"></i>
                        Facebook
                    </li>
                    <li>
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </li>
                    <li>
                        <i class="fab fa-youtube"></i>
                        Youtube
                    </li>
                </ul>
            </div>
        </div>
    </footer>





</div>

<script src="/js/main.js"></script>
 <script>
  $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})
 </script>
