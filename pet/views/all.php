
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <h2>All Pets</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Info</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pets as $pet) { ?>
                            <tr>
                                <td><?= $pet['name'] ?></td>
                                <td><?=  $pet['info'] ?></td>
                                <td><?=  $pet['type'] ?></td>
                                <td><?=  $pet['date'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </body>   
</html>
        
          