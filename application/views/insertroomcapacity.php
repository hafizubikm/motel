<!-- Modal -->
<div class="container">
<div id="roomcapacity" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
		<br>	
			<div class="row">
				<div class="col-md-10">
					<h4>Insert Room Capacity</h4>
				</div>
				<div class="col-md-1">
				<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-times"></i></button>
				</div>

			</div>	
				<br>			
			<?php echo form_open('motel/insert_room_capacity')?>			
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="capacitytitle">Room Capacity Title :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="capacitytitle" name="capacitytitle">
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="quantity">Quantity :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								 <input type="text" class="form-control" id="quantity" name="quantity">
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