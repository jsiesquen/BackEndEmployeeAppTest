# BackEnd Employees App Test

**Problema:**
Se desea realizar un pequeño prototipo de aplicación web que tiene como finalidad registrar y evaluar a los empleados de la empresa Developers SAC. 
Para ello se tiene un archivo llamado **employees.json** donde se encuentra una estructura inicial de empleados. 
En primer lugar, se desea generar como pantalla inicial el listado de todos los empleados considerando los siguientes campos:
* name, email, position, salary

Seguidamente, en el mismo listado se debe mostrar un barra de búsqueda por email.
En segundo lugar, se desea acceder al detalle de cada empleado donde se debe realizar un resumen de los siguientes campos:
* name, email, phone, address, position, salary, skills

Finalmente, se desea liberar un servicio web en formato XML que permita buscar los empleados de acuerdo a un rango de salario mínimo y máximo. 
Ejemplo:
Obtener todos los empleados que tienen salario entre 1000 y 1500 dólares.

**Resolución:**
* Soporte: Laravel 5.6 + LCollective-HTML en conjunto con Bootstrap 3.3.7 y Material Design for Bootstrap 3.
* Ambiente Desarrollo: Vagrant 2.0.1 (Homestead Box), PHP 7, MySQL 5. 

**Laravel Route List**

<p align="center"><a href="https://www.dropbox.com/s/coqu3gj5u9zf8ep/RouteList.png?dl=0">View Image</a></p>

**REST Web Service Documentation**

*Available Operations (whitout Authentication):*

* **getEmployees** - GET http://employees.app/api/employees
* **getSalary** - GET http://employees.app/api/salaries?start=1000&end=1495.45[&page=1]
