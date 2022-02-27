
<div class="container-fluid" id="user_registers">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">User Skills Page</h1>
    <div id="add_expense_category">
      <form class="user" method="POST" action="<?php echo base_url('user_skills/add')?>">

          <div class="form-group">
            <input type="name" class="form-control col-4 offset-4" name="name" id="user" placeholder="Enter Skill Name...">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control col-4 offset-4" name="userid" id="user" placeholder="Enter Password...">
          </div>

          <div class="form-group">
              <input type="submit" class="btn-info form-control col-4 offset-4" id="user" value="Register">
          </div>
                
          
      </form>   
  </div>

 

</div>