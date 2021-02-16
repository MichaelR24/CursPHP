<?php
 //require_once('database.php');
 if(isset($_POST) & !empty($_POST)){
	 $fname = $database->sanitize($_POST['fname']);
	 $lname = $database->sanitize($_POST['lname']);
	 $email = $database->sanitize($_POST['email']);
	 $gender = $_POST['gender'];
	 $age = $_POST['age'];
 
	 $res = $database->create($fname, $lname, $email, $gender, $age);
	 if($res){
	 	echo "Successfully inserted data";
	 }else{
	 	echo "failed to insert data";
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in OOP PHP - Create</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>MyApp de tip  CRUD:  PHP-OOP - Carti</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Titlu </label>
			    <div class="col-sm-10">
			      <input type="text" name="titlu"  class="form-control" id="input1" placeholder="Titlu carte" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Autor</label>
			    <div class="col-sm-10">
			      <input type="text" name="autor"  class="form-control" id="input1" placeholder="Numele autorului" />
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Editura</label>
			    <div class="col-sm-10">
			      <input type="text" name="editura"  class="form-control" id="input1" placeholder="Editura" />
			    </div>
			</div>
 
			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Tip Carte</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="tip_carte" id="optionsRadios1" value="manual" checked> Manuale
			  </label>
			  	  <label>
			    <input type="radio" name="tip_carte" id="optionsRadios1" value="dictionar"> Dictionare
			  </label>
         </label>
			  	  <label>
			    <input type="radio" name="tip_carte" id="optionsRadios1" value="enciclopedie"> Enciclopedii
			  </label>
        
			</div>
			</div>
   
   <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">An </label>
			    <div class="col-sm-10">
			      <input type="text" name="an"  class="form-control" id="input1" placeholder="Anul in care a fot publicata cartea " />
			    </div>
			</div>
   <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Pagini</label>
			    <div class="col-sm-10">
			      <input type="text" name="pagini"  class="form-control" id="input1" placeholder="Cate pagini are cartea" />
			    </div>
			</div>
 
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Pret</label>
			<div class="col-sm-10">
				<select name="pret" class="form-control">
					<option>Lista preturi</option>
					<option value="20">20</option>
					<option value="25">25</option>
					<option value="30">30</option>
					<option value="35">35</option>
					<option value="40">40</option>
					<option value="45">45</option>
				</select>
			</div>
			</div>
			<input type="submit" class="btn btn-primary col-md-4 col-md-offset-8" value="Salveaza cartea" />
		</form>
	</div>
</div>
</body>
</html>