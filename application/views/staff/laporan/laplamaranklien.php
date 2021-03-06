<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("staff/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("staff/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("staff/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("staff/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<?php echo form_open('staff/laplamaranklien/cetak') ?>
						
							<div class="form-group">
								<label for="price">Klien*</label>
								<select name="klien" class="form-control select2" aria-describedby="sizing-addon2">
        							<?php
        								foreach ($data_klien as $key ) {
        							?>
          							<option value="<?php echo $key->id_klien;?>">
            							<?php echo $key->nmklien;?>
         							 </option>
          							<?php } ?>
     							 </select>
							</div>
							
							<input class="btn btn-success" type="submit" name="btn" value="Cetak" />
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