 var app = angular.module("insert",[]);
 app.controller("ctrl", function($scope, $http){

     $scope.enter = function(){
         alert("hii");
         
     $http.post(
         "api/insert_data.php",
         {'name':$scope.name, 'email':$scope.email, 'age':$scope.age}
     ).success(function(data){
         $scope.name = null;
         $scope.email = null;
         $scope.age = null;

     });
 }
});