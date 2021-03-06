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
						<a href="<?php echo site_url('admin/klinik/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<?php echo form_open('admin/klinik/update') ?>
						
							<div class="form-group">
								<label for="name">Kode Klinik*</label>
								<input class="form-control" type="text" value="<?php echo $data_klinik->kdklinik ?>" name="kdklinik" readonly="readonly"/>
								<input type="hidden" value="<?php echo $data_klinik->kdklinik ?>" name="idklien">
							</div>

							<div class="form-group">
								<label for="price">Nama klinik*</label>
								<input class="form-control" type="text" name="nmklinik" value="<?php echo $data_klinik->nmklinik ?>" placeholder="Nama Klien" />
							</div>


							<div class="form-group">
								<label for="price">No Telepon*</label>
								<input class="form-control" type="text" name="tlpklk" value="<?php echo $data_klinik->telpklk ?>" placeholder="Nama Klien" />
							</div>


							<div class="form-group">
								<label for="price">Alamat*</label>
								<input class="form-control" type="text" name="alamatklk" value="<?php echo $data_klinik->alamatklk ?>" placeholder="Nama Klien" />
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Simpan Perubahan" />
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