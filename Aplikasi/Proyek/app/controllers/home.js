angular.module('App').controller('HomeController',
function($rootScope, $scope, $http, $mdToast, $cookies){
  var self             = $scope;
  var root             = $rootScope;

  if(!root.isCookieExist()){ window.location.href = '#login'; }

  root.toolbar_menu = null;
	$rootScope.pagetitle = 'Home';

	self.myVar = false;

});

