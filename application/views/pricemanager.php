<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
					<h3><i class="fa fa-angle-right"></i> Room Price Manager <a href="#" data-toggle="modal" data-target="#hotelinsert"  class="btn btn-primary btn-sm">Insert</a></h3>
					
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Room ID</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details View</th>
										</tr>
									</thead>
									
									 <tbody>
									 <?php for ($i=0; $i<100; $i++){?>
										<tr>
											<td>Room ID</td>
											<td>Start Date</td>
											<td>End Date</td>
											<td>
												<button data-toggle="modal" data-target="#hotelinsert"  class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i></button>
											</td>
											<td>
												<button  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
											</td>
											<td><a href="#">Details View</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Room ID</th>
											<th>Start Date</th>
											<th>End Date</th>
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
	 <?php include_once("insertpricemanager.php")?>
	 <?php include_once("footer.php")?>