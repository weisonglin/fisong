<?php
require_once("header.php");
$view = new View;
$view->output_header();

?>



        <body>

            <div class="content">
                <div class="row">
                    <h1 class="text-center"> Welcome to fiSong </h1>
                    <h3 class="text-center"> Discover, Soul, Song</h3>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <h4 class='text-center'>Title</h4>
                    <a href="http://localhost/example/searchT.php" class="">
                        
                        <div class='quicksearchthumbnail thumbnail'>
                            <img src='http://localhost/example/image/m1.jpg'  style="width:300px;height:300px">
                            
                        </div>
                    </a>
                  </div>

                  <div class="col-md-4">
                     <h4 class='text-center'>Matching</h4>
                    <a href="http://localhost/example/searchM.php" class="">
                       
                        <div class='quicksearchthumbnail thumbnail'>
                            <img src='http://localhost/example/image/m2.jpg' alt='#' class='img-rounded'  style="width:300px;height:300px">
                            
                        </div>
                    </a>
                  </div>

                  <div class="col-md-4">
                     <h4 class='text-center'>recommandation</h4>
                    <a href="http://localhost/example/searchM.php" class="">
                        
                        <div class='quicksearchthumbnail thumbnail'>
                            <img src='http://localhost/example/image/m3.jpg' alt='#' class='img-rounded'  style="width:300px;height:300px">
                           
                        </div>
                    </a>
                  </div>
                </div>
            </div>
        </body>
    </html>