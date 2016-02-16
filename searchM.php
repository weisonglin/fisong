<?php
require_once("header.php");
$view = new View;
$view->output_header();

?>
        <body>
            <div class="t">
                <h1  id="fisongT"> fiSong Best Matching</h1>
            </div>

            <div class="container">
              <h2 >fiSong Best Matching</h2>
              <form role="form">
                <div class="form-group">
                  <label for="title">Matching:</label>
                  <input type="title" class="form-control" id="email" placeholder="Enter any words here">
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
