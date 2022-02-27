
<div class="container-fluid" id="user_registers">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User Detail Page</h1>
  	<div id="add_expense_category">
	   	<form class="user" method="POST" action="<?php echo base_url('user_details/add')?>">

	   		<div class="form-group">
	          <input type="text" class="form-control col-4 offset-4" name="jobtitle" id="user" placeholder="Enter jobtitle">
	        </div>

	        <div class="form-group">
	          <input type="date" class="form-control col-4 offset-4" name="dob" id="user" placeholder="Enter date of birth..">
	        </div>

	        <div class="form-group">
	          <input type="phoneno" class="form-control col-4 offset-4" name="phone" id="user" placeholder="Enter phone no...">
	        </div>

	        <div class="form-group">
	          <textarea class="form-control col-4 offset-4" name="address" id="user" placeholder="Enter address">        	
	          </textarea>
	        </div>

	        <div class="form-group">
	          <textarea class="form-control col-4 offset-4" name="description" id="user" placeholder="Enter scription">     	
	          </textarea>
	        </div>

	        <div class="form-group">
	          <input type="text" class="form-control col-4 offset-4" name="userid" id="user" placeholder="Enter userid">
	        </div>

	        <div class="form-group">
	            <input type="submit" class="btn-info form-control col-4 offset-4" id="user" value="Register">
	        </div> 
	                     
	        
	    </form>	  
	</div>

 

</div>