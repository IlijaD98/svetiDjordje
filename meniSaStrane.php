<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meniSaStrane1.css">
    <title>Meni</title>
</head>
<body>
    
<div id="sideNav">
        <nav>
            <ul>
                <li><p><br></p></li>
                <li><a href="naslovna.php">Naslovna</a></li>
                <li><a href="onama.php">O nama</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <li><a href="videoteka.php">Video galerija</a></li>

                <li><a href="kontakt.php">Kontakt</a></li>

            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="slike/menuicon.png" id="menu">
    </div>

    <script>
        var menuBtn=document.getElementById("menuBtn")
        var sideNav=document.getElementById("sideNav")
        var menu=document.getElementById("menu")

        sideNav.style.right="-250px";

        menuBtn.onclick=function(){
           if(sideNav.style.right=="-250px"){
               sideNav.style.right="0";
               menu.src="slike/close.png";
           } 
           else{
               sideNav.style.right="-250px";
               menu.src="slike/menuicon.png";
           }
        }


    </script>
</body>
</html>