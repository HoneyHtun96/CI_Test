
<div class="container-fluid" id="user_registers">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Register Page</h1>
    <div id="add_expense_category">
      <form class="user" method="POST" action="<?php echo base_url('user_registers/add')?>">

        <div class="form-group">
            <input type="file" class="form-control col-4 offset-4" name="photo" id="user" placeholder="Choose Photo">
          </div>

          <div class="form-group">
            <input type="name" class="form-control col-4 offset-4" name="name" id="user" placeholder="Enter Name...">
          </div>

          <div class="form-group">
            <input type="gender" class="form-control col-4 offset-4" name="gender" id="user" placeholder="Enter Gender...">
          </div>

          <div class="form-group">
            <input type="email" class="form-control col-4 offset-4" name="email" id="user" placeholder="Enter email...">
          </div>

          <div class="form-group">
            <input type="password" class="form-control col-4 offset-4" name="password" id="user" placeholder="Enter Password...">
          </div>

          <div class="form-group">
              <input type="submit" class="btn-info form-control col-4 offset-4" id="user" value="Register">
          </div>               
          
      </form>   
  </div>

  <!-- <table class="table">
    <thead>
      <tr>
        <th>NO.</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
      <?php 
      $i=1;
      foreach ($user_registers as $register) {
        $id = $register->user_id; ///// id means in table name
        $photo = $register->user_profile;
        $name = $register->user_name;
        $gender = $register->user_gender;
        $email = $register->user_email;
        $password = $register->user_password;



        echo "<tr><td>$i</td>
        <td>$photo</td>
        <td>$name</td>
        <td>$gender</td>
        <td>$email</td>
        <td>$password</td>
        <td>
        <button class='btn btn-info edit' data-id=$id>Edit</button>
        </td>
        <td>
        <form action=".base_url('user_registers/delete')." method='POST' onsubmit='return confirm(\"Are you Sure?\") '>
        <input type='hidden' name='id' value=$id>
        <input type='submit' value='Delete' class='btn btn-danger'>

        </form>
        </td></tr>";
        $i++;
      }
      ?>
    </tbody>
    
  </table>
 -->
</div>