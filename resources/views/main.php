<!DOCTYPE html>
<html lang="zh-Hans">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>


        <link href="css/bootstrap.min.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

		
		<script src="js/app.js"></script>
    </head>
    <body ng-app="ccmilk" ng-controller="ccmilkController as store">


        <div class="container">
            <div class="jumbotron">
                <h1>橙橙奶粉</h1>
            </div>
			{{store.productList}}
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">产品</h3>
                        </div>
                        <div style="height: 400px" class="panel-body">
                            <div data-ng-repeat="milk in store.products">
                                {{milk.name}} &nbsp;&nbsp;&nbsp;&nbsp;{{milk.price / 100 }}元
                                <div class="btn-group" role="group" >
                                    <button data-ng-click="milk.countBought = milk.countBought + 1" type="button" class="btn btn-default">+</button>
                                    <button data-ng-click="milk.countBought > 0 ? milk.countBought = milk.countBought - 1 : 0" type="button" class="btn btn-default">-</button>
                                </div>
                            </div>
                            <button style="position: absolute; bottom: 40px" class="btn btn-default" type="submit">下单</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">货单</h3>
                        </div>
                        <div style="height: 400px" class="panel-body">
                            <div data-ng-repeat="milk in store.products | filter : store.boughtMoreThan0">
                                {{milk.name}} &nbsp;&nbsp;&nbsp;&nbsp;{{milk.price * milk.countBought / 100 }}元
                            </div>

                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">历史订单</h3>
                        </div>
                        <div style="height: 400px" class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>