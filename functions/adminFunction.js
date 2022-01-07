const adminAjaxLocation = '../functions/adminFunction.php';

function adminLogout(){
    $('#adminLogoutDIV').load(adminAjaxLocation,{
        adminPostAction: 'logoutAccount'
    },function (response,status,xhr){
        document.body.classList.remove('pfpadmin-close');
        window.location.href='../index.php';
    })
}