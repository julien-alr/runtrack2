<?php

$pdo = NEW PDO("mysql:host=localhost;dbname=jour8", "root", "");

$req = $pdo->prepare("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
$req->execute();

$res = $req->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        thead {
            background-color: grey;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($res as $array) {
                echo "<tr>
                        <td>{$array['prenom']}</td>
                        <td>{$array['nom']}</td>
                        <td>{$array['naissance']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>