<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php if (count($results) > 0) { ?>
            <h3 class="text-danger">Results</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="bg-danger">
                        <th scope="col">Name</th>
                        <th scope="col">Info</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $pet) { ?>
                        <tr>
                            <td><?= str_ireplace($name, "<span class='bg-primary'>$name</span>", $pet['name']) ?></td>
                            <td><?=  $pet['info'] ?></td>
                            <td><?= str_ireplace($type, "<span class='bg-primary'>$type</span>", $pet['type']) ?></td>
                            <td><?= date('Y-m-d', strtotime($pet['date'])) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?><h2>No results found</h2><?php } ?>
    </div>
</body>

</html>