
var app = angular.module('app', ['ui.bootstrap', 'ngSanitize'])
// app.constant('config', { 'url': 'https://cdmypeunicaesilobasco.com' })
app.constant('config', { 'url': 'http://localhost:8000' })


.factory('RequestInterceptor', ['CSRF_TOKEN', function(CSRF_TOKEN) {
    var requestInterceptor = {request: function(config) {
        config.headers['x-session-token'] = CSRF_TOKEN._token; return config; 
    }};
    return requestInterceptor; 
}])

.config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.useXDomain = true; 
    $httpProvider.interceptors.push('RequestInterceptor'); 
    $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    $httpProvider.defaults.headers['Content-Type'] = 'application/json; charset=utf-8';

     //initialize get if not there
    if (!$httpProvider.defaults.headers.get) {
        $httpProvider.defaults.headers.get = {};    
    }    

    // Answer edited to include suggestions from comments
    // because previous version of code introduced browser-related errors

    //disable IE ajax request caching
    $httpProvider.defaults.headers.get['If-Modified-Since'] = 'Mon, 26 Jul 1997 05:00:00 GMT';
    // extra
    $httpProvider.defaults.headers.get['Cache-Control'] = 'no-cache';
    $httpProvider.defaults.headers.get['Pragma'] = 'no-cache';
}])

app.controller('AuthCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.login = {};
    $scope.loading = false;

    $scope.login = function () {
        var modalInstance = $uibModal.open({
          animation: true,
          templateUrl: '/app/views/login.html',
          controller: function($scope, login){
                $scope.login = login;
                $scope.loading = false;
                 console.log('si');
                $scope.submit = function(){
                    console.log($scope.login);
                    $scope.loading = true;
                    $http.post(config.url + '/login', $scope.login, {headers: {'Content-Type': 'application/json'}}).
                    then(function(data){
                        $scope.loading = false;
                        $scope.msj = data.data.msj;
                        $scope.login = {};
                        console.log(data);
                        location.reload();
                    }, function(data){
                        $scope.loading = false;
                        $scope.alert =  data.data.error;
                        console.log(data);
                    });
                }

                $scope.cancel = function () { modalInstance.dismiss('cancel'); };
          },
          resolve: { 
                login: function () { return $scope.producto; }
            }
        });

    };

    $scope.register = function () {
        var modalInstance = $uibModal.open({
          animation: true,
          templateUrl: '/app/views/registro.html',
          controller: function($scope, login){
                $scope.login = login;
                $scope.loading = false;
                 console.log('si');
                $scope.submit = function(){
                    console.log($scope.login);
                    $scope.loading = true;
                    $http.post(config.url + '/register', $scope.login, {headers: {'Content-Type': 'application/json'}}).
                    then(function(data){
                        $scope.loading = false;
                        $scope.msj = data.data.msj;
                        $scope.login = {};
                        console.log(data);
                        location.reload();
                    }, function(data){
                        $scope.loading = false;
                        $scope.alert =  data.data.error;
                        console.log(data);
                    });
                }

                $scope.cancel = function () { modalInstance.dismiss('cancel'); };
          },
          resolve: { 
                login: function () { return $scope.producto; }
            }
        });

    };

    $scope.logout = function(){
        $http.post(config.url + '/logout', {headers: {'Content-Type': 'application/json'}}).
        then(function(data){
            console.log(data);
            location.reload();
        }, function(data){
            console.log(data);
        });
    }


}])

app.controller('ActividadesCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.aplicacion = {};
    $scope.loading = false;

    

    $scope.aplicacion.actividad_id = document.getElementById('actividad_id').value;

    $scope.aplicar = function () {

        console.log($scope.aplicacion);
        
        $http.post(config.url + '/actividad/aplicacion', $scope.aplicacion, {headers: {'Content-Type': 'application/json'}}).
        then(function(data){

            if(data.status == 200){
               swal("Listo", "Aplicación enviada !", "success", {timer: 6000, buttons:true});
               $scope.aplicacion = {};
            }else{
                swal("Error", "No se han podido enviar los datos !", "success", {timer: 6000, buttons:true});
            }
            
            console.log(data);

        }, function(data){
            
           
        });

    };

}])


app.controller('MainCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.carrito = {};

    $http.get(config.url + '/carrito', {headers: {'Content-Type': 'application/json'}}).
    then(function(data){
        $scope.carrito = data.data.carrito;
    }, function(data){
        console.log(data);
    });

    $scope.$on('carrito', function () {
        $scope.loading = true;
        $http.get(config.url + '/carrito', {headers: {'Content-Type': 'application/json'}}).
        then(function(data){
            $scope.carrito = data.data.carrito;
        }, function(data){
            console.log(data);
        });
    });

}])

