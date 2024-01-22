<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu_nom = $_POST["usu_nom"];
    $usu_ape = $_POST["usu_ape"];
    $usu_correo = $_POST["usu_correo"];

    // Assuming the SOAP service WSDL URL
    $soapUrl = "http://localhost/projects/PERSONAL_SoapService/InsertCategoria.php?wsdl";

    try {
        $client = new SoapClient($soapUrl);
        $params = [
            "usu_nom" => $usu_nom,
            "usu_ape" => $usu_ape,
            "usu_correo" => $usu_correo
        ];
        $response = $client->InsertCategoriaService($params);
        echo "User added successfully.";
        
        // Redirect to index.php after a successful addition
        header("Location: ../index.php");
        exit; // Make sure to exit to prevent further script execution
    } catch (SoapFault $fault) {
        echo "Error: {$fault->faultstring}";
    }
}
?>
