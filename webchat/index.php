<<<<<<< HEAD
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
        $Comment = $_POST["Comment"];

        //old comments
        $Old = fopen("comments.txt", "r+t");
        $Old_Comments = fread($Old, 1024);

        //Add new comment
        $Write = fopen("comments.txt", "w+");

        $String = 
            "<div class='comment'><span>".$Name."</span><br />
            <span>".date("Y/m/d")." | ".date("h:i A"). "</span><br />
            <span>".$comment."</span><div>\n".$Old_Comments;
        
        fwrite($Write, $String);
        fclose($Write);
        fclose($Old);
    }

    //To display all comments
    $Read = fopen("comments.txt", "r+t");
    echo "<h1>Comments : </h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webchat</title>
    <link href="webchat/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>
>>>>>>> 3144459 (files)
