<!-- app/views/index.php -->
<!doctype html> 
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $petition_info[0][0]->title; ?></title>
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
   <div class="container">
      <div class="col-md-8 col-md-offset-2">
         <div class="page-header">
            <h4><?php echo $petition_info[0][0]->title; ?></h4>
         </div>
         <?php echo $petition_info[0][0]->summary; ?>
      </div>
   </div>
   <div class="container" ng-controller="signatureController" ng-init= "save_id(<?php echo var_export($petition_info[0][0]->petition_key); ?>);" >
      <div class="col-md-8 col-md-offset-2">
         <div class="page-header">
            <h4>Ready to sign our petition?</h4>
         </div>
         <form ng-submit="submitSignature()">
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="firstname" ng-model="signatureData.firstname" placeholder="First Name">
            </div>
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="lastname" ng-model="signatureData.lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="email" ng-model="signatureData.email" placeholder="Email Address">
            </div>
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="phone" ng-model="signatureData.phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="message" ng-model="signatureData.message" placeholder="Leave a message!">
            </div>
            <div class="form-group text-right">   
               <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
         </form>
         <div class="signature" ng-repeat="signature in signatures"> 
            <h4>{{ signature.firstname }} {{ signature.lastname }} <small>{{ signature.email }}</small></h4>
            <div>{{ signature.message }}</div>
         </div>
   </div>
   </body>  
</html>