<?php
// In /index.php
// The URL where your SOAP service is hosted
$soapUrl = "http://localhost/projects/PERSONAL_SoapService/InsertCategoria.php?wsdl";

// Initialize the SOAP client
$client = new SoapClient($soapUrl);

// Call the GetAllUsuariosService method
try {
    $response = $client->GetAllUsuariosService();
    $usuarios = json_decode($response, true); // Assuming the service returns JSON
} catch (SoapFault $fault) {
    echo "SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <h2>Usuarios List</h2>

    <?php if (!empty($usuarios)): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <!-- Add more headers if there are more fields -->
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($usuario['usu_id']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($usuario['usu_nom']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($usuario['usu_ape']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($usuario['usu_correo']); ?>
                    </td>
                    <!-- Add more data cells if there are more fields -->
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

    <button onclick="location.href='pages/form.php'">Add New User</button>
</body>

</html>