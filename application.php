
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">'
    <div class="row">
        <div class="col-md-2"><img src="icons/ucsc.ico" alt="" style="width: 100%"></div>
        <center><div class="col-md-10"><h2>UNIVERCITY OF COLOMBO SCHOOL OF COMPUTING</h2> <br> <span>COMPUTING SEVICE CENTER</span>
                <br><h3>Application Form</h3></div></center>
    </div>

    <hr>


    <div class="container padding-top-10">
        <div class="panel panel-default">

            <div class="panel-body">
                <form>

                    <!--00-Name of the course-->
                    <label for="course" class="control-label">Name of the Course:</label>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="course"/>
                        </div>
                    </div>
                    </br>



                    <label for="full" class="control-label">Title</label>
                    <div class="row">
                        <div class="col-md-2">
                            <label> <input type="checkbox">  Rev.</label>
                        </div>
                        <div class="col-md-2">
                            <label> <input type="checkbox">  Mr.</label>
                        </div>
                        <div class="col-md-2">
                            <label> <input type="checkbox">  Mrs.</label>
                        </div>
                        <div class="col-md-2">
                            <label> <input type="checkbox">  Ms.</label>
                        </div>
                        <div class="col-md-2">
                            <label> <input type="checkbox">  Other</label>
                        </div>

                    </div>
                    <br>


                    <!--01-Name-->
                    <label for="full" class="control-label">Name:</label>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <!--<label for="full" class="control-label">Name in Full:</label>-->
                            <input type="text" class="form-control" id="full" placeholder="Name in Full"/>
                        </div>
                        </br><br>
                        <div class="col-lg-12 ">
                            <!--<label for="initial" class="control-label">Name with Initials:</label>-->
                            <input type="text" class="form-control" id="initial" placeholder="Name with Initial"/>
                        </div>
                    </div>
                    </br>

                    <!--02-Birthday-->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Date of Birth:</label>
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="date" placeholder="DD"/>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="month" placeholder="MM" />
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="year" placeholder="YYYY"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="age" class="control-label">Age:</label>
                            <input type="text" class="form-control" id="age" />
                        </div>
                    </div>
                    </br>

                    <!--03-sex-->
                    <label for="full" class="control-label">Sex:</label>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="male"><input name="sex" type="radio" value="male" id="male">
                                Male</label>
                            <label for="female"><input name="sex" type="radio" value="female" id="female">
                                Female</label>
                        </div>
                    </div>
                    </br>

                    <!--04-National ID card No-->
                    <label for="nic" class="control-label">National Identity Card Number:</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nic" placeholder="NIC"/>
                        </div>
                    </div>
                    </br>

                    <!--05-Addresses-->
                    <div class="row">
                        <div class="col-md-6">
                            <label for="permanent" class="control-label">Permanet Address:</label>
                            <input type="text-area" class="form-control" id="permanent"/>
                            <div class="col-md-8">
                                <label for="telephone" class="control-label">Telephone No:</label>
                                <input type="text" class="form-control" id="telephone"/>
                            </div>
                            <div class="col-md-8">
                                <label for="mobile" class="control-label">Mobile No:</label>
                                <input type="text" class="form-control" id="mobile"/>
                            </div>
                            <div class="col-md-8">
                                <label for="e-mail" class="control-label">E-mail:</label>
                                <input type="text" class="form-control" id="e-mail"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="work-place" class="control-label">Work Place Address:</label>
                            <input type="text-area" class="form-control" id="work-place"/>
                            <div class="col-md-8">
                                <label for="telephone" class="control-label">Telephone No:</label>
                                <input type="text" class="form-control" id="telephone"/>
                            </div>
                            <div class="col-md-8">
                                <label for="mobile" class="control-label">Mobile No:</label>
                                <input type="text" class="form-control" id="mobile"/>
                            </div>
                            <div class="col-md-8">
                                <label for="e-mail" class="control-label">E-mail:</label>
                                <input type="text" class="form-control" id="e-mail"/>
                            </div>
                        </div>
                    </div>
                    </br>

                    <!--06-Work Place-->
                    <label for="work" class="control-label">Work Place & Designation:</label>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="work" />
                        </div>
                    </div>
                    </br>

                    <!--07-Vehical No-->
                    <label for="vehical-no" class="control-label">Vehical Number:</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="vehical-no" placeholder="If any"/>
                        </div>
                    </div>
                    </br>

                    <!--08-checkboxes-->
                    <label class="control-label">How did you get know about the UCSC Short Term Training Courses?</label>
                    <div class="row">
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Newspaper Advertisement</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Past Student</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Facebook</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Search Engine</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> E-mail Marketing</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Television</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Website Banners,Links,Posting</label>
                        </div>
                        <div class="col-md-3">
                            <label> <input type="checkbox"> Other</label>
                            <input type="text" class="form-control"placeholder="Please Certify"/>
                        </div>
                    </div>
                    </br>
                    <h4>DECLERATION</h4>
                    <p>I do hereby certify that the above particulars furnished by me are true and correct
                        in the event of my application for registraion being accepted, I shall abide by all the
                        regulations governing external candidates of the University of Colombo School of Computing.
                        I am also aware that 80% attendance is required to be entitled for the participation certificate.

                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>