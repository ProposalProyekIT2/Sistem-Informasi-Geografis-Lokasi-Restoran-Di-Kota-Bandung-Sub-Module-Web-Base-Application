
angular.module('App', [ 'ngMaterial', 'ngRoute', 'ngMessages', 'ngCookies', 'ngSanitize', 'cl.paging']);

angular.module('App').config(function($mdThemingProvider) {

    // Extend the cyan theme with a few different colors
    var blueGrey = $mdThemingProvider.extendPalette('cyan', {
      '500': '568AB7',
      'contrastDefaultColor': 'light'
    });

    // Extend the amber theme with a few different colors
    var lightAmber = $mdThemingProvider.extendPalette('amber', {
      '500': 'E6C14D'
    });

    // Register the new color palette
    $mdThemingProvider.definePalette('blueGrey', blueGrey);

    // Register the new color palette
    $mdThemingProvider.definePalette('lightAmber', lightAmber);

    $mdThemingProvider.theme('default')
    .primaryPalette('blueGrey')
    .accentPalette('lightAmber');
  }
);

angular.module('App').config(['$routeProvider', function($routeProvider) {
    $routeProvider.
     when('/home', {
        templateUrl : 'views/home/home.html',
        controller  : 'HomeController'
      }).
      when('/place', {
        templateUrl : 'views/place/place.html',
        controller  : 'PlaceController'
      }).
      when('/add_place', {
        templateUrl : 'views/place/create.html',
        controller  : 'AddPlaceController'
      }).
      
      when('/setting', {
        templateUrl : 'views/setting/setting.html',
        controller  : 'SettingController'
      }).
      when('/about', {
        templateUrl : 'views/about/about.html',
        controller  : 'AboutController'
        }).
      when('/map', {
        templateUrl : 'views/map/Map.php',
       
      }).
      when('/login', {
        templateUrl : 'views/login/login.html',
        controller  : 'LoginController'
      }).
      otherwise({
        redirectTo  : '/login'
      });
}]);

angular.module('App').run(function($location, $rootScope, $cookies) {
  $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
    // $rootScope.title = current.$$route.title;
  });
});
