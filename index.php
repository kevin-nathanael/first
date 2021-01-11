<?php 
	include("connection.php");
	include("navbar.php");

?>

</button>
	    <div class="collapse navbar-collapse" id="navbarNavDropdown">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">List Buku</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="tambahBuku.php">Tambah Buku</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="about.php">About Perpus</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  	<?php  
		$query = "SELECT idBook,Title,description,status FROM buku";
		$temp = mysqli_query($conn,$query);
		$i=0;
		while($x= mysqli_fetch_array($temp)){
	?>

	    <tr>
	      <th scope="row"><?php echo $x['idBook'] ?></th>
	      <td><?php echo $x['Title'] ?></td>
	      <td><?php echo $x['description'] ?></td>
	      <td><?php echo $x['status'] ?></td>
	    </tr>

	<?php } ?>
  </tbody>
</table>

	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>