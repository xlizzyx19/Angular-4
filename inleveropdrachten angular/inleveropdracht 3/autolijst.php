<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
   <link rel="stylesheet" href="Angular.css">
 </head>
<body>
  <div ng-app="myApp" ng-controller="customersCtrl">
  <table>
  <tr ng-repeat="x in names">
   <td>{{ x.Name }}</td>
   <td>{{ x.adres }}</td>
   <td>{{ x.telnr }}</td>
   <td>{{ x.City }}</td>
  </tr>
  </table>
  </div>
  <script>
  var app = angular.module('myApp', []);
  app.controller('customersCtrl', function($scope, $http) {
  $http.get("auto.php")
  .then(function (response) {$scope.names =
  response.data.records;});
  });
  </script>
</body>
</html>
