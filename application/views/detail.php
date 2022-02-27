<div class="container-fluid" id="user_registers">

	
		<h1 class="mb-4">Detail Page</h1>
        <div class="row mb-3">
            <div class="col-lg-2">
                <h4>No</h4>
            </div>
            <div class="col-lg-2">
                <h4>Name</h4>
            </div>
            <div class="col-lg-2">
                <h4>Email</h4>
            </div>
            <div class="col-lg-2">
                <h4>Detail</h4>
            </div>
            <div class="col-lg-2">
                <h4>Delete</h4>
            </div>            
        </div>

        <?php 
          $i=1;
          foreach ($user_registers as $register) {
            $id = $register->user_id; ///// id means in table name
            $photo = $register->user_profile;
            $name = $register->user_name;
            $gender = $register->user_gender;
            $email = $register->user_email;
            $password = $register->user_password;
        ?>        

        <div class="row">
            <div class="col-lg-2">
                <?php echo $i; ?>
            </div>
            <div class="col-lg-2">
                <?php echo $name; ?>
            </div>
            <div class="col-lg-2">
                <?php echo $email; ?>
            </div>
            <div class="col-lg-2">
                <a href="<?php echo base_url('all_detail/'.$id) ?>"><button class='btn btn-info edit' data-id=$id>Detail</button></a>
            </div>
            <div class="col-lg-2">
                <form action=".base_url('user_registers/delete')." method='POST' onsubmit='return confirm(\"Are you Sure?\") '>
                <input type='hidden' name='id' value=$id>
                <input type='submit' value='Delete' class='btn btn-danger'>
            </div>
        </div>
        
        <?php $i++; } ?>   
	
	
</div>