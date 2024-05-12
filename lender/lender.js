
function showHomePage() {
    window.location.href = 'lender.php';
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
    window.location.href = 'lenderProfile.html';

}
function Review() {
    // Perform logout actions, e.g., redirect to logout page
    window.location.href = 'userReview.html';

}

function lenderCriteria() {
    window.location.href = 'lenderCriteria.html';
}
function FAQ() {
    window.location.href = 'faq.html';

}