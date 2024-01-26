<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./CSS/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title></title>
  </head>
  <body>
    <div ng-app="myApp" ng-controller="myController">
      <div class="grootblok">
        <div id='myForm'>
          <form >
            <input type="hidden" ng-model="id">
            <p>voornaam:</p> <input type="text" ng-model="voornaam" />
            <p>achternaam:</p>  <input type="text" ng-model="achternaam"/>
            <p>straatnaam:</p> <input type="text" ng-model="straat"/>
            <p>huisnummer:</p> <input type="text" ng-model="huisnummer"/>
            <p>postcode:</p> <input type="text" ng-model="postcode"/>
            <p>plaats:</p> <input type="text" ng-model="plaats" />
            <p>telefoonnummer:</p> <input type="text" ng-model="telefoonnummer"/>
            <br><br>
            <button type="submit" name="button" ng-click="insertdata()">insert</button>
            <button type="submit" name="button" ng-click="update()">update</button>
          </form>
        </div>
      <div class="blok2">
        <table>
          <tr id="titles">
            <th>voornaam</th>
            <th ng-click="sortData('achternaam')">achternaam<div ng-class="getSortClass('plaats')"></div></th>
            <th>straatnaam</th>
            <th>huisnummer</th>
            <th>postcode</th>
            <th ng-click="sortData('plaats')">plaats<div ng-class="getSortClass('plaats')"></div></th>
            <th>telefoonnummer</th>
          </tr>
          <tr ng-repeat="x in names | orderBy:sortColumn:reverseSort">
            <td>{{ x.voornaam }}</td>
            <td>{{ x.achternaam }}</td>
            <td>{{ x.straat}}</td>
            <td>{{ x.huisnummer}}</td>
            <td>{{ x.postcode}}</td>
            <td>{{ x.plaats}}</td>
            <td>{{ x.telefoonnummer}}</td>
            <td><button  ng-click="deleteRecord(x.id)" type="submit" name="button">verwijderen</button></td>
            <td><button ng-click="updaterecord($index)" type="submit" name="button">bijwerken</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script src="./javascript/Database.js" charset="utf-8"></script>
</body>
</html>
