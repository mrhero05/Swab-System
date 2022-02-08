const userAjaxLocation = '../functions/userFunction.php';

function userLogout(){
    $('#userLogoutDIV').load(userAjaxLocation,{
        userPostAction: 'logoutAccount'
    },function (response,status,xhr){
        document.body.classList.remove('pfp-close');
        window.location.href='../index.php';
    })
}
function createSchedule(){
    $('#createSchedDIV').load(userAjaxLocation,{
        userPostAction: 'createSched',
        userAptDate: document.querySelector('#userApt-date').value,
        userAptTime: document.querySelector('#userApt-time').value,
        userAptMessage: document.querySelector('#userApt-message').value,
        userAptBoolean: document.querySelector('#userApt-boolean').value,
    },function (response,status,xhr){
        if (response == 'success'){
            swal({
                title: "Schedule Registered",
                icon: "success",
                button: "Okay",
                });
        }else{
            swal({
                title: "Something went wrong",
                icon: "warning",
                button: "Okay",
                });
        }
    })
}
function generateReport(){ // generate reproyh
    window.location.href = '../functions/genReport.php';
}
function loadResultData(){ // load result data
    $('#resultInfo').load(userAjaxLocation,{
        userPostAction: 'loadResultinfo'
    });
    $('#userTestResultID').load(userAjaxLocation,{
        userPostAction: 'userTestResult'
    });
    
}