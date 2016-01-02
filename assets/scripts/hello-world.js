angular.module('todoListApp')
	.directive('helloWorld', function() {
		return {
			template : "This is the hellow wold directive",
			restrict : "E"
		};
	});