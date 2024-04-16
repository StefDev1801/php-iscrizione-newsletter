<?php
var_dump($_GET);
var_dump(isset($_GET['email']));

$user_email = ($_GET['email']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>
<body>
    <section>
        <div class="newsletter my-3">
            <div class="container text-center">
                <div>Subscribe to our newsletter</div>
                <form action="" method="get">
                    <input type="text" placeholder="example@mail.com" name="email" id="email">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>