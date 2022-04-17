<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Danz</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        /* Reservation */
        body {
            height:1000px;
        }

        .header-reservation {
            margin-top: 100px;
            text-align: center;
        }

        .title-reservation {
            color: #223279;
        }

        .title-desc {
            color: #A8A2A2;
        }

        .logo h4 {
            font-family: 'Poppins';
            font-size: 20px;
            letter-spacing: 2px;
            color: #1038E9;
            text-align:center;
        }

    .logo span {
        color: #223279;
    }

        .container-confirm {
            box-shadow: 8px 4px 55px -13px rgba(0,0,0,0.49);
            border-radius: 5px;
            margin: 100px auto;
            width: 500px;
            padding: 50px;
        }

         img{
            width:300px;
            margin:auto;
        }

        .desc {
            margin-top: 20px;
            padding: 40px;
        }

        @media print{
            .btn-item{
                display:none;
            }
        }

        .btn-wrapper {
            display:flex;
            justify-content:center;
        }

        .btn-item {
            border: none;
            background-color: #1038E9;
            margin: 40px 20px;
            padding: 10px;
            color: white;
            width:100px;
            border-radius: 20px;
            cursor: pointer;
        }

        .roomtype {
            margin-top:30px;
        }

        .items {
            margin-top:10px
        }
        
    </style>
</head>
<body>
    <!-- content -->
    <div class="header-reservation">
        <h1 class="title-reservation">Bukti Booking Hotel Danz</h1>
        <p class="desc-reservation">Selamat Menikmati Liburan</p>
    </div>

    <div class="container-confirm">
        <div class="logo">
            <h4>Hotel<span>Danz</span></h4>
        </div>
        <div class="desc">
            <p class="items"><b>Nama : </b> {{$reservations->name}}</p>
            <p class="roomtype items"><b>Tipe Kamar : </b>{{$reservations->room->roomtype->name}}</p>
            <p class="items"><b>Check In : </b>{{$reservations->check_in}}</p>
            <p class="items"><b>Check Out : </b>{{$reservations->check_out}}</p>
            <p class="items"><b>Harga : </b> Rp.{{$reservations->room->price}}</p>
        </div>
        <div class="btn-wrapper">
            <a href="/guest">
                <button class="btn-item">Kembali</button>
            </a>
            <button id="print" class="btn-item">Cetak</button>
        </div>
    </div>
        <a href="/guest">
        </a>
    <!-- end content -->
    <!-- end navbar -->
    <script>
        const printBooking = document.getElementById('print');
        printBooking.addEventListener('click',function(){
            window.print();
        })
    </script>
</body>
</html>




