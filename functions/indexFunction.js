const indexAjaxLocation = "functions/indexFunction.php";

function checkUserCredentials(){ // check the input box
    const log_username = document.querySelector('#log-username');
    const log_password = document.querySelector('#log-password');
    const log_message = document.querySelector('#log-messageId');
    if(log_username.value == '' && log_password.value == ''){
        log_message.style.display = 'block';
        log_message.innerHTML = 'Enter Credentials';
        log_message.style.backgroundColor = '#FD5757';
        return;
    }
    if (log_username.value == ''){  
        log_message.style.display = 'block';
        log_message.innerHTML = 'Enter Username';
        log_message.style.backgroundColor = '#FD5757';
    }else{
        if (log_password.value == ''){
            log_message.style.display = 'block';
            log_message.innerHTML = 'Enter Password';
            log_message.style.backgroundColor = '#FD5757';
        }else{
            log_message.style.display = 'none';
            loginCredentials();
        }
    }
}
function loginCredentials(){ // login credentials function
    const log_username = document.querySelector('#log-username');
    const log_password = document.querySelector('#log-password');
    const log_message = document.querySelector('#log-messageId');
    $('#userSignInDIV').load(indexAjaxLocation,{
        indexPostAction: 'loginUser',
        log_username:log_username.value,
        log_password:log_password.value
    },function (response,status,xhr){
        if (response == 'wrongCredentials'){
            log_message.style.display = 'block';
            log_message.innerHTML = 'Wrong Credentials';
            log_message.style.backgroundColor = '#FD5757';
        }else{
            log_message.style.display = 'none';
            swal({
                title: "Login Successful",
                icon: "success",
                button: "Okay",
                }).then((result) => {
                    if (response == 'administrator'){
                        window.location.href = 'adminSide/adminDashboard.php'
                    }else if (response == 'user'){
                        window.location.href = 'userSide/userSide.php'
                    }
            });
        }
    })
}
