<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
        

        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            body{
                background-color: rgb(241, 240, 240)
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .spaced-contend{
                display: flex;
                align-items: center;
                justify-content: space-between
            }

            table, th, td {
                text-align: center
            }

            .product-container, .categories-container{
                width: 90%;
                margin: 1rem auto
            }

            .navbar-brand{
                padding: 10px
            }
        </style>
    </head>
    <body>
        @yield('conteudo')
    </body>
</html>