var app = angular.module('myApp', []);

app.controller('myController', function($scope, $http) {

  $http.get("./php/data.php")
  .then(function (response) {
     console.log(response);
     $scope.names = response.data.records;
   });

  $scope.insertdata = function() {
    console.log("insert klik");
    $http({
      method: 'POST',
      url: './php/connect.php',
      data: {'voornaam':$scope.voornaam, 'achternaam':$scope.achternaam,'straat':$scope.straat,'huisnummer':$scope.huisnummer,'postcode':$scope.postcode,'plaats':$scope.plaats,'telefoonnummer':$scope.telefoonnummer}
    }).then((response) => {
      $http.get("./php/data.php")
      .then(function (response) {
        console.log(response);
        $scope.names = response.data.records;});
      console.log("Success!" + response.data);
    });
  }

  $scope.deleteRecord = function(id){
    console.log("delete klik");
    $http({
      method: 'POST',
      url: './php/Delete.php?id='+id,
      data: ''
    }).then((response) => {
      $http.get("./php/data.php")
      .then(function (response) {
        console.log(response);
        $scope.names = response.data.records;
      });
      console.log("Success!" + response.data);
    });
  }


  $scope.updaterecord = function(id){
    $scope.id = $scope.names[id].id;
    $scope.voornaam = $scope.names[id].voornaam;
    $scope.achternaam = $scope.names[id].achternaam;
    $scope.straat = $scope.names[id].straat;
    $scope.huisnummer = $scope.names[id].huisnummer;
    $scope.postcode = $scope.names[id].postcode;
    $scope.plaats = $scope.names[id].plaats;
    $scope.telefoonnummer = $scope.names[id].telefoonnummer;
  }


  $scope.update = function() {

      console.log('klik updateknop');

      $http({
        method: 'POST',
        url: './php/update.php',
        data: {'id': $scope.id, 'voornaam':$scope.voornaam,'achternaam':$scope.achternaam,'straat':$scope.straat,'huisnummer':$scope.huisnummer,'postcode':$scope.postcode,'plaats':$scope.plaats,'telefoonnummer':$scope.telefoonnummer}
      }).then((response) => {
        $http.get("./php/data.php")
        .then(function (response) {
          console.log(response);
          $scope.names = response.data.records;
        });
        console.log("Success!" + response.data);
      });


  }

    $scope.sortData = function(column){
      $scope.reverseSort = ($scope.sortColumn == column) ? !$scope.reverseSort : false;
      $scope.sortColumn = column;
    }

    $scope.getSortClass = function (column) {
      if ($scope.sortColumn == column ) {
        return $scope.reverseSort ? 'arrow-down' : 'arrow-up'
      }
    }

});
