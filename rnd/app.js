
var App = angular.module('drag-and-drop', ['ngDragDrop']);

App.controller('oneCtrl', function($scope, $timeout) {
  $scope.list3 = [{'title': 'iPhone','count': '1'},{'title': 'iPod','count': '1'},{'title': 'iPad','count': '1'}];
console.log($scope.list3);
  $scope.list4 = [];

  // $scope.myfun = function(){
  // 	//alert("ok");

  //    console.log($scope.list4);
  // }

$scope.$watchCollection('list4',function(newValue,oldValue){
var unique = function(origArr) {
    var newArr = [],
        origLen = origArr.length,
        found, x, y;

    for (x = 0; x < origLen; x++) {
        found = undefined;
        for (y = 0; y < newArr.length; y++) {
            if (origArr[x] === newArr[y]) {
                found = true;
                break;
            }
        }
        if (!found) {
            newArr.push(origArr[x]);
        }
    }
    return newArr;
}
 $scope.list4 = unique($scope.list4);
     console.log($scope.list4);

});

});