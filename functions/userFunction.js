const userAjaxLocation = '../functions/userFunction.php';

function userLogout(){ // logout function
    $('#userLogoutDIV').load(userAjaxLocation,{
        userPostAction: 'logoutAccount'
    },function (response,status,xhr){
        document.body.classList.remove('pfp-close');
        window.location.href='../index.php';
    })
}
function createSchedule(){ //create schedule function
    $('#createSchedDIV').load(userAjaxLocation,{
        userPostAction: 'createSched',
        userAptDate: document.querySelector('#userApt-date').value,
        userAptTime: document.querySelector('#userApt-time').value,
        userAptMessage: document.querySelector('#userApt-message').value,
        userAptBoolean: document.querySelector('#userApt-boolean').value
    },function (response,status,xhr){
        if (response == 'success'){
            swal({
                title: "Schedule Registed!!",
                icon: "success",
                button: "Okay",
                });
        }else{
            swal({
                title: "Something went wrong!!",
                icon: "warning",
                button: "Okay",
                });
        }
    })
}