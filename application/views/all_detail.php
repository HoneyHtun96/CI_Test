<div class="container-fluid" id="user_registers">
	<h2>This is all detail page</h2>

	<div class="row courses_inner my-5">
    <?php
        foreach($all_detail as $detail)
               
        $photo = $detail->user_profile;
        $name = $detail->user_name;
        $gender = $detail->user_gender;
        $email = $detail->user_email;
        $jobtitle = $detail->userdetail_jobtitle;
        $dob =$detail->userdetail_dob;
        $phone = $detail->userdetail_phone;
        $address = $detail->userdetail_address;
        $description = $detail->userdetail_description;
        $skillname = $detail->skill_name;
        
        $position = $detail->experience_position;
        $companyname = $detail->experience_companyname;
        $startdate = $detail->experience_startdate;
        $enddate = $detail->experience_enddate;
        $expdescription = $detail->experience_description;

        $projname = $detail->project_name;
        $projcover = $detail->project_cover;
        $projdescri =$detail->project_description;

        $languagename = $detail->language_name;

         
          ?>      
        <div class="col-md-12 my-2">
            <div class="grid_item wd100">
                <div class="courses_item">
                    <form>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $photo;?></p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $name;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Gender:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $gender;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $email;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Job Title</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $jobtitle;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Date of Birth:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $dob;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Phone no:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $phone;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $address;?></p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $description;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Skills</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $skillname;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Experience Position</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $position;?>,  <?php echo $companyname;?>, <?php echo $startdate;?>, <?php echo $enddate;?> </p>
                        </div>
                      </div>

                      <!-- <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Company Name</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $companyname;?> </p>
                        </div>
                      </div> -->

                      <!-- <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Start Date</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $startdate;?> </p>
                        </div>
                      </div> -->

                      <!-- <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">End Date</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $enddate;?> </p>
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Experience Description</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $expdescription;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Project Name</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $projname;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Project Cover</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $projcover;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Project Description</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $projdescri;?> </p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Language</label>
                        <div class="col-sm-9">
                          <p class="h6 my-2"><?php echo $languagename;?> </p>
                        </div>
                      </div>

                        
                    </form>
                </div>
            </div>
        </div>
        
        
   
    </div>

	
</div>