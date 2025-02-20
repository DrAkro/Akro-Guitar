<?php
  $website_title = "Selamat Datang di Akro Guitar";
  $website_description = "Kami menyediakan berbagai jenis gitar dan peralatan gitar yang lengkap dengan kualitas terbaik!";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $website_title; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.6); 
        }

        header {
    background: linear-gradient(rgba(0, 0, 0, 1.9), rgba(0, 0, 0, 0.7)), url('img/bg4.jpg') no-repeat center center/cover;
    color: white;
    padding: 400px 20px;
    text-align: center;
}


        header h1, header h2 {
            background-color: rgba(0, 0, 0, 0.6); 
            display: inline-block; 
            padding: 0px; 
            margin: 0px;
            border-radius: 5px;
        }

        .cta-button {
            padding: 12px 30px;
            font-size: 18px;
            background-color:#007bff;
            color: white;
            font-family: Sans-serif;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            
        }

        .cta-button:hover {
            background-color:rgb(56, 42, 255);
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
            background-color: black;
        }

        .feature-card {
            background-color: orange;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            font-family: Bold, sans-serif;
            font-weight: bold;
            width: 28%;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            background-color: #ff9800;
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 14px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1><?php echo $website_title; ?></h1> </br></br>
        <h2><?php echo $website_description; ?></h2> 
    </br>
    </br>
    </br>
    </br>
    @if (Route::has('login'))
    @auth
    <a href="{{route('home')}}" class="cta-button">Dashboard</a>
   
    @else
    <a href="{{route('login')}}" class="cta-button">Masuk / Daftar Sekarang</a>
    @endauth
    @endif
    
       
    </header>

    <div class="features">
        <div class="feature-card">
            <h2>Gitar Berkualitas</h2>
            <h4>Kami menyediakan berbagai jenis gitar dengan kualitas terbaik, mulai dari gitar akustik hingga elektrik.</h4>
        </div>
        <div class="feature-card">
            <h2>Peralatan Gitar Lengkap</h2>
            <h4>Temukan berbagai aksesoris gitar yang dapat mendukung permainan musik Anda.</h4>
        </div>
        <div class="feature-card">
            <h2>Pelayanan Profesional</h2>
            <h4>Tim kami siap membantu Anda dengan saran dan solusi terbaik untuk kebutuhan musik Anda.</h4>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Akro Guitar. Semua hak cipta dilindungi.</p>
        <p>Instagram: <a href="https://instagram.com/akroguitar" target="_blank">@akroguitar</a></p>
        <p>Phone: 2098455</p>
    </footer>

</body>
</html> 