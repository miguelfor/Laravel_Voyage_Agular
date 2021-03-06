<!DOCTYPE html>
<!--le decimos a nuestra página que vamos a utilizar el módulo app que hemos creado-->
<html ng-app="app">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Carrito de compras con AngularJS</title>
  <link rel="stylesheet"  href="css/normalize.css"  media="screen" />
  <link rel="stylesheet"  href="css/foundation.min.css" media="screen" />   
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <!--cdn con la version 1.2.4 de angular.js-->
  <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
  <!--cdn con el modulo ngRoute de angular-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
  <!--cargamos el modulo cart-->
  <script type="text/javascript" src="js/cart.js"></script>
  <!--archivo app.js, donde hemos definido nuestro modulo app-->
  <script type='text/javascript' src="js/app.js"></script>
</head>
    <body>
      <!--directiva ng-view, aquí cargara todo el contenido-->
        <div ng-view></div>
    </body>
</html>
