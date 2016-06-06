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
        <style>
            body {padding-top: 0px;}
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body onload="window.print()">
        <div id="editeur"></div>

        <script src="dist/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script>

            Page = decodeURIComponent(sessionStorage.getItem('page'));
        	if (Page != 'undefined') {

        		$('#editeur').html(Page) ;
                $('.editView').removeClass('edit');

                // Ajout de la balise '!important' sur les couleurs et les fond afin de les forcer lors de l'impression
                block = $('#editeur')[0] ;
                span = block.getElementsByTagName("span");
                var i;
                for (i = 0; i < span.length; i++) {

                	color = span[i].style.color ;
                    span[i].style.setProperty("color", color, "important");

                    bgColor = span[i].style.backgroundColor ;
                    span[i].style.setProperty("background-color", bgColor, "important");
                } ;
        	}
        </script>
    </body>
</html>
