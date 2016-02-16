<?php
require_once("header.php");
$view = new View;
$view->output_header();

?>


	<body>
		<div class="t">
                <h1  id="regT"> Registration</h1>
            </div>

             <div class="container">
             	
		  <p>please fill out for registration</p>
		  <form role="form">
		  	<div class="form-group">
			  <label for="usr">Name:</label>
			  <input type="text" class="form-control" id="usr">
			</div>

			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd">
			</div>
			<div class="form-group">
			  <label for="pwd">Confirm:</label>
			  <input type="password" class="form-control" id="pwd">
			</div>


			<div id="table">
			<div id="row">
		    <div id="cell">
		      <label for="sel1">Gender</label>
		      <select class="form-control" id="sel1">
		        <option>Male</option>
		        <option>Female</option>

		      </select>
			</div>

		      <div id="cell">
		      <label for="sel1">Age</label>
		      <select class="form-control" id="sel1">
		        <option>0-20</option>
		        <option>21-40</option>
		        <option>41-60</option>
		        <option>above 61</option>
		      </select>
			</div>

		      <div id="cell">
		      <label for="sel1">Country</label>
		      <select class="form-control" id="sel1">
		        <option>USA</option>
		        <option>China</option>
		        <option>Japan</option>
		        <option>Korea</option>
		      </select>
			</div>

		      <div cell="cell">
		      <label for="sel1">Job</label>
		      <select class="form-control" id="sel1">
		        <option>Student</option>
		        <option>Teacher</option>
		        <option>Software Engineer</option>
		        <option>Accountant</option>
		        <option>Sales</option>
		      </select>
		     </div>
		</div>
		</div>
		<br></br>

		     <button type="submit" class="btn btn-primary btn-lg btn-block"  id="sumbitB">fiSong</button>
		</form>
			</div>
</body>

            


