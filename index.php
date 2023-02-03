<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyChallenge</title>
</head>
<body>
    <form method="post" action="list.php">
        
        <input type="text" name="nom" id="nom"  placeholder="nom"> <br><br>
         <input type="checkbox" name="color[]" value="orange" placeholder="orange"> <br/>
        <input type="checkbox" name="color[]" value="blanc" placeholder="blanc"> <br/>
        <input type="checkbox" name="color[]" value="vert" placeholder="vert">
        <br/><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
