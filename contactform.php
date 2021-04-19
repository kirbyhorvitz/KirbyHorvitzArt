<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Thank you for reaching out, <?php echo($_POST['Name']); ?><br>
The email address you submitted is: <?php echo($_POST['Email']); ?><br>
The message you submitted is: <?php echo($_POST['Message']); ?>
</body>
</html>