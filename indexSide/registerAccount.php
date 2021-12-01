<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.indexSide.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Account</title>
</head>
<body>
    <div class="container p-0 m-auto">
        <div class="reg-container">
            <div class="reg-header">
                <img src="../image/swablogo.png" alt="">
                <h5>SWAB SYSTEM</h5>
            </div>
            <h3>Let's create your account.</h3>
            <div class="reg-input">
                <form class="row g-2">
                    <div class="col-md-6">
                        <label for="reg-fname">First name</label>
                        <input type="text" class="form-register" id="reg-fname" placeholder="Enter your first name">
                    </div>
                    <div class="col-md-6">
                        <label for="reg-lname">Last name</label>
                        <input type="text" class="form-register" id="reg-lname" placeholder="Enter your last name">
                    </div>
                    <div class="col-12">
                        <label for="reg-email">Email address</label>
                        <input type="email" class="form-register" id="reg-email" placeholder="Enter your email address">
                    </div>
                    <div class="col-12">
                        <label for="reg-phonenum">Phone Number</label>
                        <input type="text" class="form-register" id="reg-phonenum" placeholder="Enter your phone number">
                    </div>
                    <div class="col-12">
                        <label for="reg-password">Password</label>
                        <input type="text" class="form-register" id="reg-password" placeholder="Enter your password">
                    </div>
                    <div class="col-12">
                        <label for="reg-cpassword">Confirm Password</label>
                        <input type="text" class="form-register" id="reg-cpassword" placeholder="Confirm your password">
                    </div>
                    <div class="col-12 reg-buttons">
                        <a href="../index.php">Login instead</a>
                        <button  class="">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>