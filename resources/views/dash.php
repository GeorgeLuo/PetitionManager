<!-- app/views/index.php -->
<!doctype html> 
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Petitions Dashboard</title>
      <!-- CSS -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
      <!-- load bootstrap via cdn -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
      <!-- load fontawesome -->
      <style>
         body        { padding-top:30px; }
         form        { padding-bottom:20px; }
         .comment    { padding-bottom:20px; }
      </style>
      <!-- JS -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script> <!-- load angular -->
      <script type="text/javascript">
      </script>   
      <!-- ANGULAR -->
      <!-- all angular resources will be loaded from the /public folder -->
      <script src="/js/controllers/petitionCtrl.js"></script> <!-- load our controller -->
      <script src="/js/controllers/signatureCtrl.js"></script> <!-- load our controller -->
      <script src="/js/services/signatureService.js"></script> <!-- load our service -->
      <script src="/js/services/petitionService.js"></script> <!-- load our service -->
      <script src="/js/app.js"></script> <!-- load our application -->
   </head>
   <body ng-app="petitionApp">
   <!-- declare our angular app and controller --> 
   <div class="container" ng-controller="petitionController">
      <div class="col-md-8 col-md-offset-2">
         <!-- PAGE TITLE =============================================== -->
         <div class="page-header">
      <div class="form-group text-right">   
          <input type="button" class="btn btn-primary btn-sm" value="Open Dashboard" onclick="location.href = '/login';">

         <!-- <button class="btn btn-primary btn-sm" href="/login">Open Dashboard</button> -->
      </div>         </div>
         <div class="petition" ng-repeat="petition in petitions"> 
            <h3>{{ petition.title }} <a href="{{ petition.petition_key }}"><small>{{ petition.petition_key }}</small></a></h3>
            <div><small>{{ petition.summary }}</small></div>
         </div>
   </div>
   </body>  
</html>