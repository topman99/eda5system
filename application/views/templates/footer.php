<br><br>			    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			    <script>
			      $("#image").change(function(){
			        readURL(this);
			    });

			function readURL(input) {
			        if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            
			            reader.onload = function (e) {
			                $('#profile').attr('src', e.target.result);
			            }
			            
			            reader.readAsDataURL(input.files[0]);
			        }
			    }
			    function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }

function isLetterKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode < 33 || (charCode <= 90 && charCode >= 65) || (charCode <= 122 && charCode >= 97))
        return true;

     return false;
  }

function isAlphaKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode < 33 || (charCode <= 90 && charCode >= 65) || (charCode <= 122 && charCode >= 97) || (charCode <= 57 && charCode >=48))
        return true;

     return false;
  }
			    </script>

			    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>			    
			    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
			   <div class="col-md-12">
			<div id="footer">
Direct Agent 5, Inc. &copy; <?php echo date("Y"); ?> - <a href="https://da5.com.ph/des/privacy_policy.php" style="color:white;font-size:14px;">Privacy Policy</a> | 
<a href="https://da5.com.ph/des/terms.php" style="color:white;font-size:14px;">Terms of Use</a> | All rights reserved </div>
		</div>
	</body>
</html>