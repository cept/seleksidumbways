<?php 
	//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "wip");	

	//ambil data dari table school_tb
	$result = mysqli_query($conn, "SELECT * FROM school_tb");

if(isset($_POST["submit"])){

	$npsn = $_POST["NPSN"];
	$name_school = $_POST["name_school"];
	$address = $_POST["address"];
	$logo_school = $_POST["logo_school"];
	$school_level = $_POST["school_level"];
	$status_school = $_POST["status_school"];
	$user_id = $_POST["user_id"];

	$query = "INSERT INTO school_tb
				VALUES
				('','$npsn','$name_school','$address','$logo_school','$school_level','$status_school','$user_id')
			";
			mysqli_query($conn, $query);
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Dumbways 4</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
	 	<a class="navbar-brand" href="#">School Data</a>
		<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modelAdd">
		  Add
		</button>
	</nav>

	<!-- Button trigger modal -->


<!-- Modal Add -->
<div class="modal fade" id="modelAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add School</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        	<div class="form-group">
			    <label for="exampleFormControlInput1">NPSN</label>
			    <input type="text" name="NPSN" class="form-control" id="NPSN">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nama Sekolah</label>
			    <input type="text" name="name_school" class="form-control" id="name_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Alamat</label>
			    <input type="text" name="address" class="form-control" id="address">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlFile1">Logo Sekolah</label>
    			<input type="file" name="logo_school" class="form-control-file" id="logo_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Terakreditasi</label>
			    <input type="text" name="school_level" class="form-control" id="school_level">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Status Sekolah</label>
			    <input type="text" name="status_school" class="form-control" id="status_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">User Id</label>
			    <input type="text" name="user_id" class="form-control" id="user_id">
			</div>
      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="submit" class="btn btn-success">Add</button>
	      </div>
        </form>
    </div>
  </div>
</div>

	<div class="container mt-5 mx-auto">
		<div class="row">
	<?php while($row = mysqli_fetch_assoc($result)): ?>
		<div class="card m-3" style="width: 18rem;">
		  <img src="img/<?php echo $row["logo_school"]; ?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?= $row["name_school"]; ?></h5>
		    <p class="card-text"><?= $row["status_school"]; ?></p>
		    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
			  Detail
			</button>
		  </div>
		</div>
	<?php endwhile; ?>
	</div>
	</div>

	<!-- Button trigger modal -->


<!-- Modal Detail -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail School</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        	<div class="form-group">
			    <label for="exampleFormControlInput1">NPSN</label>
			    <input type="text" name="NPSN" class="form-control" id="NPSN">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Nama Sekolah</label>
			    <input type="text" name="name_school" class="form-control" id="name_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Alamat</label>
			    <input type="text" name="address" class="form-control" id="address">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlFile1">Logo Sekolah</label>
    			<input type="file" name="logo_school" class="form-control-file" id="logo_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Terakreditasi</label>
			    <input type="text" name="school_level" class="form-control" id="school_level">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">Status Sekolah</label>
			    <input type="text" name="status_school" class="form-control" id="status_school">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlInput1">User Id</label>
			    <input type="text" name="user_id" class="form-control" id="user_id">
			</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
		</form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>