<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/register', function () {
    return redirect('/login');
});

Route::get('/home', 'HomeController@index');

Route::resource('roles', 'RolesController');

Route::resource('usuariosRols', 'UsuariosRolController');

Route::resource('usuarios', 'UsuariosController');

Route::resource('estados', 'EstadosController');

Route::resource('tipoConceptos', 'TipoConceptosController');

Route::resource('conceptos', 'ConceptosController');

Route::resource('permisos', 'PermisosController');

Route::resource('valoresConceptos', 'ValoresConceptoController');

Route::resource('tipoIdentificacions', 'TipoIdentificacionController');

Route::resource('personas', 'PersonasController');

Route::resource('combos', 'CombosController');

Route::resource('vehiculos', 'VehiculosController');

Route::resource('galeriaVehiculos', 'GaleriaVehiculosController');

Route::resource('galeriaVehiculos', 'GaleriaVehiculosController');

Route::resource('equipos', 'EquiposController');

Route::resource('estadoFacturas', 'EstadoFacturaController');

Route::resource('estadoComandas', 'EstadoComandaController');

Route::resource('descuentos', 'DescuentoController'); 

Route::resource('proveedores', 'ProveedoresController');

Route::resource('combos', 'CombosController');

Route::resource('comandas', 'ComandaController');
Route::get('buscar_concepto/{comanda}','ComandaController@buscar_concepto');
Route::get('comandas_h/','ComandaController@historial');
Route::get('comandas_h_s/{comanda}','ComandaController@show2');

Route::get('comandas/concepto_valor/{comanda}',["as" => "concepto_valor", "uses" => "ComandaController@valor_concepto"] );
Route::get('comandas/valor_concepto_descuento/{comanda}',["as" => "valor_concepto_descuento", "uses" => "ComandaController@valor_concepto_descuento"] );

Route::get('comandas/calcular_subtotal/{comanda}',["as" => "calcular_subtotal", "uses" => "ComandaController@calcular_subtotal"] );

Route::get('comandas/facturar/{comanda}',["as" => "facturar", "uses" => "ComandaController@facturar"] );

Route::resource('lavados', 'LavadoController');

Route::resource('comandaDetalles', 'ComandaDetalleController');

Route::resource('equipoPersonas', 'EquipoPersonasController');

Route::resource('marcas', 'MarcaController');

Route::resource('lineas', 'LineaController');
Route::get('lineas_marca/{marca}','LineaController@marca');

Route::resource('remisions', 'RemisionController');

Route::resource('configuracions', 'ConfiguracionController');

Route::resource('administrativos', 'AdministrativoController');

Route::get('procesos/',["as" => "procesos", "uses" => "ProcesosController@index"] );
Route::get('procesos/administrativo',["as" => "procesos_admin", "uses" => "ProcesosController@Administrativo"] );
Route::get('procesos/lavadero',["as" => "procesos_lavadero", "uses" => "ProcesosController@Lavadero"] );
Route::get('procesos/cargar',["as" => "procesos_cargar", "uses" => "ProcesosController@Cargar"] );

Route::resource('gananciaAdministrivos', 'GananciaAdministrivoController');


Route::get('reportes/v_ingresosyegresos',["as"=>"v_ingresosyegresos","uses"=>"ReportesController@v_ingresosyegresos"]);
Route::get('reportes/ingresosyegresos',["as"=>"ingresosyegresos","uses"=>"ReportesController@ingresosyegresos"]);


Route::get('reportes2/v_admin_lavadores',["as"=>"v_admin_lavadores","uses"=>"ReportesController@v_admin_lavadores"]);
Route::get('reportes2/adminlavadores',["as"=>"adminlavadores","uses"=>"ReportesController@adminlavadores"]);

Route::get('reportes3/v_salida_entrada',["as"=>"v_salida_entrada","uses"=>"ReportesController@v_salida_entrada"]);
Route::get('reportes3/salidaentrada',["as"=>"salidaentrada","uses"=>"ReportesController@salidaentrada"]);


Route::get('buscar_propietario/{vehiculo}',["as"=>"buscar_propietario","uses"=>"ComandaController@buscar_propietario"]);

Route::post('comandaDetallesAjax', 'ComandaDetalleController@storeAjax');

Route::post('enquiry', 'EnquiryController@index');

Route::get('nuevos_clientes/','GraficasController@nuevos_clientes');

Route::resource('departamentos', 'DepartamentosController');

Route::resource('municipios', 'MunicipiosController');

Route::resource('categorias', 'CategoriasController');

Route::resource('productos', 'ProductosController');