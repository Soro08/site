<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap css files -->
        <link rel="stylesheet" type="text/css" href="css/bootstyle/bootstrap3.css">
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="stylesheet" href="css/footer.css">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
        <!-- font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


        <title>NaN presentation</title>
        <link rel="icon" type="image/png" href="img/logo-nan.png">
        <style>
            body{
                height: 100%;
            }

            body::before {
                content: '';
                width: 100%;
                background: linear-gradient(to bottom right,#390e4b, #390e4b);
                height: 50%;
                z-index: -8000;
                position: absolute;
                top: -200;
                left: 0;
                transform: skew(0deg,-3deg);
            }

            .centre{
                display: flex;
                align-content: center;
                align-items: center;
                height: 80vh;
            }

            .btn-valid{
                background: #00b5e9;;
                color: #fff;
                font-size:20px;
                border-radius: 0px;
            }

            .btn-valid:hover{
                background: #390e4b;
                color: #fff;
            }


        </style>
    </head>

    <body id="corps">

        <section style="height:70px; background:#390e4b;">
            
        </section>
        <section class="centre">
            <div class="container "> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" >
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                        <h1><strong>Desolé,</strong></h1>
                                    <p style="color:#4c5258;font-size: 20px;line-height: 1.5em;" >
                                        L'entrée à NaN par concours est fermé pour le moment; toutefois, si vous désirez quand même nous rejoindre,
                                        vous pouver suivre le cursus payant. Pour plus de détails, contacter-nous .

                                    </p>
                                </li>
                                
                                
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <a href="index.php"> <button type="button" class="btn btn-valid">retour à l'Accueil</button></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <?php include "includes/footer.php"; ?>
        
        
    </body>
</html>