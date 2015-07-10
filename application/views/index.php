<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
			<?php include_once("rooms.php")?>
					<h3><i class="fa fa-angle-right"></i> Reservaciones</h3>
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</thead>
									
									 <tbody>
									 <?php for ($i=0; $i<100; $i++){?>
										<tr>
											<td><?php echo "100000".+$i?></td>
											<td>Hafizur Rahman</td>
											<td>Check In</td>
											<td>Check Out</td>
											<td><?php echo "$"."320800".+$i?></td>
											<td>10/12/2014</td>
											<td><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></td>
											<td><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
											<td><a href="viewdetails.php">View Details</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</tfoot>
								</table>
	                  	  </div><!--/content-panel -->
						  <br> 
						  <br> 
	                  </div><!-- /col-md-12 -->

					<h3><i class="fa fa-angle-right"></i>Today Check-In List</h3>
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</thead>
									
									 <tbody>
									 <?php for ($i=0; $i<8; $i++){?>
										<tr>
											<td><?php echo "100000".+$i?></td>
											<td>Hafizur Rahman</td>
											<td>Check In</td>
											<td>Check Out</td>
											<td><?php echo "$"."320800".+$i?></td>
											<td>10/12/2014</td>
											<td><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></td>
											<td><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
											<td><a href="viewdetails.php">View Details</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</tfoot>
								</table>
	                  	  </div><!--/content-panel -->
						  <br> 
						  <br> 
	                  </div><!-- /col-md-12 -->
					  
					<h3><i class="fa fa-angle-right"></i>Today Check-Out List</h3>
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</thead>
									
									 <tbody>
									 <?php for ($i=0; $i<5; $i++){?>
										<tr>
											<td><?php echo "100000".+$i?></td>
											<td>Hafizur Rahman</td>
											<td>Check In</td>
											<td>Check Out</td>
											<td><?php echo "$"."320800".+$i?></td>
											<td>10/12/2014</td>
											<td><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></td>
											<td><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
											<td><a href="viewdetails.php">View Details</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Booking ID</th>
											<th>Name</th>
											<th>Check In</th>
											<th>Check Out</th>
											<th>Amount</th>
											<th>Booking Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>View Details</th>
										</tr>
									</tfoot>
								</table>
	                  	  </div><!--/content-panel -->
	                  </div><!-- /col-md-12 -->
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <!--main content end-->
	 <?php include_once('popupbooking.php')?>
	 <?php include_once("footer.php")?> 