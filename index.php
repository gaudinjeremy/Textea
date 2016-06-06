<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="GAUDIN Jérémy">
        <link rel="icon" href="">

        <title>Éditeur</title>

        <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/editeur.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="panel-title"><?php require_once('toolbar.php') ; ?></p>
                        </div>
                        <div id="editeur" class="panel-body" contentEditable="true"></div>
                    </div>

                </div>
            </div>

        </div>

        <?php require_once('modals.php') ; ?>

        <script src="dist/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/editeur.js"></script>

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

        </script>
    </body>
</html>
