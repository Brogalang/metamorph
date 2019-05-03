<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pendaftars/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama</th>
										<th>JKL</th>
										<th>Asal</th>
										<th>Universitas</th>
										<th>Photo</th>
										<th>Keterangan</th>
										<th>Kehadiran</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pendaftar as $pendaftar): ?>
									<tr>
										<td width="150">
											<?php echo $pendaftar->nip ?>
										</td>
										<td>
											<?php echo $pendaftar->nama ?>
										</td>
										<td>
											<?php echo $pendaftar->jk ?>
										</td>
										<td>
											<?php echo $pendaftar->asal ?>
										</td>
										<td>
											<?php echo $pendaftar->univ ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/pendaftar/'.$pendaftar->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($pendaftar->ket, 0, 120) ?>...
										</td>
										<td>
					                      <?php 
					                          switch ($pendaftar->status) {
					                            case 1:
					                                  echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
					                                break;
					                            
					                            case 2:
					                                  echo '<div class="p-2 d-inline-block rounded-circle bg-warning"></div>';
					                                break;
					           
					                             case 3:
					                                  echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
					                                break;
					           
					                              case 4:
					                                  echo '<div class="p-2 d-inline-block rounded-circle bg-primary"></div>';
					                                break;
					                          }
					                       ?>    
					                  </td>
					                  	<td width="250">
											<a href="<?php echo site_url('admin/pendaftars/edit/'.$pendaftar->nip) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/pendaftars/delete/'.$pendaftar->nip) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->
	<script>
		function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
		}
	</script>

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>