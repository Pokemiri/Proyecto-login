Proyecto UserManager:

En este proyecto he implementado un sistema de autenticación y administración de usuarios. 

Esto incluye un registro, un login, un sistema de crear usuarios, una validación de edad mínima y un control de roles. 

Los usuarios con el rol de admin pueden editar y eliminar cuentas desde un panel de administración.

Características principales:

Registro de usuarios:
- Nombre y contraseña

Creacion de usuarios:
- Nombre, edad, email y rol
- Validación de edad mínima (18 años)
- Asignación del rol por defecto: user

Inicio de sesión:
- Validacion con consultas preparadas
- Verificacion del estado del usuario

Sistema de roles:
- user: acceso básico
- admin: acceso al panel de gestión

Panel de administración:
- Listado de usuarios
- Edición de datos (nombre, email, rol, edad)
- Eliminación de usuarios

Seguridad:
- Contraseñas encriptadas
- Validación de formularios
