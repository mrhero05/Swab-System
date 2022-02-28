const adminAjaxLocation = '../functions/adminFunction.php';

function adminLogout(){
    $('#adminLogoutDIV').load(adminAjaxLocation,{
        adminPostAction: 'logoutAccount'
    },function (response,status,xhr){
        document.body.classList.remove('pfpadmin-close');
        window.location.href='../index.php';
    })
}
function displayAppointment(){
    $('#displayAppointmentID').load(adminAjaxLocation,{
        adminPostAction: 'appointmentDisplay'
    });
}
function reschedFunction(idValue){
    $('#reschedDIV').load(adminAjaxLocation,{
        adminPostAction: 'reschedAppointment',
        idValue:idValue
    },function (response,status,xhr){
        displayAppointment();
    });
}
function approvedFunction(idValue){
    $('#approvedDIV').load(adminAjaxLocation,{
        adminPostAction: 'approvedAppointment',
        idValue:idValue
    },function (response,status,xhr){
        displayAppointment();
    });
}
function loadResultBody(){
    $('#tableResultBody').load(adminAjaxLocation,{
        adminPostAction: 'tableResultLoad'
    },function (response,status,xhr){
       
    });
}

function presultbtn(value1){
    $('#useriResultDIV').load(adminAjaxLocation,{
        adminPostAction: 'presult',
        usid:value1
    },function (response,status,xhr){
        
    });
}
function nresultbtn(value2){
    $('#useriResultDIV').load(adminAjaxLocation,{
        adminPostAction: 'nresult',
        usid:value2
    },function (response,status,xhr){
       
    });
}

