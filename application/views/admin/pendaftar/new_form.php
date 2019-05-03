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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pendaftars/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/pendaftar/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Id*</label>
								<input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 type="numeric" name="nip" placeholder="Id" />
								<div class="invalid-feedback">
									<?php echo form_error('nip') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" />
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
								<label for="price">Asal*</label>
								<input class="form-control <?php echo form_error('asal') ? 'is-invalid':'' ?>"
								 type="text" name="asal" min="0" placeholder="Asal" />
								<div class="invalid-feedback">
									<?php echo form_error('asal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Universitas*</label>
								<input class="form-control <?php echo form_error('univ') ? 'is-invalid':'' ?>"
								 type="text" name="univ" placeholder="Universitas" />
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
									<?php echo form_error('jk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Photo</label>
								<input class="form-control-file <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<textarea class="form-control <?php echo form_error('ket') ? 'is-invalid':'' ?>"
								 name="ket" placeholder="Keterangan"></textarea>
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