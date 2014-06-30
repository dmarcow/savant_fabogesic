// Llamamos al modulo
var app = angular.module('Fabogesic', []);
 
//Creamos la directiva loged
app.directive('loged', function(){
    return{
        restrict: 'E',
        template:   "<div>"+
                        "<b>Bienvenido</b><br>"+
                    "</div>",
        }
});

//focus directive
app.directive('myFocus', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            scope.$watch(attr.myFocus, function (n, o) {
                if (n != 0 && n) {
                    element[0].focus();
                }
            });
        }
    };
});
//blur directive
app.directive('myBlur', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            element.bind('blur', function () {
                //apply scope (attributes)
                scope.$apply(attr.myBlur);
                //return scope value for focusing to false
                scope.$eval(attr.myFocus + '=false');
            });
        }
    };
});
 
// Creamos un controlador llamado loginCtrl
function loginCtrl($scope, $http) {    


    $scope.validateForm = function() {

        $scope.focusField1 = false;
        $scope.focusField2 = false;
        $scope.focusField3 = false;
        $scope.focusField4 = false;

        if ( $scope.nombre != undefined ){
            $scope.usererror = '';
            if ( $scope.apellido != undefined ){
                $scope.passerror = '';
                if ( $scope.asunto != undefined ){
	                $scope.asunerror = '';
	                if ( $scope.mensaje != undefined ){
		                $scope.menserror = '';
		                doLogin();
		            }else{
		                $scope.aviso = 'Complete el campo mensaje';
		                $scope.menserror = 'has-error';
		                $scope.focusField1 = false;
		                $scope.focusField2 = false;
		                $scope.focusField3 = false;
	        			$scope.focusField4 = true;
		            }
	            }else{
	                $scope.aviso = 'Complete el campo asunto';
	                $scope.asunerror = 'has-error';
	                $scope.focusField1 = false;
	                $scope.focusField2 = false;
	                $scope.focusField3 = true;
        			$scope.focusField4 = false;
	            }
            }else{
                $scope.aviso = 'Complete el campo apellido';
                $scope.passerror = 'has-error';
                $scope.focusField1 = false;
                $scope.focusField2 = true;
                $scope.focusField3 = false;
        		$scope.focusField4 = false;
            }
        }else{
            $scope.aviso = 'Complete el campo nombre';
            $scope.usererror = 'has-error';
            $scope.focusField1 = true;
            $scope.focusField2 = false;
            $scope.focusField3 = false;
        	$scope.focusField4 = false;
        }

    }


    // if ( $scope.apellido != undefined ){
    //             //doLogin();
    //             $scope.passerror = '';
    //         }else{
    //             $scope.aviso = 'Complete el campo apellido';
    //             $scope.passerror = 'has-error';
    //             $scope.focusField1 = false;
    //             $scope.focusField2 = true;
    //         }

    //al mo mento que le den click al ng-click doLogin() ejecutamos la funcion
    function doLogin() {
        
        $scope.focusField1 = false;
        $scope.focusField2 = false;
        $scope.focusField3 = false;
        $scope.focusField4 = false;

        console.log($scope.nombre);

        /* 
            Arma JSon para envío a PHP
        */
        var formData = { 
            nombre      : $scope.nombre, 
            apellido    : $scope.apellido,
            asunto      : $scope.asunto,
            mensaje     : $scope.mensaje
        };
        var postData = 'myData=' + JSON.stringify(formData);
        /* 
            $http es similar a AJAX de jQuery con una funcionalidad muy similar
            pero lo que si son iguales es que son llamadas AJAX, elijes metodo,
            destino, datos a enviar etc.  
        */
        $http({
            //usaremos el metodo POST para enviar los datos
            method: 'POST', 
            //seleccionamos a  que URL llegara la informacion
            url: 'http://www.fabogesic.com/app/themes/fabogesic/assets/php/contacto.php',
            //codificamos el contenido
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            //esta es la informacion que vamos a mandar
            data: postData
        }).
        // si la peticion ajax se realizo con exito se ejecuta success
        success(function(data, status) {

            //$scope.data = data;
            if(data.response == 'Sent'){
                $scope.aviso = 'El mensaje ha sido enviado.';
            }else{
                $scope.aviso = 'Hubo un error. Intente nuevamente en unos minutos.';
            }
			$scope.nombre = "";
			$scope.apellido = "";
			$scope.asunto = "";
			$scope.mensaje = "";

        }).
        //si la peticion ajax NO fue exitosa se ejecuta error
        error(function(data, status) {
            $scope.data = data || "FALSE";
            $scope.status = status;  
            $scope.aviso = 'Ha pasado algo inesperado';
        });
    };
}



	