let loginTrigger = document.getElementById('loginBtn');
let loginForm = document.getElementById('loginForm');
let signUpTrigger = document.getElementById('signUpBtn');
let signUpForm = document.getElementById('signUpForm');
let welcomeForms = document.getElementById('formsContainer');

loginTrigger.addEventListener('click',function(e){
    loginForm.style.opacity = 1;
    loginTrigger.style.opacity = 0;
    loginTrigger.style.pointerEvents = "none";
    signUpTrigger.style.opacity = 0;
    signUpTrigger.style.pointerEvents = "none";
});

signUpTrigger.addEventListener('click', function(e){
    loginTrigger.style.opacity = 0;
    loginTrigger.style.pointerEvents = "none";
    signUpTrigger.style.opacity = 0;
    signUpForm.style.opacity = 1;
});

if(loginForm.style.opacity == 1 && signUpForm.style.opacity == 1){
    welcomeForms.style.display = 'none';
}