app.controller('ContactosCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.correo = {};
    $scope.loading = false;
    $scope.msj = '';

    $scope.onSubmit = function(){
        console.log($scope.correo);
        $scope.loading = true;
        $http.post(config.url + '/contactos', $scope.correo, {headers: {'Content-Type': 'application/json'}}).
        then(function(data){
            $scope.loading = false;
            $scope.msj = data.data.msj;
            $scope.correo = {};
            console.log(data);
        }, function(data){
            console.log(data);
        });
    }


}])

app.controller('RegistroCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.empresa = {};
    $scope.empresario = {};

    $http.get(config.url + '/registro', {headers: {'Content-Type': 'application/json'}}).
    then(function(data){
        $scope.empresario = data.data.empresario;
        $scope.empresa = data.data.empresa;
    }, function(data){
        console.log(data);
    });

    $scope.submit = function () {
        $scope.loading = true;

        $http.post(config.url + '/api/empresa', $scope.empresa, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            console.log(data.data);
        }, function(data) {$scope.loading = false; console.log(data); });

        $http.post(config.url + '/api/empresario', $scope.empresario, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            console.log(data.data);
        }, function(data) {$scope.loading = false; console.log(data); });

    }
            // swal("Agregado", "ya está en tu carrito de compras !", "success", {timer: 2000, buttons:false});

    $scope.addFavorito = function(producto_id){
        var producto = {};
        producto.producto_id = producto_id;
        $http.post(config.url + '/cuenta/favorito', producto, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            $('#favorito'+producto_id).addClass('text-danger');
            swal("Agregado", "ya está en tu lista de favoritos !", "success", {timer: 2000, buttons:false});
        }, function(data) {
            if (data.status == 401) {
                swal("Inicia sesión", "para agregar productos a tu lista de favoritos !", "warning").then((value) => {
                    window.location.replace(config.url + '/login');
                });
            }
            console.log(data);
        });
    }

    $scope.comentario = {};
    
    $scope.crear = function () {
        var modalInstance = $uibModal.open({
          animation: true,
          templateUrl: '/app/views/form-comentario.html',
          controller: function($scope, comentario, producto){
                $scope.comentario = comentario;
                $scope.comentario.producto_id = producto.id;
                $scope.loading = false;

                $scope.submit = function () {
                    $scope.loading = true;
                    $http.post(config.url + '/tienda/producto/comentario', $scope.comentario, {headers: {'Content-Type': 'application/json'}}).
                    then(function(data) {
                        $scope.loading = false;
                        $scope.comentario = {};
                        producto.comentarios.unshift(data.data);
                        producto.reviews += 1;
                        modalInstance.dismiss('cancel');
                        swal("Agregado", "Gracias por tu comentario !", "success");
                    }, function(data) {
                        $scope.loading = false;
                  });

                }

                $scope.cancel = function () { modalInstance.dismiss('cancel'); };
          },
          resolve: { 
                producto: function () { return $scope.producto; },
                comentario: function () { return $scope.comentario; },
            }
        });

    };

}])

app.controller('CarritoCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    $scope.carrito = {};
    $scope.loading = false;

    $scope.load = function(){
        $scope.loading = true;
        $http.get(config.url + '/carrito', {headers: {'Content-Type': 'application/json'}}).
        then(function(data){
            $scope.carrito = data.data.carrito;
            $scope.loading = false;
        }, function(data){
            $scope.loading = false;
        });
    }

    $scope.delete = function (detalle) {
        $http.post(config.url + '/tienda/producto/eliminar/'+ detalle.id, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            $scope.carrito = data.data.carrito;
            $scope.$emit('carrito');
            $scope.loading = false;
        }, function(data) {
            $scope.loading = false;
            console.log(data);
        });

    }

    $scope.promocion = function (promo_code) {
        $http.post(config.url + '/tienda/promocion/' + promo_code, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            $scope.carrito = data.data.carrito;
            $scope.$emit('carrito');
            swal("Agregado", "Código verificado con exito", "success");
            $scope.loading = false;
        }, function(data) {
            $scope.loading = false;
            swal("No se pudo agregar", data.data.error, "warning");
            console.log(data);
        });

    }

}])

