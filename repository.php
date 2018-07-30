<?php
include 'v_header.php';
?>

<div class="container">
    <div class="container"  style="margin-bottom: 80px; margin-top: 60px">
        <div class="row">
          <!--Tabel Kiri -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs" style="margin-top:5px">
                    <li class="active">
                        <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Earthquakes Repository</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="Gempa" class="tab-pane fade in active">
					<script>var auto_refresh = setInterval( function() { $('#loadtweets').load('refresh.php').fadeIn("10"); }, 7000); // refreshing after every 15000 milliseconds </script>
                        <div style="margin-top:5px; background-color:white; height: 800px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                          <nav style="width:100%;height:100%;overflow: auto;" >
                            <ul class="list-group" style="margin-top: 2%;">
							<h3>REPOSITOY DATA GEMPA REGIONAL III</h3>
	<table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Stasiun</th>
                <th>Info Gempa</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
        </thead>
		
		<tbody>
			<?php
			
			$no = 1;
			$res = mysqli_query($koneksi,"SELECT * FROM repository WHERE STATUS=1");
			while($row = $res->fetch_assoc()){
				echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['id'].'</td>
					<td>'.$row['gempabumi'].'</td>
					<td>Dirasakan</td>
					<td> <button type="button" class="btn btn-default btn-sm" href="#myModal" data-toggle="modal" id="custId" data-id="'.$row['idpublic'].'">
          <span class="glyphicon glyphicon-edit" ></span> Tambah Info
        </button></td>
				</tr>
				';
				$no++;
			}
			?>
		</tbody>
		<tfoot>
            <tr>
                <th>No</th>
                <th>Stasiun</th>
                <th>Info Gempa</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
	</table>
	
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>
                            
                            </ul>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--//Tabel Kiri -->

            <!--Tabel Kanan -->
            
		    </div>
	</div>
	
	<!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">INFORMASI GEMPABUMI DIRASAKAN</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
	
	<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
