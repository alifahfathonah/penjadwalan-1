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
						<a href="<?php echo site_url('admin/klien/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<?php echo form_open('admin/klien/simpan') ?>
						
							<div class="form-group">
								<label for="name">ID Klien*
								</label>
								<input class="form-control" type="text" name="idklien" value="<?php echo $kode; ?>" readonly="readonly" />
							</div>

							<div class="form-group">
								<label for="price">Nama Klien*</label>
								<input class="form-control" type="text" name="nmklien" placeholder="Nama Klien" />
							</div>


							<div class="form-group">
								<label for="price">No Telepon*</label>
								<input class="form-control" type="text" name="tlpkln" min="0" placeholder="Nama Klien" />
							</div>


							<div class="form-group">
								<label for="price">Alamat*</label>
								<input class="form-control" type="text" name="alamatkln" placeholder="Nama Klien" />
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						<?php echo form_close() ?>

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