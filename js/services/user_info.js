app.factory('user_info', ['$http', function($http) {
    return
    $http.get('http://localhost:55421/api/users