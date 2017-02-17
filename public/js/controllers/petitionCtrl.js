angular.module('petitionCtrl', [])

// inject the Comment service into our controller
.controller('petitionController', function($scope, $http, $location, Petition) {
    $scope.petitions = [];

    Petition.get().then(successCallback, errorCallback);
        function successCallback(response){
            $scope.petitions = response.data;
        }
        function errorCallback(error){
            //error code
        }

});