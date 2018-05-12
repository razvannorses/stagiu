<?php include 'insert.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Stagiu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3>Stagiu</h3>
    <div class="row">
        <div class="col-sm-4">
        <form role="form" method="post" action="insert.php">
            <div class="form-group">
                <label>Numar initial</label>
                <input type="text" name="sinitial" class="form-control">
            </div>
            <div class="form-group">
                <label>Numar final</label>
                <input type="text" name="sfinal" class="form-control">
            </div>
            <div class="form-group">
                <label>Numar iteratii</label>
                <input type="text" name="siteratii" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-info btn-block">
        Add numbers</button>


    </form>
    </div>
    <div class="col-sm-8">
        <table class="table">
            <thead>
            <tr>
                <th>Numar intial</th>
                <th>Numar final</th>
                <th>Iteratii</th>

            </tr>
            </thead>
            <tbody>
            <?php while ($row=mysqli_fetch_array($result)){?>
            <tr>
                <td><?php echo $row['first'];?></td>
                <td><?php echo $row['last'];?></td>
                <td><?php echo $row['iteration'];?></td>
                <td>
                <a href="#" class="btn btn-success" role="button">Edit numbere</a>
                <a href="#" class="btn btn-danger" role="button">Delete numbere</a>
                </td>
            </tr>
            <?php}?>
            </tbody>
        </table>
    </div>
    </div>
</div>

</body>
</html>

