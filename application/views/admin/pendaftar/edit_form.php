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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/pendaftars/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pendaftar/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $pendaftar->nip?>" />

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $pendaftar->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="JK">Jenis Kelamin*</label>
								<select name="jk">
									<option value="L">L</option>
									<option value="P">P</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('jk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Asal</label>
								<input class="form-control <?php echo form_error('asal') ? 'is-invalid':'' ?>"
								 type="text" name="asal" min="0" placeholder="Asal" value="<?php echo $pendaftar->asal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('asal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Universitas</label>
								<input class="form-control <?php echo form_error('univ') ? 'is-invalid':'' ?>"
								 type="text" name="univ" min="0" placeholder="Univ" value="<?php echo $pendaftar->univ ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('univ') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Kehadiran*</label>
								<select name="status">
									<option value="1">Masuk</option>
									<option value="2">Tidak Masuk</option>
									<option value="3">Sakit</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $pendaftar->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<textarea class="form-control <?php echo form_error('ket') ? 'is-invalid':'' ?>"
								 name="ket" placeholder="Keterangan..."><?php echo $pendaftar->ket ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('ket') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>