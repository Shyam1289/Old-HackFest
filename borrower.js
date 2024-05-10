
function showHomePage() {
    window.location.href = 'borrower.php';
}

function toggleDashboard() {
    var dashboard = document.getElementById('dashboard');
    dashboard.classList.toggle('open');
}

function closeDashboard() {
    var dashboard = document.getElementById('dashboard');
    dashboard.classList.remove('open');
}

function toggleMenu() {
    var navUl = document.querySelector('nav ul');
    navUl.classList.toggle('open');
}

function closeMenu() {
    var navUl = document.querySelector('nav ul');
    navUl.classList.remove('open');
}

function logout() {
    // Perform logout actions, e.g., redirect to logout page
    alert('Logged out!');
    window.location.href = 'logout.php';
}
function contact() {
    // Perform logout actions, e.g., redirect to logout page
    alert('Email id : 22je0774@iitism.ac.in');

}
function Edit() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'profile.html';

}
function LendersList() {
    // Perform logout actions, e.g., redirect to logout page
    

}
function Application() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'application.html';

}
function LoanCriteria() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'criteria.html';
}
function changeToLender() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'lender.html';
}
function changeToBorrower() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'borrower.php';
}