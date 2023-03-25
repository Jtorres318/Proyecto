Create Database Telcomundo;
use Telcomundo;

Create Table Personas (id char (10)primary key, persona_nombre varchar (20)not null, persona_fecha_nacimiento varchar (40) not null,
persona_edad varchar (50) not null, persona_correo varchar (60) not null,
persona_telefono varchar (70) not null, persona_direccion varchar (80) not null,
persona_sexo varchar (90) not null, persona_usuario varchar (100) not null, 
persona_contraseña varchar (110) not null, persona_bonificaciones varchar (120) not null, 
persona_descuentos varchar (130) not null, persona_valor_descuento varchar (140) not  null,
persona_valor_bonificaciones varchar (150));

Create Table Sucursales (id char (20) primary key, sucursal_nombre varchar (30)not null,
sucursal_direccion varchar (40)not null, sucursal_correo varchar (50)not null,
sucursal_telefono varchar (60));

Create Table Ciudad (id char (40) primary key, ciudad_calle varchar (50)not null, ciudad_carrera varchar (50)not null,
ciudad_nombre varchar (60)not null, ciudad_estrato varchar (70));	

Create Table Rol (id char (60) primary key, rol_nombre varchar (70)not null, rol_permisos varchar (80));

Create Table Correo_persona (id char (80) primary key, correo varchar (90));

Create Table Telefono_persona (id char (50) primary key, telefono varchar (60));

Create Table Vendes (id char (40) primary key, producto varchar (50));

Create Table Producto (id char (10) primary key, producto_fecha_instalacion varchar (20)not null, producto_fecha_digitacion varchar (30)not null,
producto_tipo varchar (40)not null, producto_precio varchar (50)not null, producto_servicios varchar (60)not null,
producto_comision varchar (70)not null, producto_ofertas varchar (80)not null, producto_convengencia varchar (90));