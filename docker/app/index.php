<?php
    require './configs/loadenv.php';
    require './classes/Database.class.php';
    require './classes/User.class.php';
    
    $user = new User;

    $users = ($user->getAll())->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>My project</title>
    </head>
    <body>
        <div class="container my-5 p-2 border rounded shadow">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th><?= $user["id"] ?></th>
                            <th><?= $user["firstname"] ?></th>
                            <th><?= $user["lastname"] ?></th>
                            <th><?= $user["username"] ?></th>
                            <th><?= $user["email"] ?></th>
                        </tr>
                    <?php } ?>
                  </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


