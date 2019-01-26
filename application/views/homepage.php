<!--docktype html-->
<html>
    <head>
        <meta charset = "utf-8">
        <link rel ="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css" ><!--autoload.php and config.php on both file work has to be done only then codeigniter can understand the base url-->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/homepage.css">-->
    </head>
    <body class="container-fluid">
        <div 1 class="row border border-dark justify-content-center">
            <p>Maulana Abul Kalam Azad University of Technology, West Bengal<br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Record of Activities for Mendetory Additional Requirment
            </p>
           <!-- <pre>Maulana Abul Kalam Azad University of Technology, West Bengal
 Record of Activities for Mendetory Additional Requirment 
            </pre>-->

        </div>
        <form method="get" action="submit.php">
            <div 2 class="row border border-dark">

                <div class="col-8 border border-dark">
                    <p>College Name (College Code): Academy of technology(169)</p>  
                </div>
                <div department class="col-4 border border-dark text-center">
                    <p>Department :<input type="text" name="dept.name"></p>
                </div>
            </div>
            <div 3 class="row  p-0">
                <div class="col-4 border border-dark text-center ">
                    <p>Student Name :<input type="text" name="student_name"></p>
                </div>
                <div class="col-4 border border-dark text-center">
                    <p>University Roll NO. :<input type="text" name="roll_no"></p>
                </div>
                <div class="col-4 border border-dark text-center">
                    <p>Registration No. :<input type="text" name="reg_no"></p>
                </div>
            </div>
            <div 4 class="row ">
                <div class="col-1 border border-dark text-center"><p>SI No.</p></div>
                <div class="col-4 border border-dark text-center"><p>Activity</p></div>
                <div class="col-1 border border-dark text-center"><p>points</p></div>
                <div class="col-1 border border-dark p-2"><p>Max Allowed Points</p></div>
                <div class="col-5 m-0 p-0">
                    <div class="col border border-dark text-center"><p>Points Earned</p></div>
                    <div class="col border-0">
                        <div class="row">  <!--when we are nesting then the child col dosen't understand that it has 12 grid so that's why we have to give a row again-->
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 1</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 2</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 3</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 4</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 5</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 6</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 7</p></div>
                            <div class="col-1 border border-dark p-0 text-center"><p>Sem 8</p></div>
                            <div class="col border border-dark text-center"><P>Total</P></P></div>
                        </div>
                    </div>
                </div>
            </div>
            <div 5 class="row">
                <div class="col-1 border border-dark"><p>1</p></div>
                <div class="col-4 p-0">
                    <div class="col border border-dark "><p>MOOCS(SWAYAM/NPTL/Spoken Tutorial)per course</p></div>
                    <div class="col border border border-dark "><p>for 12 weeks duration</p></div>
                    <div class="col border border border-dark "><p>for 8 weeks duration</p></div>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-6 p-0">
                            <div class="col border border-dark"><p>20</p></div>
                            <div class="col border border-dark"><p>16</p></div>
                        </div>
                        <div class="col-6 border border-dark"><p>40</p></div>
                    </div>
                </div>

                <!--i gotta take col 1-->
                <div class="col-5 p-0">
                    <div class="col border border-dark" ><p>1</p></div>
                    <div class="col">
                        <div class="row">
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col-1 border border-dark"></div>
                            <div class="col border border-dark"><p>Total</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

</html>