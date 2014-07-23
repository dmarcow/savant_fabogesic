function ControladorTareas($scope) {
  
  $scope.tareas = [{texto: 'Ser Super Heroico con AngularJS', hecho: true},
                   {texto: 'Crear una ap con angular', hecho: false}];

  $scope.agregarTarea = function() {
    $scope.tareas.push({texto: $scope.textoNuevaTarea, hecho: false});
    $scope.textoNuevaTarea = '';
  };

  $scope.restantes = function() {
    var cuenta = 0;
    angular.forEach($scope.tareas, function(tarea) {
      cuenta += tarea.hecho ? 0 : 1;
    });
    return cuenta;
  };

  $scope.eliminar = function() {
    var tareasViejas = $scope.tareas;
    $scope.tareas = [];
    angular.forEach(tareasViejas, function(tarea) {
      if (!tarea.hecho) $scope.tareas.push(tarea);
    });
  };

  $scope.getJSon = function() {
    $http({method: 'GET', url: '/app/json/menu.json'}).
      success(function(data, status, headers, config) {
        console.log(data)
        // this callback will be called asynchronously
        // when the response is available
      }).
      error(function(data, status, headers, config) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
  };

}