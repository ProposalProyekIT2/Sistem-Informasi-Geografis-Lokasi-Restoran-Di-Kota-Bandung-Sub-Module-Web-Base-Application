angular.module('App').controller('PlaceController',
function($rootScope, $scope, $http, $mdToast, $mdDialog, $route, services){
  var self             = $scope;
  var root             = $rootScope;

  if(!root.isCookieExist()){ window.location.href = '#login'; }

  if(root.sub_obj == ''){ root.pagetitle = 'Semua Tempat'; }
  self.loading         = true;

	root.toolbar_menu    = { title: 'Add Place' }
	root.barAction =  function(ev) {
    root.clearCurPlace();
    window.location.href = '#add_place';
  }

  function loadPages() {
    self.places = null;
	$limit = self.paging.limit;
	$current = (self.paging.current * self.paging.limit) - self.paging.limit + 1;
    if(self.paging.current == self.paging.total && self.paging.modulo_item > 0){
       self.limit = self.paging.modulo_item;
    }
    services.getPlacesByPage($current, $limit, root.sub_obj).then(function(resp){
      self.places = resp.data;
      self.loading = false;
    });
  }

  self.deletePlace = function(ev, p) {
    var confirm = $mdDialog.confirm().title('Delete Confirmation')
      .content('Are you sure want to delete Place : '+p.name+' ?')
      .targetEvent(ev).ok('OK').cancel('CANCEL');

    $mdDialog.show(confirm).then(function() {
      services.deletePlace(p.place_id).then(function(res){
        if(res.status == 'success'){
          $mdToast.show($mdToast.simple().hideDelay(1000).content('Delete Place '+p.name+' Success!').position('bottom right')).then(function() {
            window.location.reload();
          });
        }else{
          $mdToast.show($mdToast.simple().hideDelay(6000).action('CLOSE').content('Opps , Failed delete Place '+p.name).position('bottom right'))
          .then(function(response){});
        }
      });
    }, function() {

    });

  };

  self.editPlace = function(ev, p) {
    root.setCurPlace(p);
    window.location.href = '#add_place';
  };

  self.detailsPlace = function(ev, p) {
    $mdDialog.show({
      controller          : DetailsPlaceControllerDialog,
      templateUrl         : 'views/place/details.html',
      parent              : angular.element(document.body),
      targetEvent         : ev,
      clickOutsideToClose : true,
      place               : p
    })
  };
  
  //pagination property
  self.paging = {
    total : 0, // total page
    current : 1, // start page
    step : 3, // count number display
    limit : 10, // max item per page
    modulo_item : 0, 
    onPageChanged: loadPages,
  };

  services.getPlaceCount(root.sub_obj).then(function(resp){
    self.paging.total = Math.ceil(resp.data / self.paging.limit);
    self.paging.modulo_item = resp.data % self.paging.limit;
  });

});

function DetailsPlaceControllerDialog($scope, $mdDialog, services, $mdToast, $route, place) {
  var self        = $scope;
  self.place      = place;
  self.categories = [];
  self.images     = [];
  self.hide   = function() {
    $mdDialog.hide();
  };

  services.getCategoriesByPlaceId(self.place.place_id).then(function(resp){
    self.categories = resp.data;
  });

  services.imagesByPlaceId(self.place.place_id).then(function(resp){
    self.images = resp.data;
  });

  self.cancel = function() {
    $mdDialog.cancel();
  };
  
}
