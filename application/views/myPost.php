<!DOCTYPE html>
<html>

<head>
	<title>Codeigniter - Multiple Image upload using dropzone.js</title>
	<link href="<?= base_url('vendor/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?= base_url('vendor/') ?>assets/js/jquery-3.6.0.min.js"></script>
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Codeigniter - Multiple Image upload using dropzone.js</h2>
				<form action="uploader/image_uploader" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
					<div>
						<h3>Upload Multiple Image By Click On Box</h3>
					</div>
				</form>
			</div>
		</div>
	</div>

	<form action="uploader/image_uploader" method="post" enctype="multipart/form-data">
<input type="file" name="upimg" id="">
<button type="submit">upload</button>
	</form>


	<script type="text/javascript">
		Dropzone.options.imageUpload = {
			maxFilesize: 100,
			acceptedFiles: ".jpeg,.jpg,.png,.gif"
		};
	</script>


</body>

</html>