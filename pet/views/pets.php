<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-success">All Pets</h3>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr class="bg-success">
                    <th scope="col">Name</th>
                    <th scope="col">Info</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pets as $pet) { ?>
                    <tr>
                        <td><?= $pet['name'] ?></td>
                        <td><?= $pet['info'] ?></td>
                        <td><?= $pet['type'] ?></td>
                        <td><?= date('Y-m-d', strtotime($pet['date'])) ?></td>
                        <td>
                            <form action="views/delete.php" method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $pet['id'] ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this pet?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>