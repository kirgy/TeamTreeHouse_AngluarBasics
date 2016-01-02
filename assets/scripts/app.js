angular.module("todoListApp", [])
	.controller('mainCtrl', function($scope) {
		$scope.helloWorld = function() {
			console.log("Hello there! This is the hello world controller function, in the mainCtrl.");
		};
	});