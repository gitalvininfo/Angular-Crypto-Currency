<!-- New CXR-->
<?php
require 'config.php';
$query = $conn->query("SELECT * FROM `patient` ORDER BY `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="new_cxr<?php echo $fetch['patient_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="defModalHead"><strong>Chest X-ray Findings</strong></h4>
			</div>
			<form role="form" id="jvalidate" class="form-horizontal" action="actions/add_cxr.php" method="post" onsubmit="return confirm('Are you sure you want to add this Chest X-ray Findings?');">
				<div class="modal-body">
					<div class="row">
						<div class="panel-body">
							<div class="col-md-12">
								<h5 class="push-up-1">Chest X-ray Findings</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
										<input data-toggle="tooltip" data-placement="bottom" title="CXR-Findings" type="text" class="form-control" name="cxr_findings" required/>
									</div>
								</div>
								<h5 class="push-up-1">Date of Examination</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="Date of Exam" type="text" class="form-control datepicker"  name="date_of_exam" required/>
									</div>
								</div>
								<h5 class="push-up-1">TB District Committee</h5>
								<div class="form-group ">
									<div class="col-md-12 col-xs-12">
										<input data-toggle="tooltip" data-placement="bottom" title="TBDC" type="text" class="form-control" name="tbdc" required/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info" name="add_cxr"><span class="fa fa-check"></span>Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
									 }
$conn->close();
?> 
<!-- End New CXR-->
