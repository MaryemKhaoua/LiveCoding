<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<div class="container mt-5">
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
        </tr>
    </thead>

    <tbody>
   

        <?php foreach($show as $apprenant): ?>
        <tr>
            <td><?= $apprenant['id'] ?></td>
            <td><?= $apprenant['firstname'] ?></td>
            <td><?= $apprenant['lastname'] ?></td>
        </tr>


        <?php endforeach; ?>
    </tbody>
</table>

</div>

</body>
</html>