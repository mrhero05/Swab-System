<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.admin.css">
    <title>Appointment</title>
</head>
<body onload="displayAppointment()">
    <?php include '../layout/nav.admin.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php  include '../layout/sidebar.admin.php'; ?>
            <div class="col-lg-10 p-4">
               <div class="appointContainer">
                   <h1>Appointment</h1>
                   <div class="appoint-cards-container">
                        <div class="appoint-cards-filter">
                            <span>Sort by:
                                <select name="" id="">
                                    <option value="Today">Today</option>
                                    <option value="Today">This Week</option>
                                    <option value="Today">This Month</option>
                                </select>
                            </span>
                        </div>
                        <div class="appoint-cards-body" id="displayAppointmentID">
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                            <div class="appoint-cards" data-aos="zoom-in-up">
                                <div class="appoint-cardsTop">
                                    <span>9:30AM</span>
                                    <span>12/21/20</span>
                                </div>
                                <div class="appoint-cardsMid">
                                    <span>Sample Name</span>
                                    <span>(252) 827-4674 Po Box 483 Macclesfield, North Carolina(NC), 27852</span>
                                    <span>Status: Pending</span>
                                </div>
                                <div class="appoint-cardsBot">
                                    <button>Decline</button>
                                    <button>Approve</button>
                                </div>
                            </div>
                        </div>
                        <div id="reschedDIV" style="display:none;"></div>
                        <div id="approvedDIV" style="display:none;"></div>
                        <div>
                            <!-- burahin mo nalang to -->
                        </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>