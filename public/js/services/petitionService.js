// public/js/services/petitionService.js

angular.module('petitionService', [])

.factory('Petition', function($http) {

    return {
        // get all the comments
        get : function() {
             return $http.get('/api/petitions');
        },

        // save a comment (pass in comment data)
        save : function(petitionData) {
            return $http({
                method: 'POST',
                url: '/api/petitions',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(petitionData)
            });
        },

        // destroy a comment
        destroy : function(id) {
            // return $http.delete('/api/comments/' + id);
        }
    }
});