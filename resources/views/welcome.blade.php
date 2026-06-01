<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Ticketing Museum | Beranda</title>

        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }

            body{
                font-family: Arial, sans-serif;
            }

            .hero{
                min-height:100vh;
                background-image:url('{{ asset('images/museum-bg.png') }}');
                background-size:cover;
                background-position:center;
                position:relative;
            }

            .overlay{
                position:absolute;
                inset:0;
                background:rgba(0,0,0,0.35);
            }

            .navbar{
                position:relative;
                z-index:2;

                display:flex;
                justify-content:space-between;
                align-items:center;

                padding:24px 60px;
            }

            .logo{
                color:white;
                font-size:28px;
                font-weight:600;
            }

            .login-btn{
                color:white;
                text-decoration:none;
                border:1px solid white;
                padding:10px 18px;
                border-radius:8px;
            }

            .content{
                position:relative;
                z-index:2;

                height:calc(100vh - 80px);

                display:flex;
                flex-direction:column;
                justify-content:center;

                padding-left:80px;

                max-width:650px;
            }

            .content h1{
                color:white;
                font-size:60px;
                margin-bottom:20px;
            }

            .content p{
                color:white;
                font-size:20px;
                line-height:1.6;
                margin-bottom:30px;
            }

            .cta-btn{
                width:fit-content;

                background:white;
                color:black;

                text-decoration:none;

                padding:14px 24px;

                border-radius:10px;
                font-weight:600;
            }

        </style>
    </head>

    <body>
        <div class="hero">
            <div class="overlay"></div>
            <div class="navbar">
                <div class="logo">
                    E-Ticketing Museum
                </div>
                <a href="{{ route('login') }}" class="login-btn">
                    Login Admin
                </a>
            </div>

            <div class="content">
                <h1>
                    Jelajahi Sejarah
                </h1>
                <p>
                    Pesan tiket kunjungan museum secara online dengan mudah tanpa perlu antre di lokasi.
                </p>
                <a href="{{ route('pengunjung.create') }}" class="cta-btn">
                    Pesan Tiket Sekarang
                </a>
            </div>
        </div>
    </body>
</html>