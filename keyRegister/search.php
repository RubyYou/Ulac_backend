<!DOCTYPE html>
<html ng-app="myApp"> 
<head>
	<title>search for Registered User info</title>
	<link href="js/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div ng-controller="searchCrtl">
	<label for="search"> Search for Registered User info .... </label>
	<div>PageSize:
		<select ng-model="entryLimit" class="form-control">
			<option>5</option>
			<option>10</option>
			<option>20</option>
			<option>50</option>
			<option>100</option>
		</select>
	</div>
	<div>Filter:
		<input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
	</div>
	<div>
		<h5>Filtered {{ filtered.length }} of {{ totalItems}} total customers</h5>
	</div>

	<div ng-show="filteredItems > 0">
		<table >
		<thead>
			<th>Name&nbsp;<a ng-click="sort_by('name');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>Phone&nbsp;<a ng-click="sort_by('phone');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>Email&nbsp;
				<a ng-click="sort_by('email');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>City&nbsp;
				<a ng-click="sort_by('city');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>Address&nbsp;
				<a ng-click="sort_by('address');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>Lock Model&nbsp;
				<a ng-click="sort_by('lockModel');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
			<th>Key # or Combination&nbsp;
				<a ng-click="sort_by('key_combination');">
				<i class="glyphicon glyphicon-sort"></i></a>
			</th>
		</thead>
		<tbody>
			<tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
			<td>{{data.name}}</td>
			<td>{{data.phone}}</td>
			<td>{{data.email}}</td>
			<td>{{data.city}}</td>
			<td>{{data.address}}</td>
			<td>{{data.lockModel}}</td>
			<td>{{data.key_combination}}</td>
			</tr>
		</tbody>
		</table>
	</div>

</div>

<style>
	body{
		width:80%;
		margin:20px auto;
	}
	table{
		border: 1px solid black;
	}
	thead{
		background: #ccc;
	}
	th a{
		cursor: pointer;
	}
	td{
		padding:7px;
	}
	input{
    border:1px solid black;
    outline:none;
	}
	input.ng-invalid{
	    border-color: red;
	}
</style>

<!--JS start-->
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>