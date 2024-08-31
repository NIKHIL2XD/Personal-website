<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webchat</title>
    <script src="https://kit.fontawesome.com/14f0ab860d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link href="webchat/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="backButton">
     <button> <i class="fa-solid fa-arrow-left"></i>Back</button>
    </div>

    <div class="chatinput">
        <form action="" method="POST">
            <label>Display Name :
                <input type="text" name="Name" required>
            </label><br />
            <label>Comment :
                <br>
                <textarea name="Comment" required></textarea>
            </label><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
    <h1>Live Chat</h1>
    <div class="mainchatbox">
    </div>
</body>
</html>

<?php
    if(isset($_POST["Submit"])) {
        print "<h2>Comment added !</h2>";

        $Name = $_POST["Name"];
        $Comments = $_POST["Comment"];
    }

?>
