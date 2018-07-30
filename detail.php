<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihanperdana";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 
   
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
       $sql = mysqli_query($koneksi, "SELECT * FROM repository where idpublic='$id'");
		while(($data =  mysqli_fetch_assoc($sql))) {
?>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['idpublic']; ?>">
            <div class="form-group">
                <label>Info Gempabumi</label>
                <textarea class="form-control" rows="2" name="deskripsi" ><?php echo $data['gempabumi']; ?></textarea>
            </div>
						<div class="form-group row">
					<div class="col-md-4">
							<select class="form-control" name= "op1">
							<option value="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).">Back Arc Thrust</option>
							<option value="aktifitas sesar aktif.">Sesar Aktif</option>
							<option value="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.">Subduksi</option>
							</select>
					</div>
					<div class="col-md-4">
							<select class="form-control" name= "op2">
							<option value="laut">Epic di Laut</option>
							<option value="darat">Epic di Darat</option>
							</select>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control" name="nama_barang" placeholder="masukan kota utama">
					
					</div>
					</div>
			
			<div class="form-group">
                <label>SIG 1</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['sig1']; ?>">
            </div>
			<div class="form-group">
                <label>SIG 2</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['sig2']; ?>">
            </div>
			<div class="form-group">
                <label>SIG 3</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['sig3']; ?>">
            </div>
			<div class="form-group">
                <label>SIG 4</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['sig4']; ?>">
            </div>
			<div class="form-group">
                <label>SIG 5</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['sig5']; ?>">
            </div>
            
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        
        <?php } 
    $koneksi->close();
?>