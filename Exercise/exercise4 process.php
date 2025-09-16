<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $group = htmlspecialchars($_POST['group']);
} else {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Wonder Pets - Result</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #a18cd1, #fbc2eb, #fad0c4);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-size: 300% 300%;
      animation: gradientBG 6s ease infinite;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .card {
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.25);
      width: 420px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }
    h2 {
      color: #333;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    td:first-child {
      font-weight: bold;
      color: #ff758c;
      width: 35%;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 20px;
      background: linear-gradient(135deg, #ff758c, #ff7eb3);
      color: #fff;
      border-radius: 10px;
      text-decoration: none;
      transition: 0.3s;
    }
    a:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(255, 118, 136, 0.6);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>✅ Registration Successful!</h2>
    <table>
      <tr>
        <td>Name:</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Group:</td>
        <td><?php echo $group; ?></td>
      </tr>
    </table>
    <a href="index.html">⬅ Back to Form</a>
  </div>
</body>
</html>
