<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDOR Demo</title>
</head>
<body>
    <h1>Welcome to the User Profile Viewer</h1>
    <form action="profile.php" method="get">
        <label for="userid">Enter your User ID:</label>
        <input type="number" id="userid" name="id" required>
        <button type="submit">View Profile</button>
    </form>
</body>
</html>
