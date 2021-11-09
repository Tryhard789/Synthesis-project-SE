<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/fdc8bcdb3e.js" crossorigin="anonymous"></script>
        <!--custom CSS-->
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <form action="contract.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <br>
            <input type="text" name="Dob" placeholder="Day of Birth">
            <br>
            <input type="text" name="phone" placeholder="Phone">
            <br>
            <input type="text" name="feedback" placeholder="Feedback">
            <br>
            <button type="submit" name = "submit"> Submit </button>
        </form>
    </body>
</html>