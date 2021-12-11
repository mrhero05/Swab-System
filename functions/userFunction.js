const userAjaxLocation = '../functions/userFunction.php';

function userLogout(){
    $('#userLogoutDIV').load(userAjaxLocation,{
        userPostAction: 'logoutAccount'
    },function (response,status,xhr){
        document.body.classList.remove('pfp-close');
        window.location.href='../index.php';
    })
}