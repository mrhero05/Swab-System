<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.user.css">
    <title>View Result</title>
</head>
<body onload="loadResultData()">
    <?php include '../layout/nav.user.php';?>
    <div class="container">
        <div class="result-body m-auto mt-sm-1 mt-md-5 mt-lg-5" data-aos="fade-up" data-aos-duration="500">
            <div class="result-header">
                <div>
                    <h3>Laboratory Report</h3>
                    <p>Here are some of the findings of your results</p>
                </div>
                <div>
                    <img src="../image/swablogo.png" alt="">
                    <span>Swab system</span>
                </div>
            </div>
            <div id="resultInfo" class="result-info">
                <div>
                    <span>Name: n/a</span>
                    <span>Age: n/a</span>
                    <span>Address: n/a</span>
                    <span>Birthday: n/a</span>
                </div>
                <div>
                    <span>Sex: n/a</span>
                    <span>Barangay: n/a</span>
                    <span>Provincee: n/a </span>
                    <span>Region: n/a</span>
                </div>
            </div>
            <div class="result-report">
                <h3>Your Covid Test Results Are:</h3>
                <span id="userTestResultID">No Result</span>
                <br>
                <button onclick="generateReport()">Download PDF file</button>
            </div>
        </div>
    </div>
</body>
</html>