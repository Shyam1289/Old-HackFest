<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: "Arial", sans-serif; /* Change "Arial" to your desired stylish font */
        }

        th, td {
            border: 1px solid black;
            padding: 8px; /* Adjust the padding as needed */
            text-align: left;
        }
    </style>
</head>
<body>
<a href="borrower.php" style="display: block; text-align: center;">
    <img src="./images/home.png" alt="ERROR 404!!!" style="width: 64px; height: 60px;">
</a>
<br>
<?php 
include 'connect.php'; // Corrected to include 'connect.php'

$query = "SELECT * FROM lenders";

echo '<table> 
      <tr> 
          <th>Id</th>
          <th>Name</th> 
          <th>Email</th> 
          <th>Contact</th> 
          <th>Amount</th> 
          <th>Interest(p.a.)</th> 
          <th>Time(in Yrs.)</th> 
      </tr>';
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Id = $row['Id'];
        $Name = $row['Name'];
        $Email = $row['email'];
        $Contact = $row['contact'];
        $Amount = $row['lending_amount'];
        $Interest = $row['interest']; 
        $Time = $row['time']; 

        echo '<tr> 
                  <td>'.$Id.'</td>
                  <td>'.$Name.'</td> 
                  <td>'.$Email.'</td> 
                  <td>'.$Contact.'</td> 
                  <td>'.$Amount.'</td> 
                  <td>'.$Interest.'</td> 
                  <td>'.$Time.'</td> 
              </tr>';
    }
    $result->free();
} 
?>

</body>
<div class="container" id="downloadBtn">
  <img src="./images/download.png" alt="Snow" style="width: 45px; height: 45px; position: absolute;
  bottom: 8px;
  left: 16px;">
</div>
<script>
document.getElementById('downloadBtn').addEventListener('click', function() {
    window.print();
});
</script>
</html>