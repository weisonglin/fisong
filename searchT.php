<?php
require_once("header.php");
$view = new View;
$view->output_header();

?>
        <body>
            <div class="t">
                <h1  id="fisongT"> fiSong By Title</h1>
            </div>

            <div class="container">
              <h2 >fiSong by title</h2>
              <form role="form">
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="title" class="form-control" id="email" placeholder="Enter the title of the song here">
                </div>
                <!-- <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">fiSong</button>
              </form>
            </div>
        </body>
    </html>
