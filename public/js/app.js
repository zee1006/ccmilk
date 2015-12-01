(function() {
	var app = angular.module('ccmilk', []);
	
	app.controller('ccmilkController', ['$http', function($http)
	{
		var store = this;
		store.productList = [];
		$http.get('/getProductList').success(function(data){
			store.productList = data;
			
		});
		
		this.boughtMoreThan0 = function (item) {
			return item.countBought > 0;
		};

	}]);

})();