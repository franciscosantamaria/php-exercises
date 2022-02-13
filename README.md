# Ejercicio de PHP

Repositorio con un listado de ejercicios para practicar con arrays, strings y familiarizarse con la 
sintaxis básica de PHP.

Cada directorio contiene un fichero php llamado ejercicio.php en donde están las instrucciones que se tienen
que realizar (habitualmente  implementar una función).

Luego hay un fichero llamado Test.php que prueba dicha implementación con algunos tests para ver que la
implementación es la correcta. 

## Instalación
Es necesario tener instalado PHP y composer en local ó simplemente docker y docker-compose

### Docker
La manera más sencilla si tenéis instalado docker y docker-compose.

Antes de levantar el contenedor tenemos que modificar el fichero _docker-compose.yml_ y sustituir los valores de user y uid por los que correspondan.

En el fichero _docker-compose.yml_ están **kiko** y **1000**

Ejecutar lo siguiente:

```shell
docker-compose up -d
```

Para 'entrar' en el contenedor utilizaremos la opción **-u** para indicar el usuario creado anteriormente:

```shell
docker-compose exec -u kiko php bash
```

Una vez dentro del contenedor ya tendréis la versión 8.1 de PHP y composer para poder ejecutar correctamente
los tests.

El último paso será instalar las dependencias ejecutando:

```shell
composer install
```

## Ejecución de los tests

```shell
composer test ej2
```
Con eso ejecutarías los tests para el ejercicio ej2.
