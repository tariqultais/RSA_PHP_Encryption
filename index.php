<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RSA Encryption</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <div class="container">
        <h1>RSA Encryption</h1>
        <form action="encrypt.php" method="post">
            <label for="message">Enter Message as a Number:</label><br>
            <input type="number" id="message" name="message" required><br><br>
            <input type="submit" value="Encrypt">
        </form>
    </div>
</body>

</html>
