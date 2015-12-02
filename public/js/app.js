"use strict";

(function() {
	var app = angular.module('ccmilk', []);
	
	app.controller('ccmilkController', ['$http', '$filter', function($http, $filter)
	{			
		var store = this;
		store.productList = [];
		$http.get('/getProductList').success(function(data){
			store.productList = data;
			
		});
		
		this.addOneProduct = function (product) {
			if (!checkMaxProductReached()) {
				product.countBought = product.countBought + 1;
			}			
		};
		
		var calculateTotalCountBought = function (products) {
			var totalCountBought = 0;
			for(var i = 0, len = products.length; i < len; i++) {
				console.log(products[i].countBought);
				totalCountBought += products[i].countBought;  
			}			
			console.log(totalCountBought);
			return totalCountBought;	
			
		};
		
		var checkMaxProductReached = function ()
		{
			
			return 6 < calculateTotalCountBought($filter('filter')(store.productList, {pack_type: 1}, true));
			
		};
		
		this.boughtMoreThan0 = function (item) {
			return item.countBought > 0;
		};
		
		this.calculateTotalPrice = function (products) {
			var totalPrice = 0;
			for(var i = 0, len = products.length; i < len; i++) {
				totalPrice += products[i].price * products[i].countBought;  
			}			
			return totalPrice / 100;			
		};

	}]);

})();