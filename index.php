<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nearest Neighbors</title>

    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-narrow.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="header clearfix">            
            <h3 class="text-muted">Nearest Neighbors</h3>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="input-group">            
                        <input type="text" name="K" class="form-control" placeholder="Masukkan nilai K">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Go!</button>
                        </span>
                    </div>
                </form>            
            </div>            
        </div>
        
                    
        <?php if (isset($_POST['K'])) {
                $k = $_POST['K'];

                include './result.php';
            } ?>        

        <footer class="footer">
            <p>&copy; Yosyafat, 030</p>
        </footer>

    </div> <!-- /container -->

    <!-- jQuery Slim (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./bootstrap/js/jquery.slim.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>