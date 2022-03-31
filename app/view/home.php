<?php
if (isset($_POST['submit'])){
    $user = new UserController();
    $user->getUser();
}
$users = new UserController();
$users->getAllUsers();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form class="p-5 m-5" action="" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">first name</label>
        <input type="text" name="prenom" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">last name</label>
        <input type="text" name="nom" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">job</label>
        <input type="text" name="profession" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">birthday</label>
        <input type="date" name="ddn" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div>
        <input type="submit" name="submit" class="btn btn-danger" value="submit"/>
    </div>
</form>
</body>
</html>