app.controller('UsuarioCtrl', [ '$scope', '$http', 'config', '$uibModal', function($scope, $http, config, $uibModal){
    
    $scope.usuario = {};
    $scope.historial = [];
    $scope.direccion = {};
    $scope.loading = false;

    $scope.load = function(){
        $scope.loading = true;
        $http.get(config.url + '/cuenta', {headers: {'Content-Type': 'application/json'}}).
        then(function(data){
            $scope.usuario = data.data.usuario;
            $scope.historial = data.data.historial;
            $scope.loading = false;
        }, function(data){
            $scope.loading = false;
        });
    }

    $scope.meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $scope.dias = [];
    $scope.anios = [];
    for(let i = 1; i <= 31; i ++) { $scope.dias.push(i); }
    for(let i = 2005; i >= 1940; i--) { $scope.anios.push(i); }

    $scope.submit = function () {
        $scope.loading = true;
        console.log($scope.usuario);
        $http.post(config.url + '/cuenta', this.usuario, {headers: {'Content-Type': 'application/json'}}).
        then(function(data) {
            $scope.usuario = data.data.usuario;
            $scope.loading = false;
            console.log(data);
            swal("Guardado", "su cuenta se ha actualizado !", "success", {timer: 2000, buttons: false});
        }, function(data) {
            $scope.loading = false;
            console.log(data);
        });

    }

    $scope.editar = function(direccion){
        $scope.direccion = direccion;
        this.crear();
    }

    $scope.crear = function () {
        var modalInstance = $uibModal.open({
          animation: true,
          templateUrl: 'app/views/form-direccion-cliente.html',
          windowClass:'full', backdrop : 'static',
          controller: function($scope, usuario, direccion){
                $scope.error = '';
                $scope.usuario = usuario;
                $scope.direccion = direccion;
                $scope.direccion.cliente_id = usuario.id;

                $scope.submit = function () {
                    $scope.loading = true;
                    $http.post(config.url + '/api/cliente/direccion', this.direccion).then(function(data) {
                        $scope.loading = false;
                        if (!direccion.id) {
                            $scope.usuario.direcciones.push(data.data);
                        }
                        modalInstance.dismiss('cancel');
                    }, function(data) {
                        $scope.loading = false;
                        $scope.error = data.data.error;
                  });

                }

                $scope.cancel = function () {
                   modalInstance.dismiss('cancel');
                };
          },
          resolve: {
            usuario: function () {return $scope.usuario; },
            direccion: function () {return $scope.direccion; }
          }
        });

        modalInstance.result.then(function (selectedItem) {
          $scope.selected = selectedItem;
        }, function () {
          $log.info('modal-component dismissed at: ' + new Date());
        });
    };

    $scope.tarjetas = function () {
        var modalInstance = $uibModal.open({
          animation: true,
          templateUrl: 'app/views/form-tarjeta-cliente.html',
          controller: function($scope, usuario){
                $scope.usuario = usuario;
                $scope.tarjeta = {};
                $scope.tarjeta.cliente_id = usuario.id;

                $scope.submit = function () {
                    $scope.loading = true;
                    $http.post(config.url + '/api/cliente/tarjeta', this.tarjeta).then(function(data) {
                        $scope.loading = false;
                        $scope.usuario.tarjetas.push(data.data);
                        modalInstance.dismiss('cancel');
                    }, function(data) {
                        $scope.loading = false;
                  });

                }

                $scope.cancel = function () {
                   modalInstance.dismiss('cancel');
                };
          },
          resolve: {
            usuario: function () {
              return $scope.usuario;
            }
          }
        });

        modalInstance.result.then(function (selectedItem) {
          $scope.selected = selectedItem;
        }, function () {
          $log.info('modal-component dismissed at: ' + new Date());
        });
    };

    $scope.quitarFavorito = function(favorito){
        
        swal({
          title: "Estas seguro?",
          text: "Deseas quitar el producto de tus favoritos!",
          icon: "warning",
          buttons: ["No", "Si"],
          dangerMode: true,
        })
        .then((eliminar) => {
          if (eliminar) {
            $http.post(config.url + '/cuenta/favorito/eliminar', favorito, {headers: {'Content-Type': 'application/json'}}).
            then(function(data) {
                $('#favorito'+favorito.id).removeClass('text-danger');
                swal("Eliminado", "se ha quitado de tu lista de favoritos !", "success", {timer: 2000, buttons:false});
                for (var i in $scope.usuario.favoritos ) {
                    if ($scope.usuario.favoritos[i].id === favorito.id ){
                        $scope.usuario.favoritos.splice(i, 1);
                    }
                }

            }, function(data) {
                console.log(data);
            });
          }
        });

    }

}]);