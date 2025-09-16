<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $group = htmlspecialchars($_POST['group']);

    // Group images
    $images = [
        "Linny" => "images/linny.jpg",
        "Tuck" => "images/tuck.jpg",
        "Ming-Ming" => "images/mingming.jpg"
    ];
    $groupImage = $images[$group] ?? "images/default.jpg";
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
      background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb);
      background-size: 300% 300%;
      animation: gradientBG 10s ease infinite;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(25px);
      border: 2px solid rgba(255,255,255,0.3);
      padding: 35px;
      border-radius: 25px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.3);
      width: 450px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
      color: #fff;
    }
    .card img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #fff;
      object-fit: cover;
    }
    h2 {
      margin-bottom: 20px;
      font-size: 26px;
      font-weight: 600;
    }
    table {
      width: 100%;
      margin-top: 15px;
      font-size: 15px;
    }
    td {
      padding: 10px;
      text-align: left;
      color: #fff;
    }
    td:first-child {
      font-weight: bold;
      color: #ffe066;
      width: 35%;
    }
    a {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 20px;
      background: linear-gradient(135deg, #43cea2, #185a9d);
      color: #fff;
      border-radius: 12px;
      text-decoration: none;
      transition: 0.3s;
      font-weight: bold;
    }
    a:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(24, 90, 157, 0.6);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="<?php echo $groupImage; ?>" alt="<?php echo $group; ?>">
    <h2>🎉 Registration Successful!</h2>
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
