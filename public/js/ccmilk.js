"use strict";

app.controller('ccmilkController', function($scope)
{
    $scope.data = [
        {
            id: 10001,
            name: 'Aptamil pre',
            price: 19000,
            countBought: 0
        },
        {
            id: 10002,
            name: 'Aptamil 1',
            price: 19000,
            countBought: 0
        },
        {
            id: 10003,
            name: 'Aptamil 2',
            price: 19000,
            countBought: 0
        },
        {
            id: 10004,
            name: 'Aptamil 3',
            price: 19000,
            countBought: 0
        },
        {
            id: 10005,
            name: 'Aptamil 1+',
            price: 19000,
            countBought: 0
        },
        {
            id: 10006,
            name: 'Aptamil 2+',
            price: 19000,
            countBought: 0
        }
    ];

    $scope.boughtMoreThan0 = function (item) {
        return item.countBought > 0;
    };

});