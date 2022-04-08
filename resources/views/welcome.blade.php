@include('layouts.index')



<link rel="stylesheet" href="/css/welcome-blade.css">

<div class="container">
    <section class="jumbotron">
        <div class="wrapper">
            <div class="warna-bg">
                <div class="desc">
                    <h1 class="desc-h1">Nikmati Liburan <br> Impianmu</h1>
                    <p class="desc-p">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Et accusamus explicabo unde?</p>
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
                   <button class="btn-pesan">Pesan</button>
                </div>
                
            </div>
        </div>
        <!-- End Section Booking -->
    </section>

    <!-- Abaouts -->
    <section class="about">
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
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eos nisi optio excepturi sunt voluptatem quo eligendi! Iste architecto distinctio nisi consequuntur repellendus animi enim voluptatibus inventore, non, omnis tempore similique dolor amet sequi voluptate consectetur deserunt. Impedit, voluptatum modi. Autem optio ipsam obcaecati aut deleniti veniam aliquid ab? Quod officiis sit hic m
                </p>
                <div class="advantages">
                    <div class="advantage-items">
                        <h2 class="advantage-title">100+</h2>
                        <p class="advantage-desc">Lorem, ipsum.</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">15</h2>
                        <p class="advantage-desc">Lorem, ipsum.</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">201</h2>
                        <p class="advantage-desc">Lorem, ipsum.</p>
                    </div>
                    <div class="advantage-items">
                        <h2 class="advantage-title">20</h2>
                        <p class="advantage-desc">Lorem, ipsum.</p>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <!-- CLASS ROOM -->
    <h2 class="title-class-room">Lihat Kamar</h2>
    <section class="class-room">
        <div class="owl-carousel owl-theme">
            <div class="card-class">
                <img src="/assets/image/room/standart-room.jpg" alt="">
                <div class="description-class">
                    <h3 class="title-class">Standart Room</h3>
                    <p class="desc-class">harga : <span>RP.500.000</span> </p>
                </div>
            </div>
            <div class="card-class">
                <img src="/assets/image/room/superior-room.jpg" alt="">
                <div class="description-class">
                    <h3 class="title-class">Superior Room</h3>
                    <p class="desc-class">harga : <span>RP.500.000</span> </p>
                </div>
            </div>
            <div class="card-class">
                <img src="/assets/image/room/luxury-room.jpg" alt="">
                <div class="description-class">
                    <h3 class="title-class">Luxury Room</h3>
                    <p class="desc-class">harga : <span>RP.500.000</span> </p>
                </div>
            </div>
            <div class="card-class">
                <img src="/assets/image/room/luxury-room.jpg" alt="">
                <div class="description-class">
                    <h3 class="title-class">Luxury Room</h3>
                    <p class="desc-class">harga : <span>RP.500.000</span> </p>
                </div>
            </div>
            <div class="card-class">
                <img src="/assets/image/room/luxury-room.jpg" alt="">
                <div class="description-class">
                    <h3 class="title-class">Luxury Room</h3>
                    <p class="desc-class">harga : <span>RP.500.000</span> </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery -->
 <!-- <section class="gallery">
        <h2 class="title-gallery">Gallery</h2>
        <div class="wrapper-img">
            <img src="/assets/image/room/luxury-room.jpg" alt="">
            <img src="/assets/image/room/luxury-room.jpg" alt="">
            <img src="/assets/image/room/luxury-room.jpg" alt="">
            <img src="/assets/image/room/luxury-room.jpg" alt="">
            <img src="/assets/image/room/luxury-room.jpg" alt="">
    </section> -->

</div>


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