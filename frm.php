<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
    <h2>Simple Form</h2>
    <form action="frm-submit.php" method="post">
        <label for="text">Text:</label><br>
        <input type="text" id="text" name="text" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Entries</h2>
    <?php include 'display.php'; ?>
    </div>
</body>
</html>