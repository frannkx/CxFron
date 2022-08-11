
/*
/////////////////////////////////////////////////////////////
/////////////////// Creacion de BD //////////////////////////
/////////////////////////////////////////////////////////////
*/

/*CREATE DATABASE base_cifrada DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;*/

/*CREATE DATABASE CX DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;*/

/*ALTER TABLE `general` COLLATE='utf8_general_ci';*/

/*mysqldump -u admin -p --default-character-set=utf8 cx general > general.sql*/

/*mysql -p cx < general.sql*/

/*ALTER TABLE general DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ;*/

/*Referencia: https://softwareyotrasdesvirtudes.com/2012/10/09/como-modificar-tablas-a-utf8-mysql/*/

/* Export database */
/* mysqldump --user=root --password="" bitnami_wordpress > bitnami_wordpress.sql

/* Restore database */
/* Crear una bd vacia
/* mysql --user=root --password="" -e "CREATE DATABASE myblog"
/* mysql --user=root --password="" --database=myblog < bitnami_wordpress.sql



/*
/////////////////////////////////////////////////////////////
/////////////////// Creacion de Usuarios ////////////////////
/////////////////////////////////////////////////////////////
*/

CREATE USER 'sm'@'%' IDENTIFIED BY '0ri0n';

GRANT SELECT, INSERT, UPDATE, DELETE ON cx.* TO 'sm'@'%';

FLUSH PRIVILEGES;

/* Pruebas
DROP USER 'sm'@'%';
SELECT user, host FROM mysql.user;
*/

/*
/////////////////////////////////////////////////////////////
/////////////////// Creacion de Tablas //////////////////////
/////////////////////////////////////////////////////////////
*/
use cx;

CREATE TABLE GENERAL (
    CUENTA_MADRE varchar(255),
    RAZON_SOCIAL varchar(255),
    RUT_RUC varchar(255),
    SN_HANA varchar(255) PRIMARY KEY,
    PAIS varchar(255),
    DIRECCION varchar(255),
    CIUDAD varchar(255),
    WEB varchar(255),
    TAMANO varchar(255),
    ACTIVIDAD_ECONOMICA varchar(255), 
    CLIENTE_DESDE varchar(255),
    SECTOR varchar(255),
    SEGMENTO varchar(255),
    TIPO_CLIENTE varchar(255),
    SM varchar(255),
    KAM varchar(255)
);

/*
Para ver luego
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1  COLLATE latin1_spanish_ci;
*/


/*/////////////// ENCRYPTION AES //////////////*
Reference:
https://dev.mysql.com/doc/refman/5.7/en///encryption-functions.html
*/

CREATE TABLE USUARIO(
    ID INT NOT NULL PRIMARY KEY,
    NOMBRE varchar(50) NOT NULL,
    EMAIL varchar(320) NOT NULL,
    CONTRASENA  varbinary(32)
);


/* CONFIGURATION OF BLOCK ENCRYPTION MODE*/
SET block_encryption_mode = 'aes-256-cbc';
SET @key_str = SHA2('My secret passphrase',512);
SET @init_vector = RANDOM_BYTES(16);
SET @crypt_str = AES_ENCRYPT('texto',@key_str,@init_vector);
SELECT AES_DECRYPT(@crypt_str,@key_str,@init_vector);

/* TEST OF INSERT WITH ENCRYPTION*/
INSERT INTO USUARIO (ID, NOMBRE, EMAIL, CONTRASENA) VALUES (
    1, 
    "Francisco",
    "francisco@email.com",
    @crypt_str
);

/* QUERY WITH A COLUMN ENCRYPTED*/
SELECT ID, NOMBRE, EMAIL, AES_DECRYPT(CONTRASENA,@key_str,@init_vector) AS CONTRASENA from USUARIO;


/*
/////////////////////////////////////////////////////////////
/////////////////// Referencias Generales ///////////////////
/////////////////////////////////////////////////////////////

https://dev.mysql.com/doc/refman/5.7/en/

*/