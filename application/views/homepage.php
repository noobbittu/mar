<!--docktype html-->
<html>
    <head>
        <meta charset = "utf-8">
        <script rel="text/javascript" text="text/javascript" href="<?php echo base_url() ?>static/js/jquery.min.js"></script>
        <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css" ><!--autoload.php and config.php on both file work has to be done only then codeigniter can understand the base url-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/homepage.css">
        <script rel="text/javascript" text="text/javascript" href="<?php echo base_url() ?>static/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body class="container-fluid">
        <div 1 class="row border border-dark justify-content-center font-weight-bold">
            <p>Maulana Abul Kalam Azad University of Technology, West Bengal<br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Record of Activities for Mendetory Additional Requirment
            </p>
           <!-- <pre>Maulana Abul Kalam Azad University of Technology, West Bengal
 Record of Activities for Mendetory Additional Requirment 
            </pre>-->

        </div>
        <form method="get" action="submit.php">
            <div 2 class="row border border-dark">

                <div class="col-8 border border-dark font-weight-bold">
                    <p>College Name (College Code): Academy of technology(169)</p>  
                </div>
                <div department class="col-4 border border-dark text-center font-weight-bold">
                    <p>Department :<input type="text" name="dept.name"></p>
                </div>
            </div>
            <div 3 class="row  p-0">
                <div class="col-4 border border-dark text-center font-weight-bold ">
                    <p>Student Name :<input type="text" name="student_name"></p>
                </div>
                <div class="col-4 border border-dark text-center font-weight-bold">
                    <p>University Roll NO. :<input type="text" name="roll_no"></p>
                </div>
                <div class="col-4 border border-dark text-center font-weight-bold">
                    <p>Registration No. :<input type="text" name="reg_no"></p>
                </div>
            </div>
            <div 4 class="row ">
                <div class="col-1 border border-dark text-center font-weight-bold"><p>SI No.</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Activity</p></div>
                <div class="col-1 border border-dark text-center font-weight-bold"><p>points</p></div>
                <div class="col-1 border border-dark p-2 font-weight-bold"><p>Max Allowed Points</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center font-weight-bold"><p>Points Earned</p></div>
                    <div class="col border border-dark text-center font-weight-bold"><p>Enter Marks Into Dropdown</p></div>
                </div>
            </div>
            <div 5 class="row">
                <div class="col-1 border border-dark text-center "><p>1</p></div>
                <div class="col-4 p-0 text-center">
                    <div class="border border-dark d-flex justify-content-center font-weight-bold" ><p>MOOCS(SWAYAM/NPTL/Spoken Tutorial)per course</p></div>
                    <div class="border border-dark font-italic"><p>For 12 weeks duration</p></div>
                    <div class="border border-dark font-italic"><p>For 8 weeks duration</p></div>
                </div>
                <div class="col-1 p-0 text-center">
                    <div class="border border-dark "><p>.</p></div>
                    <div class="border border-dark"><p>20</p></div>
                    <div class="border border-dark"><p>16</p></div>
                </div>
                <div class="col-1 p-0">
                    <div class="border border-dark text-center"><p>.</p></div>
                    <div class="border border-dark text-center"><p>40</p></div>
                    <div class="border border-dark text-center"><p>40</p></div>
                </div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center"><p>.</p></div>
                    <div class="col border border-dark text-center"><p>.</p></div>
                    <div class="col text-center p-0">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                -----------------------------------------------------Select Sem--------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 6 class="row p-0">
                <div class="col-1 border border-dark text-center p-0"><p>2</p></div>
                <div class="col-4 p-0  text-center">
                    <div class="border border-dark font-weight-bold" ><p>Tech fest/Teachers Day/Freshers Welcome</p></div>
                    <div class="border border-dark font-italic"><p>Organizer</p></div>
                    <div class="border border-dark font-italic"><p>Participents</p></div>
                </div>
                <div class="col-1 p-0 text-center">
                    <div class="border border-dark"><p>.</p></div>
                    <div class="border border-dark"><p>5</p></div>
                    <div class="border border-dark"><p>3</p></div>
                </div>
                <div class="col-1 p-0">
                    <div class="border border-dark text-center"><p>.</p></div>
                    <div class="border border-dark text-center"><p>10</p></div>
                    <div class="border border-dark text-center"><p>6</p></div>
                </div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center"><p>.</p></div>
                    <div class="col text-center p-0 border border-dark">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 ">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 7 class="row ">
                <div class="col-1 border border-dark text-center"><p>3</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Rural Reporting</p></div>
                <div class="col-1 border border-dark text-center"><p>5</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 8 class="row ">
                <div class="col-1 border border-dark text-center"><p>4</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Tree Plantation and up keeping(per tree)</p></div>
                <div class="col-1 border border-dark text-center"><p>1</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 9 class="row ">
                <div class="col-1 border border-dark text-center"><p>5</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Participation in Relief Camps</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-1 border border-dark text-center"><p>40</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 10 class="row ">
                <div class="col-1 border border-dark text-center"><p>6</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Participation in Debate/Group Discussion/Tech quiz</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 11 class="row p-0">
                <div class="col-1 border border-dark text-center p-0"><p>7</p></div>
                <div class="col-4 p-0  text-center">
                    <div class="border border-dark font-weight-bold" ><p>Participation of wall magazine in institute level(magazine/article/internate)</p></div>
                    <div class="border border-dark font-italic"><p>Editor</p></div>
                    <div class="border border-dark font-italic"><p>Writer</p></div>
                </div>
                <div class="col-1 p-0 text-center">
                    <div class="border border-dark"><p>.</p></div>
                    <div class="border border-dark"><p>10</p></div>
                    <div class="border border-dark"><p>6</p></div>
                </div>
                <div class="col-1 p-0">
                    <div class="border border-dark text-center"><p>.</p></div>
                    <div class="border border-dark text-center"><p>20</p></div>
                    <div class="border border-dark text-center"><p>12</p></div>
                </div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center"><p>.</p></div>
                    <div class="col text-center p-0 border border-dark">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 ">
                        <div class="dropdown"><!--I have changed the pb to 1 from 0-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 12 class="row ">
                <div class="col-1 border border-dark text-center"><p>8</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Publication in News Paper,Magazine & Blogs</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 13 class="row ">
                <div class="col-1 border border-dark text-center"><p>9</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Research Publication(per publication)</p></div>
                <div class="col-1 border border-dark text-center"><p>15</p></div>
                <div class="col-1 border border-dark text-center"><p>30</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 14 class="row ">
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Innovative Projects(other then course carriculum)</p></div>
                <div class="col-1 border border-dark text-center"><p>30</p></div>
                <div class="col-1 border border-dark text-center"><p>60</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 15 class="row ">
                <div class="col-1 border border-dark text-center"><p>11</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Blood Donation</p></div>
                <div class="col-1 border border-dark text-center"><p>8</p></div>
                <div class="col-1 border border-dark text-center"><p>16</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 16 class="row ">
                <div class="col-1 border border-dark text-center"><p>12</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Blood Donation Camp Organization</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 17 class="row p-0">
                <div class="col-1 border border-dark text-center p-0"><p>13</p></div>
                <div class="col-4 p-0  text-center">
                    <div class="border border-dark font-weight-bold" ><p>Participation in Sports & Games</p></div>
                    <div class="border border-dark font-italic"><p>College level</p></div>
                    <div class="border border-dark font-italic"><p>University level</p></div>
                    <div class="border border-dark font-italic"><p>District level</p></div>
                    <div class="border border-dark font-italic"><p>State level</p></div>
                    <div class="border border-dark font-italic"><p>National/Internation level</p></div>
                </div>
                <div class="col-1 p-0 text-center">
                    <div class="border border-dark text-center"><p>.</p></div>
                    <div class="border border-dark text-center"><p>5</p></div>
                    <div class="border border-dark text-center"><p>10</p></div>
                    <div class="border border-dark text-center"><p>12</p></div>
                    <div class="border border-dark text-center"><p>15</p></div>
                    <div class="border border-dark text-center"><p>20</p></div>
                </div>
                <div class="col-1 p-0">
                    <div class="border border-dark text-center"><p>.</p></div>
                    <div class="border border-dark text-center"><p>10</p></div>
                    <div class="border border-dark text-center"><p>20</p></div>
                    <div class="border border-dark text-center"><p>24</p></div>
                    <div class="border border-dark text-center"><p>30</p></div>
                    <div class="border border-dark text-center"><p>20</p></div>
                </div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center"><p>.</p></div>
                    <div class="col text-center p-0 border border-dark">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 border border-dark ">
                        <div class="dropdown"><!--I have changed the pb to 1 from 0-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 border border-dark ">
                        <div class="dropdown"><!--I have changed the pb to 1 from 0-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 border border-dark">
                        <div class="dropdown"><!--I have changed the pb to 1 from 0-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-0 border border-dark">
                        <div class="dropdown"><!--I have changed the pb to 1 from 0-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 pb-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 18 class="row ">
                <div class="col-1 border border-dark text-center"><p>14</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Cultural Programme(Dance,Drama,Elocution,Music,etc.)</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 19 class="row ">
                <div class="col-1 border border-dark text-center"><p>15</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Member of Professional Society</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 20 class="row ">
                <div class="col-1 border border-dark text-center"><p>16</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Student Chapter</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 21 class="row ">
                <div class="col-1 border border-dark text-center"><p>17</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Relevent Industry Visit & Report</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 22 class="row ">
                <div class="col-1 border border-dark text-center"><p>18</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Photography activities in diffrent Club(Photography club,Cine club,Gitisansad)</p></div>
                <div class="col-1 border border-dark text-center"><p>5</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <!-- padding for dropdown has changed from before for area distribution-->
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 23 class="row ">
                <div class="col-1 border border-dark text-center"><p>19</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Participation in Yoga Camp(Certificates to be submitted)</p></div>
                <div class="col-1 border border-dark text-center"><p>5</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 24 class="row ">
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Self-Entrepreneurship Programme</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 25 class="row ">
                <div class="col-1 border border-dark text-center"><p>21</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Adventure Sports with Certification</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 26 class="row ">
                <div class="col-1 border border-dark text-center"><p>22</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Training to under privilaged/Diffrently abled</p></div>
                <div class="col-1 border border-dark text-center"><p>15</p></div>
                <div class="col-1 border border-dark text-center"><p>30</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div 27 class="row ">
                <div class="col-1 border border-dark text-center"><p>23</p></div>
                <div class="col-4 border border-dark text-center font-weight-bold"><p>Community Service $ Allied Activities</p></div>
                <div class="col-1 border border-dark text-center"><p>10</p></div>
                <div class="col-1 border border-dark text-center"><p>20</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark p-0 text-center">
                        <div class="dropdown">
                            <button class=" btn btn-secondary dropdown-toggle w-100 p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ----------------------------------------------------Select Sem---------------------------------------------            
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Sem1</a>
                                <a class="dropdown-item" href="#">Sem2</a>
                                <a class="dropdown-item" href="#">Sem3</a>
                                <a class="dropdown-item" href="#">Sem4</a>
                                <a class="dropdown-item" href="#">Sem5</a>
                                <a class="dropdown-item" href="#">Sem6</a>
                                <a class="dropdown-item" href="#">Sem7</a>
                                <a class="dropdown-item" href="#">Sem8</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script rel="text/javascript" text="text/javascript" href="<?php echo base_url() ?>static/js/bootstrap.bundle.min.js"></script> 
    </body>
</html>