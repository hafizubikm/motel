<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
				<h3><i class="fa fa-angle-right"></i> Booking Form</h3>
				<form class="" role="form" method="post">
					<div class="row">
						<div class="col-md-5">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="reservationtime">Choose your check-in and check-out times :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" name="reservation" id="reservationtime" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM" />
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="checkin"> Check-in Date:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" id="checkin" name="checkin" class="form-control datepicker"/>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="checkout"> Check-out Date:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" id="checkout" name="checkout" class="form-control datepicker"/>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
					<div class="col-md-11">
					<div class="row">
					<div class="form-group has-success has-feedback">
						<div class="col-md-11">
							<label class="control-label" for="roomtype">Room Type :</label>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="deluxe">Deluxe :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="deluxe" name="deluxe">
										<option value="0">Number of Room</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Premium :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="0">Number of Room</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Crown :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="0">Number of Room</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Imperial :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="0">Number of Room</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
					</div>


					
					
					<div class="row">
						<div class="col-md-11">
							<div class="row">
								<div class="form-group has-success has-feedback">
									<div class="col-md-11">
										<label class="control-label" for="inputGroupSuccess1">Room Type :</label>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Deluxe</label></center>
										<input type="checkbox" name="roomtype" value="PayPal" class="form-control" id="inputGroupSuccess1">
										<select class="form-control" id="inputGroupSuccess1" >
											<option value="0">Number of Room</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Premium</label></center>
										<input type="checkbox" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
										<select class="form-control" id="inputGroupSuccess1" >
											<option value="0">Number of Room</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Crown</label></center>
										<input type="checkbox" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
										<select class="form-control" id="inputGroupSuccess1" >
											<option value="0">Number of Room</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Imperial</label></center>
										<input type="checkbox" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
										<select class="form-control" id="inputGroupSuccess1" >
											<option value="0">Number of Room</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div><!--end roomtype checkbox-->
					
					
					<br>
					
					
					<div class="row">
						<div class="col-md-11">
							<div class="row">
								<div class="form-group has-success has-feedback">
									<div class="col-md-11">
										<label class="control-label" for="inputGroupSuccess1">Using The Room :</label>
									</div>
									<div class="col-md-2">
										<center><label for="inputGroupSuccess1">Hourly</label></center>
										<input type="radio" name="roomtype" value="PayPal" class="form-control" id="inputGroupSuccess1">
										<div class="input-group">
											<span class="input-group-addon">Hours</i></span>
											<input type="text" id="hour" class="form-control"/>
										</div>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Day/Night</label></center>
										<input type="radio" name="roomtype" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
										<div class="input-group">
											<span class="input-group-addon">Day/Night</i></span>
											<input type="text" id="daynight" class="form-control"/>
										</div>
									</div>
									<div class="col-md-4">
										<center><label for="inputGroupSuccess1">Week</label></center>
										<input type="radio" name="roomtype" value="PayPal" class="form-control" id="inputGroupSuccess1"/>
										<input type="checkbox" value="mon" /> Mon |
										<input type="checkbox" value="Tue" /> Tue |
										<input type="checkbox" value="wed" /> Wed |
										<input type="checkbox" value="thu" /> Thu |
										<input type="checkbox" value="fri" /> Fri |
										<input type="checkbox" value="sat" /> Sat |
										<input type="checkbox" value="sun" /> Sun |
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Spcial</label></center>
										<input type="radio" name="roomtype" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
									</div>
								</div>
							</div>
						</div>
					</div><!--end roomtype checkbox-->
					
					<br>
					<div class="row"><div class="col-md-11"><hr></div></div>
					<br>
					
					<div class="row">
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Title :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="Mr.">Mr.</option>
										<option value="Ms.">Ms.</option>
										<option value="Mrs.">Mrs.</option>
										<option value="Miss.">Miss.</option>
										<option value="Dr.">Dr.</option>
										<option value="Prof.">Prof.</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">First Name :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Last Name :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-md-11">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Address:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									 <textarea class="form-control" id="address" name="address"></textarea>
								</div>
							</div>
						</div>
					</div>		
					<div class="row">
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">City:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">State:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Postal Code:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Country:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<select class="form-control" id="inputGroupSuccess1" >
										<option value="mr">Bangladesh</option>
										<option value="mr">India</option>
										<option value="mr">Pakistan</option>
										<option value="mr">Vutan</option>
										<option value="mr">Nepal</option>
										<option value="mr">America</option>
										<option value="mr">England</option>
										<option value="mr">Afganistan</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Phone :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Fax :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Email Address :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" id="inputGroupSuccess1">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-11">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">Additional Request :</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									 <textarea class="form-control" id="address" name="address"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-11">
							<div class="row">
								<div class="form-group has-success has-feedback">
									<div class="col-md-11">
										<label class="control-label" for="inputGroupSuccess1">Payment Method :</label>
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">PayPal</label></center>
										<input type="radio" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1">
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Credit Card</label></center>
										<input type="radio" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Manual: Pay on Arrival</label></center>
										<input type="radio" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
									</div>
									<div class="col-md-3">
										<center><label for="inputGroupSuccess1">Online</label></center>
										<input type="radio" name="payment" value="PayPal" class="form-control" id="inputGroupSuccess1"> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-11">
							<div class="form-group has-success has-feedback">
								<label class="control-label" for="inputGroupSuccess1">I agree with the <a href="#">Terms & Conditions.</a></label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-success active">
										<input type="checkbox" autocomplete="off" checked>
										<span class="glyphicon glyphicon-ok"></span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Book Now</button>
				</form>		  
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
	 <?php include_once("footer.php")?> 