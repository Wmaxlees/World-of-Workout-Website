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
    });

    $urlRouterProvider.otherwise('login');
}]);

app.controller('MainCtrl', [
    '$scope',
    function ($scope) {
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