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
    <body ng-app="ccmilk" >
        <div class="container">
            <div class="jumbotron">
                <h1>橙橙奶粉</h1>
            </div>
			
            <div class="row" ng-controller="ccmilkController as store">			
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">产品aaa</h3>
                        </div>
                        <div style="height: 420px" class="panel-body">		
			
							<table class="table" style="overflow: auto; display: block; height: 328px;">
								
								<tr  data-ng-repeat="product in store.productList">
									<td style="width: 300px;">{{product.brand}} {{product.specs}} {{product.pack_style}} {{product.weight}}g</td>
									<td style="width: 100px;">{{product.price / 100 }}元</td> 
									<td style="width: 105px;">
										<div class="btn-group" role="group" >
											<button class="btn btn-default btn-sm" ng-click="store.addOneProduct(product)" type="button" class="btn btn-default">+</button>
											<button class="btn btn-default btn-sm" ng-click="product.countBought > 0 ? product.countBought = product.countBought - 1 : 0" type="button" class="btn btn-default">-</button>
										</div>
									</td>
								</tr>
							</table>                              
                                
                          
                            <button style="position: absolute; bottom: 40px" class="btn btn-default" type="submit">下单</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">货单</h3>
                        </div>
                        <div style="height: 400px" class="panel-body">
                            <div data-ng-repeat="product in store.productList | filter : store.boughtMoreThan0">
								<span class="pull-left" style=" width: 290px;">{{product.brand}} {{product.specs}} {{product.pack_style}} {{product.weight}}g</span>
								<span class="pull-left" style=" width: 60px;">&times;{{product.countBought}}</span>
								<span class="pull-left" style=" width: 100px;">{{product.price * product.countBought / 100 }}元</span>                                
                            </div>
							
							<br style="clear: both;">
							<br>							
							
							<div ng-show="store.calculateTotalPrice((store.productList | filter : store.boughtMoreThan0))">
								共计： {{store.calculateTotalPrice((store.productList | filter : store.boughtMoreThan0))}}元
							</div>

                        </div>
                    </div>
                </div>               
            </div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">历史订单</h3>
				</div>
				<div style="height: 400px" class="panel-body">

				</div>
			</div>
        </div>
    </body>
</html>