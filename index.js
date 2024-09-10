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
                $('#p').replaceWith('<p class = "p-m p">fill in all fields</p>');
            }else if(res === 'email_err'){
                $('#p').replaceWith('<p class = "p-m p">Incorrect email</p>');
            }else if(res === 'pwdErr'){
                $("#p").replaceWith('<p class = "p-m p">passwords must be the same</p>')
            }else if(res === 'userErr'){
                $('#p').replaceWith('<p class = "p-m p">this email already exists</p>');
            }else{
                $('#p').replaceWith('<p class = "p-m">congratilations</p>');
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
              $('#plogin').replaceWith('<p class = "p-m p">fill in all fields</p>');
            }else if(res == "mailErr"){
              $('#plogin').replaceWith('<p class = "p-m p">Incorrect email</p>');
            }else if(res == "pwdErr"){
              $('#plogin').replaceWith('<p class = "p-m p">Invalid password</p>');
            }else{
              window.location = 'wellcome.php';
            }
        }
    })
})
