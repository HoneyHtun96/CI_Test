
<div class="container-fluid" id="user_registers">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User Experience Page</h1>
  	<div id="add_expense_category">
	   	<form class="user" method="POST" action="<?php echo base_url('user_experiences/add')?>">

	   		<div class="form-group">
	          <input type="text" class="form-control col-4 offset-4" name="position" id="user" placeholder="Enter position">
	        </div>

	        <div class="form-group">
	          <input type="text" class="form-control col-4 offset-4" name="companyname" id="user" placeholder="Enter company name">
	        </div>

	        <div class="form-group">
	          <input type="date" class="form-control col-4 offset-4" name="startdate" id="user" placeholder="Enter startdate">
	        </div>

	        <div class="form-group">
	          <input type="date" class="form-control col-4 offset-4" name="enddate" id="user" placeholder="Enter enddate">
	        </div>

	        <div class="form-group">
	          <textarea class="form-control col-4 offset-4" name="description" id="user" placeholder="Enter description">     	
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