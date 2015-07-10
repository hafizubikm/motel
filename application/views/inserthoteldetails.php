<!-- Modal -->
<div class="container">
<div id="hotelinsert" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
			<div class="row">
				<div class="col-md-10">
					<h4>Insert Hotel Details</h4>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-times"></i></button>
				</div>

			</div>	
				<br>			
			<?php echo form_open('motel/insert_hotel_details')?>
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="hotel_name">Hotel Name :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								<input type="text" class="form-control" id="hotel_name" name="hotel_name">
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="address">Address:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								 <textarea class="form-control" id="address" name="address"></textarea>
							</div>
						</div>
					</div>
				</div>		
				<div class="row">
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="city">City:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="city" name="city">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="state">State:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="state" name="state">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="zipcode">Zip Code:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="zipcode" name="zipcode">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="country">Country:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<select class="form-control" id="country" name="country">
									<option value="Bangladesh">Bangladesh</option>
									<option value="India">India</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Vutan">Vutan</option>
									<option value="Nepal">Nepal</option>
									<option value="America">America</option>
									<option value="England">England</option>
									<option value="Afganistan">Afganistan</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="phone">Phone :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
								<input type="text" class="form-control" id="phone" name="phone">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="fax">Fax :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-fax"></i></span>
								<input type="text" class="form-control" id="fax" name="fax">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="email">Email Address :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
								<input type="text" class="form-control" id="email" name="email">
							</div>
						</div>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-success">
					<i class="fa fa-arrow-circle-o-right"></i> Insert
				</button>
			</form>		
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.modal -->