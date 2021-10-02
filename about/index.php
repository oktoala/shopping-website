<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>About</title>
</head>

<body>
    <?php include("../component/header.html") ?>
    <main class="main container">
        <section1 class="section1 center">
            <div class="about">
                <div class="about-profile">
                    <img src="../icon/gambar.jpg" alt="Gambar Muka Saya">
                    <div class="about-nama">Oktavian Yoga Syahputra</div>
                    <div class="about-nim">1915016074</div>
                </div>
                <div class="about-text">
                    <h3>About Me</h3>
                    <p>Halo y'all.</p>
                    <p>This is my simple website that i made for Web Programming Subject.</p>
                    <br>
                    <p>I developed this website using HTML, CSS, and PHP. </p>
                    <p>
                        API that i used is <a target="_blank" href="https://fakestoreapi.com/">FakestoreApi</a>.
                    </p>
                    <br>
                    <p>The tools that i used were Visual Studio Code as a text editor, Brave as a browser which is a Chromium Based</p>
                    <p>And also the operating system that i used is the unloved <b>Linux</b>. 🐧</p>
                    <br>
                    <p>I also want to said many thanks to Mr. Arda Yunianta who has gave me (or us) the opportunity to implement my (or our) knowledge that I (or We) have/has recevived in Web Programming Subject. </p>
                </div>
            </div>
        </section1>
    </main>
    <script>
        const nav = document.querySelector('li:nth-child(4) > a');
        nav.style.color = 'rgb(250, 217, 33)';
        nav.style.fontWeight = 'bold';
    </script>
</body>

</html>