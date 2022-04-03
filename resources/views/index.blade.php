<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Laravel</title>

    {{-- bootstrap css cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
    {{-- font awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
    integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
    crossorigin="anonymous"></script>


</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('Assets/logo.png')}}"  alt="HIMTI BINUS" id="logo">
                </a>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link page" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between">
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Register</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-duo" type="submit">Login</button>
                </div>
            </div>
        </div>    
      </nav>

    {{-- start of title --}}
    <div class="container-fluid title d-flex flex-column justify-content-center">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center sub-title">(HIMFO)</h1>
            <h1 class="text-center title-title">Himpunan Mahasiswa <br>Teknik Informatika</h1>
            <h5 class="pt-4 ket-title">Binus University @Malang</h5> 
        </div>
    </div>
    {{-- end of title --}}
    {{-- start of tagline --}}
    <div class="container-fluid tagline d-flex flex-column justify-content-center mt-5">
        <div class="container d-flex flex-column align-items-center">
            <p class="sub-title-tagline">Our Tagline</p>
            <h2 class="title-tagline">One Family One Goal</h2>
        </div>
    </div>
    
    {{-- end of tagline --}}

    {{-- start of content --}}
    <div class="container content-1 d-flex flex-column justify-content-center">
        <div class="container">
            <p class="sub-title-content text-start">1// Our History</p>
            <h3 class="title-content text-start">HISTORY OF HIMFO</h3>
            <p class="content-history text-justify pt-2">
                Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara atau yang sering kita sebut HIMFO, berdiri pertama kali pada tahun 1992,
                tepatnya pada 14 September 1992. Pencetus ide HIMTI merupakan mantan ketua Jurusan Teknik Informatika yaitu Bpk. Ir. Toto Widyanto, MSc. Pada saat itu,
                HIMTI dipimpin oleh koordinator umum bernama Sdr. Yusuf Setiyono. HIMTI sendiri merupakan organisasi kemahasiswaan yang memiliki bentuk sebagai himpunan antar jurusan
                School of Computer Science (SoCS).
            </p>
        </div>
    </div>

    <div class="content-2 container d-flex flex-row">
        <div class="quote p-5 ">
            <p class="title-quote pt-5 pl-5 ">
                HIMFO bagi saya adalah 
                <br>rumah tempat kita bertukar 
                <br>pikiran, bersatu dan
                <br>bersinergi bersama.
            </p>
            <p class="text-right name-quote pr-5 pt-5 ">Stefano Christian</p>
            <p class="text-right position-quote pr-5">Chief Executive Officer</p>
            
        </div>
        <div class="picture position-absolute top-0 start-100 translate-middle">
            <img src="{{asset('Assets/Figure.png')}}" alt="">
        </div>

    </div>

    <div class="content-3 container mb-5">
        <p class="sub-title-content text-start">2// Our Activities</p>
        <div class="d-flex justify-content-between title-content-3">
            <h3 class="title-content text-start">UPCOMING EVENT</h3>
            <a href="" >Tampilkan lebih banyak</a>

        </div>
        <div class="card-content row ">
            <div class="col-4">
                <div class="card" >
                    <img src="{{asset('Assets/Card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Bootcamp HIMFO 2021</h5>
                      <p class="card-text">25 Oktober 2021</p>
                      <a href="">Lihat detail</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" >
                    <img src="{{asset('Assets/Card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Bootcamp HIMFO 2021</h5>
                      <p class="card-text">25 Oktober 2021</p>
                      <a href="">Lihat detail</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" >
                    <img src="{{asset('Assets/Card.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card Bootcamp HIMFO 2021</h5>
                      <p class="card-text">25 Oktober 2021</p>
                      <a href="">Lihat detail</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="content-4 container  " >
        <p class="sub-title-content text-start">3// Our Galleries</p>
        <div class="d-flex justify-content-between title-content-3">
            <h3 class="title-content text-start">GALLERIES OF HIMTI</h3>
            <a href="" >Tampilkan lebih banyak</a>

        </div>
        <div class="gallery row row-1">
            <div class="col-8 " >
                <img src="{{asset('Assets/Gallery-1new.png')}}" class="gallery-1" alt="">
            </div>
            <div class="col-4">
                <img src="{{asset('Assets/Gallery-2.png')}}" class="gallery-2" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{asset('Assets/Gallery-3.png')}}" class="gallery-2" alt="">
            </div>
            <div class="col-8">
                <img src="{{asset('Assets/Gallery-4new.png')}}" class="gallery-1" alt="">
            </div>
        </div>

    </div>

    <div class="content-5 cointainer-fluid mb-5 ">
        <div class="content container d-flex justify-content-between mt-5">
            <div class="title-desc">
                <p class="title-content-5">Let me know if <br>you have a question.</p>
                <p class="desc-content-5">Your question will be answered max 1x24 hours, <br>thanks for contact us!</p>
            </div>
            <div class="button align-self-center">
                <a class="btn btn-primary btn-lg" href="#" role="button">Contact Us</a>
            </div>
        </div>

    </div>
    {{-- end of content --}}
    {{-- start of footer --}}
    <footer class="container footer-homepage">
        <div class="row option ">
            <div class="col-3">
                <img src="{{asset('Assets/Logo.png')}}" alt="">
            </div>
            <div class="col-3">
                <ul>
                    <li><b>Navigation</b></li>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="col-3">
                <ul>
                    <li><b>Account</b></li>
                    <li>Register</li>
                    <li>Login</li>
                </ul>
            </div>
            <div class="col-3">
                <ul>
                    <li><b>Follow</b></li>
                    <li class="sosmed d-flex">
                        <div class="mr-2"><i class="fab fa-linkedin-in"></i></div>
                        <div class="mr-2"><i class="fab fa-whatsapp"></i></div>
                        <div><i class="fab fa-instagram"></i></div>
                    </li>
                   <li>himtimalang@binus.ac.id</li>

                </ul>
            </div>
        </div>
        <p class="copyright text-center">Copyright by Himpunan Mahasiswa Teknik Informatika Binus University | 2021</p>

    </footer>
    {{-- end of footer --}}


    {{-- bootstrap js cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
