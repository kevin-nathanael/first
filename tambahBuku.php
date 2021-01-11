<?php 
	include("connection.php");
	include("navbar.php");

?>

</button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="index.php">List Buku</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#">Tambah Buku</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="about.php">About Perpus</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
    
	<form action="tambahBukuController.php" method="post">
	  <div class="mb-3">
	    <label for="judul" class="form-label">Judul Buku*</label>
	    <input type="text" class="form-control" name="judul">
	    <label for="desc" class="form-label">Deskripsi Buku</label>
	    <input type="text" class="form-control" name="desc">
	    <label for="status" class="form-label">Status</label>
	    <input type="text" class="form-control" name="status" value="tersedia">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>