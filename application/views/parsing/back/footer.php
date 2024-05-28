
</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Catur Cemeyka</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Bootstrap core JavaScript-->
	<script src="assets/back/vendor/jquery/jquery.min.js"></script>
	<script src="assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="assets/back/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="assets/back/js/sb-admin-2.min.js"></script>

	
	<!-- Page level custom scripts -->
	<script src="assets/back/js/demo/datatables-demo.js"></script>
	
	<script src="assets/back/vendor/bootstrap-chosen/js/bootstrsp-choosen.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="assets/back/summernote/summernote-bs4.min.js"></script>

    <!-- Page level plugins -->
	<script src="assets/back/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/back/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript">
			 $(function() {
				$('.chosen-select').chosen();
				$('.chosen-select-deselect').chosen({ allow_single_deselect: true });
			  });


			  $(document).ready(function() {
                 $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                placeholder: 'Isi',
                tabsize: 2,
                height: 300,
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0]);
                    },
                    onMediaDelete: function(target) {
                        deleteImage(target[0].getAttribute('src'));
                    }
                }
            });

            

            function uploadImage(file) {
                var formData = new FormData();
                formData.append('file', file);
                $.ajax({
                    url: '<?php echo base_url() ?>pagecontrol/page/upload_image',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var imageUrl = JSON.parse(response).url;
                        $('#summernotep1').summernote('insertImage', imageUrl);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {
                        src: src
                    },
                    type: "POST",
                    url: '<?php echo base_url() ?>pagecontrol/page/delete_image',
                    cache: false,
                    success: function(response) {
                        console.log("Image deleted successfully");
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });

          $(".summernote").summernote()
			  $('.dropdown-toggle').dropdown()

	</script>

</body>

</html>