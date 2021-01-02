<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="videoteka1.css">
    <title>Video galerija</title>
</head>
<body>
    
    <div class="containter">
        <h1>Video galerija</h1>
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <img src="slike1/slika3.jpg" width="100%">
                    <img src="slike1/play.png" class="play-btn" onclick="playVideo('slike1/video1.mp4')">
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="slike1/slika1.jpg">  
                        <img src="slike1/play.png" class="play-btn" onclick="playVideo('slike1/video1.mp4')"> 
                    </div>
                    <p>Igre severne Srbije</p>
                </div>

                <div class="small-img-row">
                    <div class="small-img">
                        <img src="slike1/slika2.jpg">  
                        <img src="slike1/play.png" class="play-btn" onclick="playVideo('slike1/video1.mp4')"> 
                    </div>
                    <p>Igre centralne Srbije</p>
                </div>

                <div class="small-img-row">
                    <div class="small-img">
                        <img src="slike1/slika6.jpg">  
                        <img src="slike1/play.png" class="play-btn" onclick="playVideo('slike1/video1.mp4')"> 
                    </div>
                    <p>Igre južne Srbije</p>
                </div>
            </div>
        </div>

    </div>



    <div class="video-player" id="videoPlayer">
        <video width="100%" controls autoplay id="myVideo">
            <source src="slike1/video1.mp4" type="video/mp4">
        </video>
        <img src="slike1/close1.png" class="close-btn" onclick="stopVideo()">
    </div>

    <script>
        var videoPlayer=document.getElementById("videoPlayer");
        var myVideo=document.getElementById("myVideo");
        myVideo.muted=true;
        function stopVideo(){
            videoPlayer.style.display="none";
            myVideo.muted=true;

        }
        function playVideo(file){
            myVideo.src=file;
            videoPlayer.style.display="block";

        }


    </script>
<?php
        include 'meniSaStrane.php';
    ?>
</body>
</html>