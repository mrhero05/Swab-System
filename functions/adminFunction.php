<?php
    require 'db_connection.php';
    session_start();
    if(isset($_POST['adminPostAction'])){
        $adminPostAction = $_POST['adminPostAction'];

        switch($adminPostAction){
            case 'logoutAccount':
                logoutAccountFunction();
                break;
            case 'appointmentDisplay':
                appointmentDisplayFunction($connection);
                break;
            case 'reschedAppointment':
                reschedAppointmentFunction($connection);
                break;
            case 'approvedAppointment':
                approvedAppointmentFunction($connection);
                break;
            case 'tableResultLoad':
                tableResultLoadFunction($connection);
                break;
                
        }
    }
    function logoutAccountFunction(){
        unset($_SESSION['userAccountType']);
        unset($_SESSION['userAccountName']);
    }
    function appointmentDisplayFunction($connection){

        $querySelect = 'SELECT * FROM `tbl_userinfo` inner join `tbl_appointment` on `tbl_userinfo`.`useri_id` = `tbl_appointment`.`useri_id` where `tbl_appointment`.`apt_status` = "" or `tbl_appointment`.`apt_status` IS NULL';
        $sqlSelect = mysqli_query($connection,$querySelect);
        
        if(mysqli_num_rows($sqlSelect) > 0) {
            $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);
                
                foreach($rowSelect as $eachSelect): 
                echo '
                <div class="appoint-cards" data-aos="zoom-in-up">
                    <div class="appoint-cardsTop">
                        <span>'.$eachSelect['apt_time'].'</span>
                        <span>'.$eachSelect['apt_date'].'</span>
                    </div>
                    <div class="appoint-cardsMid">
                        <span>'.$eachSelect['useri_fname'].' '.$eachSelect['useri_lname'].'</span>
                        <span>'.$eachSelect['useri_address'].'</span>
                        <span>Status: Pending</span>
                        
                    </div>
                    <div class="appoint-cardsBot">
                        <button onclick="reschedFunction(this.value)" value="'.$eachSelect['apt_id'].'">Re-sched</button>
                        <button onclick="approvedFunction(this.value)" value="'.$eachSelect['apt_id'].'">Approve</button>
                    </div>
                </div>
                     ';
                endforeach; 
        }
    }
    function reschedAppointmentFunction($connection){
        $idValue = $_POST['idValue'];

        $queryInsert= 'INSERT INTO `tbl_resched`(`apt_id`) VALUES ("'.$idValue.'")';
        $sqlInsert = mysqli_query($connection,$queryInsert);

        $queryUpdate = 'UPDATE `tbl_appointment` SET `apt_status`= "resched" WHERE `apt_id` ="'.$idValue.'"';
        $sqlUpdate = mysqli_query($connection,$queryUpdate);
    }
    function approvedAppointmentFunction($connection){
        $idValue = $_POST['idValue'];

        $queryInsert= 'INSERT INTO `tbl_approve`(`apt_id`) VALUES ("'.$idValue.'")';
        $sqlInsert = mysqli_query($connection,$queryInsert);

        $queryUpdate = 'UPDATE `tbl_appointment` SET `apt_status`= "approve" WHERE `apt_id` ="'.$idValue.'"';
        $sqlUpdate = mysqli_query($connection,$queryUpdate);
    }
    function tableResultLoadFunction($connection){

        $querySelect = 'SELECT * FROM `tbl_userinfo` inner join `tbl_appointment` on `tbl_userinfo`.`useri_id` = `tbl_appointment`.`useri_id` where `tbl_appointment`.`apt_status` = "approve"';
        $sqlSelect = mysqli_query($connection,$querySelect);
        
        if(mysqli_num_rows($sqlSelect) > 0) {
            $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);
                
                foreach($rowSelect as $eachSelect): 
                echo '
                <tr>
                    <td>'.$eachSelect['apt_id'].'</td>
                    <td>'.$eachSelect['useri_fname'].'</td>
                    <td>'.$eachSelect['useri_lname'].'</td>
                    <td>Pending</td>
                    <td>
                        <button>Positive</button>
                        <button>Negative</button>
                    </td>
                </tr>
                     ';
                endforeach; 
        }
    }
?>