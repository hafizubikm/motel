			<h3><i class="fa fa-angle-right"></i> Habitaciones</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
				<?php foreach($rooms as $value){?>
					<button  href="" id="singlebutton" data-toggle="modal" data-target="#booking" name="singlebutton" class="btn btn-primary btn-sm"><?php echo $value->number_of_room ?></button>
				<?php }?>
          		</div>
          	</div>