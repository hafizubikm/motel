<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
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
									<?php foreach ($hoteldetails as $value){?>
										<tr>
											<td><?php echo $value->hotel_name?></td>
											<td><?php echo $value->country?></td>
											<td><?php echo $value->city?></td>
											<td><?php echo $value->phone?></td>
											<td><?php echo $value->email?></td>
											<td>
											<a class="btn btn-primary btn-xs" href="<?php echo site_url('motel/hoteledit/'.$value->hotel_id);?>"><i class="fa fa-pencil"></i></a>
											</td>
											<td>
											<a class="btn btn-danger btn-xs" href="<?php echo site_url('motel/del_hotel_details/'.$value->hotel_id);?>"><i class="fa fa-trash-o "></i></a>
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
	 <?php include_once("inserthoteldetails.php")?> 
	 <?php include_once("footer.php")?>