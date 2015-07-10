      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  <p class="centered"><a href="#"><img src="<?php echo base_url()?>/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Md. Hafizur Rahman</h5> 
				  <?php // also possible with site_url(controller/function)?>
                  <li class="sub">
					 <?php 
						 echo anchor('motel/index',
						 '<i class="fa fa-dashboard"></i><span>Dashboard</span>')
					 ?>
                  </li>
                  <li class="menu">
					 <?php 
						 echo anchor('motel/bookingformm',
						 '<i class="fa fa-dashboard"></i><span>Booking</span>')
					 ?>
                  </li>
                  <li class="menu">
					 <?php 
						 echo anchor('motel/hoteldetails',
						 '<i class="fa fa-dashboard"></i><span>Hotel Details</span>')
					 ?>
                  </li>
                  <li class="menu">
					 <?php 
						 echo anchor('motel/roomtype',
						 '<i class="fa fa-dashboard"></i><span>Room Type</span>')
					 ?>
                  </li> 
                  <li class="menu">
					 <?php 
						 echo anchor('motel/capacity',
						 '<i class="fa fa-dashboard"></i><span>Capacity Manager</span>')
					 ?>
                  </li>
                  <li class="menu">
					 <?php 
						 echo anchor('motel/room',
						 '<i class="fa fa-dashboard"></i><span>All Rooms</span>')
					 ?>
                  </li>
                  <li class="menu">
					 <?php 
						 echo anchor('motel/pricemanager',
						 '<i class="fa fa-dashboard"></i><span>Price Manager</span>')
					 ?>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>