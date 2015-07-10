<!-- Modal -->
<div class="container">
<div id="hotelinsert" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
			<div class="row">
				<div class="col-md-10">
					<h4>Insert Room Type</h4>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-times"></i></button>
				</div>
			</div>	
				<br>		
			<?php echo form_open_multipart('motel/insert_room_type');?>			
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="roomtypetitle">Room Type Title :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="roomtypetitle" name="roomtypetitle" required/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="roomtypeimage">Room Type Image :</label>
							<div class="input-group">
								<span class="input-group-addon">
								 <input type='file' id="imgInp" title="Add Image" class="btn btn-primary" name="userfile"/>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="inputGroupSuccess1">Selected Image :</label>
							<div class="input-group">
								<span class="input-group-addon">
								 <img id="blah" src="<?php echo base_url('imagess/notavailable.png')?>" class="img-responsive" alt="Images" />
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