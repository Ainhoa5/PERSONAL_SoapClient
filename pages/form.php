<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>

<h2>Add New User</h2>

<form action="../actions/addUser.php" method="post">
    <label for="usu_nom">Name:</label><br>
    <input type="text" id="usu_nom" name="usu_nom"><br>

    <label for="usu_ape">Surname:</label><br>
    <input type="text" id="usu_ape" name="usu_ape"><br>

    <label for="usu_correo">Email:</label><br>
    <input type="email" id="usu_correo" name="usu_correo"><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
