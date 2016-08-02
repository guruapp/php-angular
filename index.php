<?Php


include("dbcon.inc");
?>
<DOCTYPE html>
<html ng-app="root">
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
	<script type="text/javascript">
 angular.module("root",[]).controller("sohen", function ($scope, $http){
 
 $scope.url = "index.php";
 $scope.submit = function (){


              

                $http.post($scope.url, {"name": $scope.name, "email": $scope.email, "username": $scope.username}).
                        success(function(data, status) {
                            console.log(data); // success
                            $scope.status = status;
                            $scope.data = data;
                            $scope.result = data; 
                        })
            

        }
 
 });
	</script>
<title>Sohnim</title>
</head>
<body>
	
<form ng-controller="sohen" ng-submit="submit()">

<input type="text" name="name" ng-model="name">
<input type="text" name="email" ng-model="email">
<input type="text" name="username" ng-model="username">
<input type="submit" id="submit" value="submit">
</form>
</body>
</html>