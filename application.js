document.getElementById('loanForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  // Get form values
  var name = document.getElementById('name').value;
  var amount = document.getElementById('amount').value;
  var status = document.getElementById('idd').value;
  // Create a new row
  var newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>${name}</td>
    <td>$${amount}</td>
    <td>${idd}</td>
  `;
  // Append row to table
  document.getElementById('loanTable').appendChild(newRow);
  // Clear form
  document.getElementById('loanForm').reset();
});
