angular.module('signatureCtrl', [])

// inject the Comment service into our controller
.controller('signatureController', function($scope, $http, $location, Signature) {
    // object to hold all the data for the new comment form
    $scope.signatures = [];
    $scope.petition_id = '';

    $scope.save_id = function (p_id) {
                if (p_id) {
                    $scope.petition_id = p_id;

                    Signature.get(p_id).then(successCallback, errorCallback);
                        function successCallback(response){
                            $scope.signatures = response.data;
                        }
                        function errorCallback(error){
                            //error code
                        }
                }
            };

    $scope.submitSignature = function() {
        $scope.loading = true;

        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Signature.save($scope.signatureData, $scope.petition_id).then(successCallback, errorCallback);
                        function successCallback(response){
                            console.log(response);
                            Signature.get($scope.petition_id).then(successCallback, errorCallback);
                                                    function successCallback(response){
                                                        $scope.signatures = response.data;
                                                    }
                                                    function errorCallback(error){
                                                        //error code
                                                    }
                        }
                        function errorCallback(error){
                            //error code
                        }
    };

});