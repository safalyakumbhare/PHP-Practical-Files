<!DOCTYPE html>
<html>
<head>
    <title>Hello PHP Script</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Say Hello">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "Hello, $name!";
    }
    ?>
</body>
</html>
