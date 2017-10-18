var app = angular.module("myApp",["ngRoute"]);


app.config(function($routeProvider){
  $routeProvider
  .when("/",{
       templateUrl:"temp/home.html",
       controller:"homeCtrl"
  })
  .when("/all-posts",{
       templateUrl:"temp/all-posts.html",
       controller:"allostsCtrl"
  })
  .when("/new-post",{
       templateUrl:"temp/new-post.html",
       controller:"newpostCtrl"
  })
});

app.controller("homeCtrl",function($scope){
//$scope.name = "ranjeet";
});

app.controller("allostsCtrl",function($scope){

});

app.controller("newpostCtrl",function($scope){
 $scope.insert = {};
 $scope.postInsert = function(){
    
 }


  
});

