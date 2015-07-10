<?php include_once("header.php")?> 
<?php include_once("sidebar.php")?>
<?php extract($list)?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
					<h3><i class="fa fa-angle-right"></i> Room Capacity <a href="#" data-toggle="modal" data-target="#hotelinsert"  class="btn btn-primary btn-sm">Insert</a></h3>
					
	                  <div class="col-md-12">
	                  	  <div class="content-panel" style="padding:5px">
								<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Room Capacity Title</th>
											<th>Quantity</th>
											<th>Edit</th>
											<th>Del</th>
											<th>Details View</th>
										</tr>
									</thead>
									
									 <tbody>
									<?php 
									$mysqli=new mysqli('localhost','root','','motel');
									$query="select * from capacity";
									$rst=$mysqli->query($query);
									while($row=$rst->fetch_row()){
									?>
										<tr>
											<td><?php echo $row[1]?></td>
											<td><?php echo $row[2]?></td>
											<td>
												<a class="btn btn-primary btn-xs" href="#"><i class="fa fa-pencil"></i></a>
											</td>
											<td>
											<a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash-o "></i></a>
											</td>
											<td><a href="#">Details View</a></td>
										</tr>
									 <?php } ?>
									</tbody>
									
									<tfoot>
										<tr>
											<th>Room Capacity Title</th>
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
<!-- Modal -->
<div class="container">
<div id="editcapacity" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-12"  style="margin:20px">
			<div class="row">
				<div class="col-md-10">
					<h4>Update Room Capacity</h4>
				</div>
				<div class="col-md-1">
					<a class="btn btn-danger btn-xs" href="<?php echo site_url('motel/capacity');?>"><i class="fa fa-times"></i></i></a>
				</div>
				<br>
			</div>		
			<?php echo form_open('motel/update_room_capacity')?>			
				<div class="row">
					<div class="col-md-11">
						<div class="form-group has-success has-feedback">
							<label class="control-label" for="capacitytitle">Room Capacity Title :</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								<input type="hidden" name="ehdid" value="<?php echo $capacity_id?>">
								<input type="text" class="form-control" id="capacitytitle" name="ecapacitytitle" value="<?php echo $capacity_title?>">
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
								 <input type="text" class="form-control" id="quantity" name="equantity" value="<?php echo $quantity?>">
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