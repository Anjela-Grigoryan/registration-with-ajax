document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);


$("#signUp").click(function(){

    let name = $("#name").val();
    let email = $("#email").val();
    let pwd = $("#pwd").val();
    let cpwd = $("#cpwd").val();
    $.ajax({
        type: "POST",
        url: "register.php",
        data:{
            name:name,
            email:email,
            pwd:pwd,
            cpwd:cpwd
        },
        success: function(res){
            if(res === 'error'){
                $('#p').text('fill in all fields');
            }else if(res === 'email_err'){
                $('#p').text('Incorrect email');
            }else if(res === 'pwdErr'){
                $('#p').text('passwords must be the same');
            }else if(res === 'userErr'){
                $('#p').text('this email already exists');
            }else if(res === 'verifyErr'){
                $('#p').text('The password must contain more than 8 characters, capital letters, lowercase letters, numbers and special characters');
            }else{
                $('#p').removeClass('p');
                window.location = 'wellcome.php';
            }
        }
    })
})

$("#signin").click(function(){
  
    let mail = $("#mail").val();
    let password = $("#password").val();

    $.ajax({
        type: "POST",
        url: "login.php",
        data:{
            mail:mail,
            pwd:password
        },
        
        success: function(res){
            if(res == "error"){
                $('#plogin').text('fill in all fields');
            }else if(res == "mailErr"){
                $('#plogin').text('Incorrect email');
            }else if(res == "pwdErr"){
                $('#plogin').text('Invalid password');
            }else{
              window.location = 'wellcome.php';
            }
        }
    })
})
