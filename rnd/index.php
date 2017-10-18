<!DOCTYPE html>
<html ng-app="drag-and-drop">
  <head lang="en">
    <meta charset="utf-8">
    <title>Drag & Drop: Multiple listsr</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script> 
    <script src="drag-drop.js"></script>
    <script src="app.js"></script>
 
  </head>



  <body ng-controller="oneCtrl">

     
     


        
       
          <ul>
            <li   ng-repeat='item in list3'  data-drag="true" data-jqyoui-options="{revert: 'invalid', helper: 'clone'}" ng-model="list3" jqyoui-draggable="{index: {{$index}}, placeholder: 'keep'}">{{item.title}}</li>
          </ul>
      <!--  //,onStop:myfun() -->
   
 
  
       
       
            <ul class="drop"  data-drop="true" ng-model='list4' jqyoui-droppable="{multiple:true}">
                <li ng-repeat="item in list4 track by $index " ng-show="item.title" data-drag="true" data-jqyoui-options="{revert: 'invalid'}" ng-model="list4" jqyoui-draggable="{index: {{$index}},animate:true}">{{item.title}}</li>
               
            </ul>
       
  
  </body>
</html>
<style type="text/css">
	.drop{background: red;padding: 10px;}
</style>


