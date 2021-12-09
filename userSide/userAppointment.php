<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.user.css">
    <title>Request Appointment</title>
</head>
<body>
    <?php include '../layout/nav.user.php';?>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-7 userLeftSide">
                <img src="../image/undraw_doctor_kw-5-l.svg" alt="">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 userRightSide m-auto">
                <div class="userRightSide-content" data-aos="fade-left" data-aos-duration="1500">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Let's get you started</h3>
                                <p>Please fill up the required fields to appoint your request</p>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label>First Name
                                    <input type="email" class="userform-control" value="asdf">
                                </label>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label>Last Name
                                    <input type="email" class="userform-control">
                                </label>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label>Appointment Date
                                    <input type="date" class="userform-control">
                                </label>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label>Preferred time</label>
                                <select name="" id="" class="userform-control">
                                    <option value="">9:00AM</option>
                                    <option value="">9:30AM</option>
                                    <option value="">10:00AM</option>
                                    <option value="">10:30AM</option>
                                    <option value="">11:00AM</option>
                                    <option value="">11:30AM</option>
                                    <option value="">12:00PM</option>
                                    <option value="">12:30PM</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label>Your message</label>
                                <textarea class="userform-control" name="" id="" rows="6"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <p>If the appointment date and time are full, would you agree to reschedule your appointment. If needed?</p>
                                <label><input type="radio" name="asdfasfd" id="asdfasfd" value="Yes">Yes</label>
                                <label><input type="radio" name="asdfasfd" id="asdfasfd" value="No">No</label>
                                <button>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>