let pfpModalBool = true;
function pfpModalShow(){ // show pfp modal userside
    if(pfpModalBool != false){
        document.body.classList.add('pfp-close');
    }else{
        document.body.classList.remove('pfp-close');
    }
    pfpModalBool = !pfpModalBool;
}
let pfpAdminModalBool = true;
function pfpAdminModalShow(){ // show pfp modal adminside
    if(pfpAdminModalBool != false){
        document.body.classList.add('pfpadmin-close');
    }else{
        document.body.classList.remove('pfpadmin-close');
    }
    pfpAdminModalBool = !pfpAdminModalBool;
}
