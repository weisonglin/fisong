<?php
require_once("header.php");
$view = new View;
$view->output_header();

?>

<body>

		<div class="t">
                <h1  id="fisongT"> Login</h1>
            </div>

             <div class="container">
             	
		  <p>please fill out for login</p>
		  <form role="form">
		  	<div class="form-group">
			  <label for="usr">ID:</label>
			  <input type="text" class="form-control" id="usr">
			</div>

			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd">
			</div>

			<button type="submit" class="btn btn-primary btn-lg btn-block"  id="sumbitB">fiSong</button>
		</form>
	</div>


</body>