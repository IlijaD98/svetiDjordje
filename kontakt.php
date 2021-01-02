<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kontakt1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>Kontakt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<section class="contact">
<div class="content">
    <h2>Konktaktiraj nas</h2>
    <p>Za sve što te zanima o nama slobodno nas pitaj i dobićeš odgovor u kratkom roku.</p>
</div>

<div class="container">
    <div class="contactInfo">
        <div class="box">
            <div class="icon">
            <i class="fas fa-map-marker-alt"></i> 
            </div>  
                <div class="text">
                    <h3>Adresa</h3>
                    <p>Zrmanjska8,<br> 11030, <br> Beograd (Čukarica)</p>
                </div>
                </div>
            <div class="box">
                <div class="icon"><i class="fas fa-phone"></i></div>  
                    <div class="text">
                    <h3>Telefon</h3>
                    <p>+381 (0)11 354 16 83</p>
                    </div>
                    </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope"></i></div> 
                        <div class="text">
                        <h3>E - mail</h3>
                        <p>fasvdjordje@gmail.com</p>
                        </div>
                </div>
            </div>
    <div class="contactForm">
    <form action="">
        <h2>Pošalji poruku</h2>
        <div class="inputBox">
        <input type="text" name="" required="required">
        <span>Ime i prezime</span>
        </div>
        <div class="inputBox">
        <input type="text" name="" required="required">
        <span>E - mail</span>
        </div>
        <div class="inputBox">
        <textarea required="required"></textarea>
        <span>Napiši nam poruku...</span>
        </div>
        <div class="inputBox">
        <input type="submit" name="" value="Pošalji">
        </div>
    </form>
    </div>
</div>
</section>


    <?php
        include 'meniSaStrane.php';
    ?>
</body>
</html>