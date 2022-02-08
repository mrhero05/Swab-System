<?php
    require 'db_connection.php';
    session_start();
    if(isset($_POST['userPostAction'])){
        $userPostAction = $_POST['userPostAction'];

        switch($userPostAction){
            case 'logoutAccount':
                logoutAccountFunction();
                break;
            case 'createSched':
                createSchedFunction($connection);
                break;
            case 'loadResultinfo':
                loadResultinfoFunction($connection);
                break;
            case 'userTestResult':
                userTestResultFunction($connection);
                break;
        }
    }
    function logoutAccountFunction(){
        unset($_SESSION['userAccountType']);
        unset($_SESSION['userAccountName']);
        unset($_SESSION['userAccountLastName']);
        unset($_SESSION['userAccountID']);
    }
    function createSchedFunction($connection){
        $userId = $_SESSION['userAccountID'];
        $userAptDate = $_POST['userAptDate'];
        $userAptTime = $_POST['userAptTime'];
        $userAptMessage = $_POST['userAptMessage'];
        $userAptBoolean = $_POST['userAptBoolean'];

        $queryInsert = 'INSERT INTO `tbl_appointment`(`useri_id`, `apt_date`, `apt_time`, `apt_message`, `apt_boolean`) VALUES ("'.$userId.'","'.$userAptDate.'","'.$userAptTime.'","'.$userAptMessage.'","'.$userAptBoolean.'")';
        $sqlInsert = mysqli_query($connection,$queryInsert);
        if (!$sqlInsert){
            echo 'error';
        }else{
            echo 'success';
        }
    }
    function loadResultinfoFunction($connection){ // load result information
        $querySelect = 'SELECT * FROM `tbl_userinfo` where `useri_id`= "'.$_SESSION['userAccountID'].'"';
        $sqlSelect = mysqli_query($connection,$querySelect);
        
        if(mysqli_num_rows($sqlSelect) > 0) {
            $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);  
                foreach($rowSelect as $eachSelect): 
                echo '
                    <div>
                        <span>Name: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_lname'].', '.$eachSelect['useri_fname'].'</span></span>
                        <span>Age: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_age'].'</span></span>
                        <span>Address: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_address'].'</span></span>
                        <span>Birthday: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_birthday'].'</span></span>
                    </div>
                    <div>
                        <span>Sex: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_sex'].'</span></span>
                        <span>Barangay: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_bgry'].'</span></span>
                        <span>Province: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_province'].'</span></span>
                        <span>Region: <span style="font-weight: 200; font-size:14px;">'.$eachSelect['useri_region'].'</span></span>
                    </div>
                     ';
                endforeach; 
        }
    }
    function userTestResultFunction($connection){
        $querySelect = 'SELECT * FROM `tbl_userinfo` where `useri_id`= "'.$_SESSION['userAccountID'].'" and `useri_result` is NOT null';
        $sqlSelect = mysqli_query($connection,$querySelect);
        
        if(mysqli_num_rows($sqlSelect) > 0) {
            $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);  
                foreach($rowSelect as $eachSelect):
                if ($eachSelect['useri_result'] == 'Negative'){
                    echo '
                    <span style="background-color: #C5F5D8; color: var(--greenBtn);">'.$eachSelect['useri_result'].'</span>
                    ';
                }else{
                    echo '
                    <span style="background-color: #F6DEE0; color: var(--redBtn);">'.$eachSelect['useri_result'].'</span>
                    ';
                }
                
                endforeach; 
        }
        else{
            echo '<span style="background-color: #C5F5D8; color: var(--greenBtn);">No Result</span>';
        }
    }
?>