let loginTrigger = document.getElementById('loginBtn');
let loginForm = document.getElementById('loginForm');
let signUpTrigger = document.getElementById('signUpBtn');
let signUpForm = document.getElementById('signUpForm');

loginTrigger.addEventListener('click',function(e){
    loginForm.style.opacity = 1;
    loginTrigger.style.opacity = 0;
    signUpTrigger.style.opacity = 0;
});

signUpTrigger.addEventListener('click', function(e){
    loginTrigger.style.opacity = 0;
    signUpTrigger.style.opacity = 0;
    signUpForm.style.opacity = 1;
});
