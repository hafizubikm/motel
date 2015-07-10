<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
					<h3><i class="fa fa-angle-right"></i> Room <a href="#" data-toggle="modal" data-target="#insertroom"  class="btn btn-primary btn-sm">Insert</a></h3>
					
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Room's Number</th>
											<th>Room Type Title</th>
											<th>Capacity</th>
											<th>Quantity</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details View</th>
										</tr>
									</thead>
									
									 <tbody>
									 <?php foreach($rooms as $value){?>
										<tr>
											<td><?php echo $value->number_of_room?></td>
											<td><?php echo $value->room_type_title?></td>
											<td><?php echo $value->capacity_title?></td>
											<td><?php echo $value->quantity?></td>
											<td>
												<button data-toggle="modal" data-target="#insertroom"  class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i></button>
											</td>
											<td>
	<a  class="btn btn-danger btn-xs" href="<?php echo site_url('motel/del_room/'.$value->room_no);?>"><i class="fa fa-trash-o "></i></a>
											</td>
											<td><a href="#">Details View</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Room's Number</th>
											<th>Room Type</th>
											<th>Capacity</th>
											<th>Quantity</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details View</th>
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
	 <?php include_once("insertroom.php")?>
	 <?php include_once("footer.php")?>