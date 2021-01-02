<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="onama5.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
  
}
#myBtn1{

  
  
  background-color:red;

}
</style>
    <title>O nama</title>
</head>
<body>



    <section class="feature">
        <div class="title-text">
</br>
</br>
            <p>Saznaj vise o</p>
            <h1>Folklornom ansamblu Sveti Đorđe</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Duga tradicija</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                    <i class="fas fa-hourglass"></i>

                    </div>
                    <div class="feature-text">
                        <p>FA Sveti Đorđe postoji još od 1953.</p>

                    </div>
                </div>

                <h1>Nezaboravne turneje</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                    <i class="fas fa-globe-africa"></i>


                    </div>
                    <div class="feature-text">
                        <p>Igrali smo u više od 35 zemalja sveta</p>

                    </div>
                </div>

                <h1>Prijateljstva za ceo život</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                    <i class="fas fa-people-carry"></i>
                    </div>
                    <div class="feature-text">
                        <p>Mi smo jedna velika porodica</p>

                    </div>
                </div>

            </div>
            <div class="features-img">
                <img src="slike1/mi1.jpg" >
            </div>
            <div class="velikiTekst">
                <br>
                <p align="justify">
                FA Sveti Đorđe je beogradski folklorni ansambl sa Banovog brda koji naporno radi već punih 17 godina. Već punih 17 godina ovo društvo okuplja decu, mališane, omladince i uči ih našoj tradiciji, ali na svetski način. Uči ih toj plemenitoj veštini, uči ih da igraju za isti tim, da se bore, izgaraju, žrtvuju…

</br>
Oni se znoje, putuju, ali prethodno natope majice, usijaju zglobove i ostave deo duše po fiskulturnim salama širom Čukarice. Tamo zajedno rastu, saznaju, zriju. Skupa stasavaju, prave uspomene i pobeđuju.
</br>
Nastup je šlag na torti koji je jedini bio vidljiv i pred turskim premijerom, i u Alžiru gde su pobrali najveće ovacije od svih zemalja učesnica, i u Francuskoj i Italiji gde već tradicionalno neguju velika prijateljstva, i u dalekom Kazakstanu, pa čak i na Kanarskim ostrvima. 
</br>
Samo spektakl je proteklih godina bio vidljiv i u bioskopu Šumadija, i u Kulturnom centru Rakovica, i u Kulturnom centru Čukarica i u Dečijim Kulturnom centru i u Domu Sindikata, na Kolarcu, Sava centu. 
</br>
Crni šeširi Banata, svilena nošnja Kazačoka, zlatni prsluci k’o klasje vojvođansko, zlatne toke i cveće u kosi, šarane suknje i beli kaftani sa Nišave…
</br>
Sav taj raskoš upotpuniće ujednačen i uigran korak i široke osmehe koji će svetlucati sa pozornice.
<span id="dots">...</span><span id="more">
FA Sveti Đorđe je beogradski folklorni ansambl sa Banovog brda koji naporno radi već punih 17 godina. Već punih 17 godina ovo društvo okuplja decu, mališane, omladince i uči ih našoj tradiciji, ali na svetski način. Uči ih toj plemenitoj veštini, uči ih da igraju za isti tim, da se bore, izgaraju, žrtvuju…
</br>
Oni se znoje, putuju, ali prethodno natope majice, usijaju zglobove i ostave deo duše po fiskulturnim salama širom Čukarice. Tamo zajedno rastu, saznaju, zriju. Skupa stasavaju, prave uspomene i pobeđuju. Ima tu i povreda i suza i teških trenutaka, ali sve je to zarad širenja misije zacrtane još 2003. i zarad veličanstvenih priredbi kao krajnjeg produkta, koji je jedini vidljiv posetiocima na festivalima i u koncertnim dvoranama. 
</span>
</p>

<button onclick="myFunction11()" id="myBtn1"><i class="far fa-caret-square-down"></i>Procitaj vise</button>

            </div>


        <section id="donjiDeo">
        <h1>Odevne kombinacije</h1>
        <br>
            <div class="tabela" style="overflow-x:auto">
               
                <table class="tabela-nosnje"> 
                    <tr>
                        <th><h4>Severna Srbija</h4></th>
                        <th><h4>Centralna Srbija</h4></th>
                        <th><h4>Južna Srbija</h4></th>
                    </tr>
                    <tr>
                        <th><img src="slike1/nosnja1.jpg" width="400" height="400"></th>
                        <th><img src="slike1/nosnja2.jpg" width="400" height="400"></th>
                        <th><img src="slike1/nosnja3.jpg" width="400" height="400"></th>
                    </tr>

                </table>
            </div>

        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        </div>
    
    </section>
    <script>
        function myFunction11() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Procitaj vise";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Sakrij tekst";
    moreText.style.display = "inline";
  }
}
        </script>
         <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    <?php
        include 'meniSaStrane.php';
    ?>
    
</body>
</html>