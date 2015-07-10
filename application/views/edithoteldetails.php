<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
<?php extract($list)?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
					<h3><i class="fa fa-angle-right"></i> Hotel Details <a href="#" data-toggle="modal" data-target="#hotelinsert"  class="btn btn-primary btn-sm">Insert</a></h3>
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Hotel Name</th>
											<th>Country</th>
											<th>City</th>
											<th>Phone No</th>
											<th>Email</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details</th>
										</tr>
									</thead>
									 <tbody>
									<?php 
									$mysqli=new mysqli('localhost','root','','motel');
									$query="select * from hotel_details";
									$rst=$mysqli->query($query);
									while($row=$rst->fetch_row()){
									?>
										<tr>
											<td><?php echo $row[1]?></td>
											<td><?php echo $row[5]?></td>
											<td><?php echo $row[4]?></td>
											<td><?php echo $row[7]?></td>
											<td><?php echo $row[9]?></td>
											<td>
											<a class="btn btn-primary btn-xs" href="#"><i class="fa fa-pencil"></i></a>
											</td>
											<td>
											<a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash-o "></i></a>
											</td>
											<td><a href="#">Details</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Hotel Name</th>
											<th>Country</th>
											<th>City</th>
											<th>Phone No</th>
											<th>Email</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details</th>
										</tr>
									</tfoot>
								</table>
	                  	  </div><!--/content-panel -->
						  <br> 
						  <br> 
	                  </div><!-- /col-md-12 --> 			  
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
<!-- Modal -->
<div class="container">
<div id="hoteledit" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
			<div class="row">
				<div class="col-md-10">
					<h4>Update Hotel Details</h4>
				</div>
				<div class="col-md-1">
					<a class="btn btn-danger btn-xs" href="<?php echo site_url('motel/hoteldetails');?>"><i class="fa fa-times"></i></i></a>
				</div>
				<br>
			</div>
			<?php echo form_open('motel/update_hotel_details')?>				
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="hotel_name">Hotel Name :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-home"></i></span>
								<input type="hidden" name="ehdid" value="<?php echo $hotel_id?>">
								<input type="text" class="form-control" id="hotel_name" name="ehotel_name" value="<?php echo $hotel_name?>">
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
								 <textarea class="form-control" id="address" name="eaddress"><?php echo $address?></textarea>
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
								<input type="text" class="form-control" id="city" name="ecity" value="<?php echo $city?>">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="state">State:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="text" class="form-control" id="state" name="estate" value="<?php echo $state?>">
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
								<input type="text" class="form-control" id="zipcode" name="ezipcode" value="<?php echo $zipcode?>">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="country">Country:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<select class="form-control" id="country" name="ecountry">
									<option value="<?php echo $country?>" selected><?php echo $country?></option>
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
								<input type="text" class="form-control" id="phone" name="ephone" value="<?php echo $phone?>">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="fax">Fax :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-fax"></i></span>
								<input type="text" class="form-control" id="fax" name="efax" value="<?php echo $fax?>">
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
								<input type="text" class="form-control" id="email" name="eemail" value="<?php echo $email?>">
							</div>
						</div>
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-success">
					<i class="fa fa-arrow-circle-o-right"></i> Update
				</button>
			</form>		
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.modal -->
<?php include_once("footer.php")?>