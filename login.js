const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');
const login=document.getElementById('login');
const userType=document.getElementById('userType');
signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
login.addEventListener('click',function(){
    if (userType=="Lender") {
        window.location.href='lender.html';
    }
    else{
        window.location.href='borrower.php';
    }
})