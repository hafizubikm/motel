<!-- Modal -->
<div class="container">
<div id="hotelinsert" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
		<h4>Insert Price Manager</h4><br>	   
			<form class="" role="form">				
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="inputGroupSuccess1">Room ID :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="0">Select Room ID</option>
										<option value="1">2001</option>
										<option value="1">2002</option>
										<option value="1">2003</option>
										<option value="1">2004</option>
										<option value="1">2005</option>
										<option value="1">2006</option>
									</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="inputGroupSuccess1">Start Date :</label>
								<span class="input-group-addon">
								<input type="text" id="startdate" class="form-control datepicker"/>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="inputGroupSuccess1">End Date :</label>
								<span class="input-group-addon">
								<input type="text" id="enddate" class="form-control datepicker"/>
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