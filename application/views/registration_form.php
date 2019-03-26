<!--docktype html-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/js/bootstrap.min.js"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>static/css/registration_form.css"/>
        <link rel ="stylesheet"href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left">MAR Registration Form</h1>
                    <p class ="text-left">
                        This is the official site for submitting mendatory additional required marks which you collect during your semester.<br>
                        Process for submitting marks:<br>
                        1. Login with your registered email and password.<br>
                        2. Check if your name is showing on the homepage along with your other infos.<br>
                        3. select the sem from dropbox on which you are eligible.<br>
                        4. You can't select multiple sem on single dropdown.<br>
                        5. after selecting sems you have to submit your certificates of those fields in form of jpg.<br>
                        6. And that's all.You're done.       
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="row col-md-3">
                        <div class="col-md-6">
                            <h3 class="text-left ">Registration Form</h3>
                        </div>
                        <div class="col-md-6">
                            <i class="fa fa-pencil text-white"aria-hidden="true"></i>
                        </div>
                    </div> 
                    <hr>
                    <!--another colum for text box and label-->
                    <form id="registration_submit" method="post" action="../registration_form/submit"><!--id and action are in same name-->
                        <div class="row col-md-12">
                            <label class="label col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input type="Name" class="form-control" name="name"placeholder="name">
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <label class="label col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input type="Email" class="form-control" name="email"placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="Password" class="form-control" name="password"placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label">Registration No.</label>
                            <div class="col-md-10">
                                <input type="registration_no" class="form-control" name="registration_no"placeholder="reg no.">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label">University roll no.</label>
                            <div class="col-md-10">
                                <input type="roll_no" class="form-control" name="roll_no"placeholder="roll_no">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2 control-label">Department</label>
                            <div class="col-md-10">
                                <input type="dept" class="form-control" name="dept"placeholder="dept">
                                <input type="checkbox"><small>Remember me</small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="" class="btn btn-danger">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>