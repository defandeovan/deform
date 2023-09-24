<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deform</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
   <!-- feather -->
   <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">D<span>eform</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
          
        </div>
        <div class="navbar-extra">
            <a href="https://wa.me/6285330371163?" id="message"><i
             data-feather="message-circle"></i></a>
             
          
             <a href="login.php" id="user"><i
             data-feather="user"></i></a>
        </div>
        
    </nav>
    <section class="hero" id="home">
        <main class="content">
            <h1>WELCOME TO <span>DEFORM</span></h1>
            <p>Butuh layanan jasa editing & design ? di sini kami menyediakan semua layanan editing</p>
            <a href="https://wa.me/6285330371163?"class = "cal">order</a>
        </main>
    </section> 
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <p>Deform melayani semua jenis editing dan design. Software yang kami gunakan pun Standard Industry.</p>
        <div class="row">
            <div class="ilustrator">
                <img src="img/Adobe_illustrator_logo_PNG19.png" alt="ai" class="ai">
                
                <!-- <img src="img/pexels-lukas-952352.jpg" alt="gambar2"> -->
            </div>
                <h3 class="ilustrator">Adobe ilustrator</h3>
                
            <div class="photoshop">
                <img src="img/pngwing.com (11).png" alt="ps" class="ps">
            </div>
                <h3 class="photoshop">Adobe photoshop</h3>
            <!-- <div class="content">
                <h3>Lorem ipsum dolor sit</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex iure esse, porro omnis nesciunt dolores tenetur vero laboriosam aspernatur explicabo quam eveniet unde quasi enim aliquid veritatis officia ipsam ut, quidem accusantium doloremque similique sint. Consequatur odio fugit rerum.</p>

            </div> -->
        </div>
    </section>
    <section id="menu" class="menu">
        <h2><span>Menu</span> kami</h2>
        <p>Berikut beberapa contoh jasa yang kami layani selain ini bisa request sesuai keinginan anda</p>
        <div class="row">
            <div class="menu-list">
                <img  src="img/2.png" alt="menu kami" >
               <h3 class="content">VECTOR</h3>
               <p  >Rp.25K</p>
            </div>
            <div class="menu-list">
                <img class="card-wedding" src="img/42373.eps.png" alt="menu kami" >
               <h3 class="content">CARD WEDDING</h3>
               <p  >Rp.20K</p>
            </div>
            <div class="menu-list">
                <img class="sticker" src="img/Untitled-1.png" alt="menu kami" >
               <h3 class="content">DESIGN STICKER</h3>
               <p  >Rp.20K</p>
            </div>
        </div>
    </section>
    <!-- feather -->
    <script>
        feather.replace()
    </script>
</body>
</html>