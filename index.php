<html>
<head>
	<title>
		My Todos
	</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="/assets/css/site.css" />
</head>
<body ng-app="todoListApp" class="ng-scope">

	<h1>My todos</h1>
	<div class="list" ng-controller="mainCtrl">
		<input ng-model="todo.completed" type="checkbox"/>
		<label ng-hide="editing" class="editing-label">{{todo.name}}</label>
		<input ng-model="todo.name" ng-show="editing" class="editing-label" type="text"/>
		<div class="actions">
			<a ng-click="editing = !editing" href="" class="edit">Edit</a>
			<a href="" class="save" ng-click="helloWorld()">Save</a>
			<a href="" class="delete">Delete</a>
		</div>
	</div>

	<script type="text/javascript" src="/assets/scripts/angular.js"></script>
	<script type="text/javascript" src="/assets/scripts/app.js"></script>
</body>
</html>