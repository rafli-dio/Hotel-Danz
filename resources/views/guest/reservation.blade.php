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

        .container-form {
            display: grid;
            margin-top: 100px;
            grid-template-columns: repeat(2, 500px);
            justify-content: center;
        }

        .form-items {
            margin-top: 20px;
        }

        .form-items label {
            font-weight: 200;
            margin-left: 20px;
        }

        .form-items input {
            width: 300px;
            height: 20px;
            margin-top: 10px;
            margin-left: 20px;
            border-radius: 20px;
            padding: 5px;
        }

        .card-type {
            border-right: 2px solid rgb(112, 111, 111);
        }

        .card-type img {
            width: 450px;
            height: 400px;
        }

        .card-type h2 {
            color: #223279;
        }

        .card-type p {
            margin-top: 10px;
            color: #837d7d;
        }

        .button-reservasi {
            display:flex;
            justify-content:center;
        }

        .btn-pesan {
            border: none;
            margin-top: 40px;
            padding: 10px;
            color: white;
            background-color: #223279;
            border-radius: 20px;
            width: 200px;
            cursor: pointer;
            justify-self: center;
        }

        .btn-pesan a {
            color: white;
            text-decoration: none;
        }

        @media screen and(max-width: 576px) {
            .container-form {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo">
            <h4>Hotel<span>Danz</span></h4>
        </div>

        <ul>
            <li><a href="/guest">Home</a></li>
            <li><a href="/guest/#about">About</a></li>
            <li><a href="/guest/#room">Product</a></li>
            <li><a href="/guset/#facility">Facility</a></li>
        </ul>

        <div class="toggle-menu">
            <span id="first-span"></span>
            <span id="midle-span"></span>
            <span id="last-span"></span>
        </div>
    </nav>

    <!-- content -->
    <div class="header-reservation">
        <h1 class="title-reservation">Reservasi Hotel Danz</h1>
        <p class="desc-reservation">Lorem ipsum dolor sit amet.</p>
    </div>

    <div class="container-form">
        <div class="form-items">
            <div class="card-type">
                <img src="{{asset('storage/'. $rooms->room_image)}}" alt="">
                <h2>{{$rooms->roomtype->name}}</h2>
                <p>No Kamar : {{$rooms->room_no}}</p>
                <p>Harga : RP.{{$rooms->price}}</p>
            </div>
        </div>
        <form action="{{route('save-reservation')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-items" style="display:none">
                <label>Tipe Kamar</label><br>
                <input type="text" placeholder="Tipe Kamar" name="room" id="room" value="{{$rooms->roomtype->id}}">
            </div>
            <div class="form-items">
                <label>Nama</label><br>
                <input type="text" placeholder="Nama" name="name" id="name">
            </div>
            <div class="form-items">
                <label>Email</label><br>
                <input type="email" placeholder="email" name="email" id="email">
            </div>
            <div class="form-items">
                <label>Nomor Telepon</label><br>
                <input type="text" placeholder="Nomor Telepon" name="no_handphone" id="no_handphone">
            </div>
            <div class="form-items">
                <label>Check In</label><br>
                <input type="date" name="check_in" id="check_in">
            </div>
            <div class="form-items">
                <label>Check Out</label><br>
                <input type="date" name="check_out" id="check_out">
            </div>
            <div class="button-reservasi">
                <button type="submit" class="btn-pesan">Reservasi</button>
            </div>
            </div>
        </form>
    </div>
    <!-- end content -->
    <!-- end navbar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>




