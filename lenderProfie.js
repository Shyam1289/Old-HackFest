function submitForm() {
    var name = document.getElementById('name').value;
    var address = document.getElementById('address').value;
    var business = document.getElementById('business').value;
    var collateral = document.getElementById('collateral').value;

    // You can perform further actions here, such as sending the form data to a server
    console.log('Name:', name);
    console.log('Address:', address);
    console.log('Business:', business);
    console.log('Collateral:', collateral);
}
function editProfile() {
    const name = prompt("Enter your name:");
    const address = prompt("Enter your address:");
    const business = prompt("Enter your business:");
    const income = prompt("Enter your annual income:");

    document.getElementById("name").textContent = name;
    document.getElementById("address").textContent = address;
    document.getElementById("business").textContent = business;
    document.getElementById("income").textContent = income;
}