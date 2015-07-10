<!-- Modal -->
<div class="container">
<div id="insertroom" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
			<div class="row">
				<div class="col-md-10">
					<h4>Insert Room</h4>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-times"></i></button>
				</div>
			</div>	
		<br>	   
			<?php echo form_open('motel/insert_room')?>			
				<div class="row">
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="roomnumber">Room's Number :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="roomnumber" name="roomnumber" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="roomtypeid">Room Type :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<select class="form-control" id="roomtypeid" name="roomtypeid" required>
									<option value="">Select Type</option>
									<?php foreach($roomtype as $value):?>
								<option value="<?php echo $value->room_type_id?>"><?php echo $value->room_type_title?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="capacityid">Capacity :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<select class="form-control" id="capacityid" name="capacityid" required>
									<option value="">Select Capacity</option>
									<?php foreach($capacity as $value):?>
								<option value="<?php echo $value->capacity_id?>"><?php echo $value->capacity_title?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					</div>
				</div>		
				<button type="submit" class="btn btn-info">Insert</button>
			</form>		
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.modal -->