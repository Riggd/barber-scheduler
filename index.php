<?php // DEREK   [ https://web-project-ryanwiesjahn.c9users.io/drock/ ]
    echo "php is working Good job!";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Angular Scheduling</title>
  
    <!-- CSS -->
    <!-- Import Ryan's Stylesheet -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/journal/bootstrap.min.css">
    <link rel="stylesheet" href="scss/_compiled/styles.css">
  
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0/angular.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/1.1.1/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.8.0/angularfire.min.js"></script>
    <script src="js/app.js"></script>
  </head>
  <body>
    <div class="container" ng-app="scheduleApp" ng-controller="mainController">
    
      <div class="page-header text-center">
        <h1>Promised Excellence Barbershop</h1>
      </div>
    
      <div class="row times">
        <div class="col-xs-4 text-center" ng-repeat="day in days">
          <h2>{{day.name}}</h2>
          <div class="time-slot" ng-repeat="slot in day.slots">
            <input type="checkbox" id="{{day.name}}-{{$index}}" ng-model="slot.booked" ng-disabled="slot.booked">
            <label for="{{day.name}}-{{$index}}">{{slot.time}}<br>
              <span ng-if="slot.booked">Booked</span>
              <span ng-if="!slot.booked">Available</span>
            </label>
          </div>
        </div>
      </div>
    
      <p class="text-center">
        <a href="#" class="btn btn-primary" ng-click="reset()">Reset</a>
      </p>
    
    </div>
  </body>
</html>