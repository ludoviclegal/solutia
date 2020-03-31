<?php
include('../lib/controller/MediaController.php');
?>

<html>
    <head>
        <link href="assets/css/stylesheet.css" rel="stylesheet">
        <script type="text/javascript" src="assets/js/monscript.js"></script>
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <?php 
        $controller = new MediaController;
        $medias = $controller->show();
        ?>
        <h1>Test Solutia</h1>
        <table>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date</th>
                <th></th>
            </tr>
            <?php foreach ($medias as $media) : ?>
                <tr>
                    <td><?= $media['title']; ?></td>
                    <td><?= $media['author']; ?></td>
                    <td><?= $media['type']; ?></td>
                    <td><?= $media['description']; ?></td>
                    <td><?= $media['created_at']; ?></td>
                    <td><a href="<?php $controller->delete($media['id']); ?>"><img class="suppr" src="images/suppr.png" ></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
