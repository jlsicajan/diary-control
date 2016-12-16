var app = angular.module('Home', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('workController', function($scope, $http) {

    $scope.works = [];
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/api/works').
        success(function(data, status, headers, config) {
            $scope.works = data;
            $scope.loading = false;

        });
    }

    $scope.addWork = function() {
        console.log($scope.work.title)
        $scope.loading = true;

        $http.post('/api/works', {
            title: $scope.work.title
        }).success(function(data, status, headers, config) {
            $scope.works.push(data);
            $scope.work = '';
            $scope.loading = false;
            console.log(data)
        });
    };
    
    $scope.init();
});

