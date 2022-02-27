
<div class="container-fluid" id="user_registers">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User Project Page</h1>
  	<div id="add_expense_category">
	   	<form class="user" method="POST" action="<?php echo base_url('user_projects/add')?>">

	   		<div class="form-group">
	          <input type="text" class="form-control col-4 offset-4" name="name" id="user" placeholder="Enter name ">
	        </div>

	        <div class="form-group">
	          <input type="file" class="form-control col-4 offset-4" name="cover" id="user" placeholder="Enter cover">
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