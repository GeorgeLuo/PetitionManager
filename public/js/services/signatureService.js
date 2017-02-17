// public/js/services/signatureService.js

angular.module('signatureService', [])

.factory('Signature', function($http) {

    return {
        // get all the comments
        get : function(petition_id) {
             return $http.get('/api/signatures/' + petition_id);
        },

        // save a comment (pass in comment data)
        save : function(signatureData, petition_id) {
            console.log(signatureData);
            return $http({
                method: 'POST',
                url: '/api/signatures/' + petition_id,
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(signatureData)
            });
        },
    }

});