      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              www.itpointbd.com
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/jqueryui.js" type="text/javascript"></script>
	
    <script type="text/javascript" src="<?php echo base_url()?>/assets/js/moment.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/js/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/js/bootstrap.file-input.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url()?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
// for datatable
	$(document).ready(function() {
    $(window).load(function(){
        $('#hoteledit').modal('show');
        $('#editcapacity').modal('show');
    });
	
	$('#hoteledit').modal({
		backdrop: 'static', //for static model 
		keyboard: false  
	})
	
	$('#editcapacity').modal({
		backdrop: 'static', //for static model 
		keyboard: false  
	})
	
		$('.example').dataTable();
//for bootstraprangedatepicker
	  $('#reservationtime').daterangepicker({
		timePicker: true,
		timePickerIncrement: 10,
		format: 'MM/DD/YYYY h:mm A'
	  }, function(start, end, label) {
		console.log(start.toISOString(), end.toISOString(), label);
	  });
	  
	});
	

//for calender
	$(function() {
		$( ".datepicker" ).datepicker({
			numberOfMonths: 2,
			showButtonPanel: true
		});
	});
	
	
	//custom select box
      $(function(){
          $('select.styled').customSelect();
      });
	</script>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#imgInp").change(function(){
    readURL(this);
});
$('input[type=file]').bootstrapFileInput();
</script>

</body>
</html>
