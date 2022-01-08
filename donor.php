<?php require 'welcome.php'; ?>


<section class="contact section" id="donor">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4 pb-2">
                        DONATE BLOOD
                    </h2>

                    <form action="donor_insert.php" method="post" class="contact-form webform" data-aos-delay="400" >

                        <input type="text" name="username" class="form-control" placeholder="Name">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <input type="text" name="age" class="form-control" placeholder="Age" required>
                        <select name="gender" class="form-control" required>
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            
               <select name="search" class="form-control">
               <option>Select Blood Group:</option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select>
                        <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>

                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <img src="images/blooddoctor.jpeg" style="width:500px; height:610px;">
                  
                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>
