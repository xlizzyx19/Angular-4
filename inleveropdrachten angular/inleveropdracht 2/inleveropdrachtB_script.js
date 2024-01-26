
    var app = angular
      .module('myApp', []);
      app.controller('myCtrl', function($scope){

        $scope.merk;
        $scope.kleur;
        $scope.kenteken;
        $scope.brandstof;
        $scope.deuren;
        $scope.prijs;

        var cars = [
            { merk:  "Mercedes-Benz", kleur: "Grijs", kenteken: "01-BEE-1", brandstof: "diesel", deuren: "5 deuren", prijs: "€130.000"},
            { merk: "Lamborghini", kleur: "Geel", kenteken: "57-DEE-9", brandstof: "diesel", deuren: "3 deuren", prijs: "€300.000"},
            { merk: "Ferrari", kleur: "Rood", kenteken: "90-ITA-3", brandstof: "benzine", deuren: "3 deuren", prijs: "€250.000"}
        ];
        $scope.cars = cars;
        $scope.sortColumn = "merk";
        $scope.reverseSort = false;

        $scope.sortData = function(column){
          $scope.reverseSort = ($scope.sortColumn == column) ? !$scope.reverseSort : false;
          $scope.sortColumn = column;
        }

        $scope.getSortClass = function (column) {
          if ($scope.sortColumn == column ) {
            return $scope.reverseSort ? 'arrow-down' : 'arrow-up'
          }
        }
        return '';
    });
