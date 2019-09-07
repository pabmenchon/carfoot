		<div id="modal-newproject" class="modal fade custom-modal-tabs">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header has-border">
						<h5 class="modal-title">New Project</h5>
						<button type="button" class="close custom-modal__close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="ua-icon-modal-close"></span>
						</button>
					</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="input-device">New Project Name</label>
								<input type="hidden" name="new_proj_url" value="<?php echo site_url('projects/insert_project'); ?>">
								<input type="hidden" name="proj_redirect" value="<?php echo site_url('materials_construction'); ?>">
								<input type="text" placeholder="Enter New Project Name..." class="form-control" name="proj_name" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="output-device">Date</label>
								<input class="flatpickr form-control" id="flatpickr" type="text" placeholder="Select Date..." name="proj_date" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer modal-footer--center">
					<button type="button" class="btn btn-outline-info" data-dismiss="modal" aria-label="Close">Cancel</button>
					<button type="button" class="btn btn-info" id="save_project_btn">Save</button>
				</div>
			</div>
		</div>	
	
	</div>
	<?php if($page_no != 4){ ?>
	</form>
	<?php } ?>
	
	<script>
		$('#save_project_btn').on("click", function () { 
			if($("input[name='proj_name']").val() == ""){
				alert("Enter New project name!");
				return;
			}
			
			$.ajax({
				url: $("input[name='new_proj_url']").val(), 
				type: "POST",
				data: { "proj_name":$("input[name='proj_name']").val(), "proj_date":$("input[name='proj_date']").val() },
				success: function(result){ 
					if(result > 0) alert("Success Project Insert.");
					$('input[name="project_id"]').val("");
					window.location.href = window.location.href;
				}
			});
			
		});
		$('#btn-delete-project').on("click", function () { 
			
			var r = confirm("Are you sure to delete this project ?");
			if (r==true) {
				
				$.ajax({
					url: '<?php echo site_url('projects/delete_project'); ?>', 
					type: "POST",
					data: { "proj_id":$("#proj_select").val() },
					success: function(result){ 
						if(result > 0) alert("Success Project Deleted.")
						else alert("Project not exist or error while delete project");
						window.location.reload();
					}
				});
			}
			
		});
	</script>
	
	<script src="<?php echo base_url(); ?>assets/vendor/popper/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/select2/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/simplebar/simplebar.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/text-avatar/jquery.textavatar.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/tippyjs/tippy.all.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/flatpickr/flatpickr.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/wnumb/wNumb.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/preview/datepicker.min.js"></script>

</body>
</html>