var app = angular.module('WoEApp', ['ui.router']);

app.config([
'$stateProvider',
'$urlRouterProvider',
function ($stateProvider, $urlRouterProvider) {

    $stateProvider
      .state('home', {
          url: '/home',
          templateUrl: '/home.html',
          controller: 'MainCtrl'
      })

    .state('login', {
        url: '/login',
        templateUrl: '/login.html',
        controller: 'LoginCtrl'
    })

    .state('create_account', {
        url: '/create_account',
        templateUrl: '/createAccount.html',
        controller: 'CreateAccountCtrl'
    });

    $urlRouterProvider.otherwise('create_account');
}]);

app.controller('MainCtrl', [
    '$scope',
    function ($scope) {
    }
]);

app.controller('CreateAccountCtrl', [
    '$scope',
    function ($scope) {

        $scope.createUser = function () {
            // Create the httprequest object
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:55421/api/users", false);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("username=" + $scope.user +
                     "&password=" + $scope.pass_one +
                     "&name=" + $scope.name
            );

            
        }
    }
]);

app.controller('LoginCtrl', [
    '$scope',
    function ($scope) {
        $scope.user = "";
        $scope.pass = "";

        $scope.checkCookie = function () {
            Window.alert("Login!");

            if (!document.cookie.match(/^(.*;)?woe-user=[^;]+(.*)?$/)) {
                Window.alert("Login!");
            }
        }

        $scope.login = function () {

        }
    }
]);