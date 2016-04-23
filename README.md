# sivio
Sistema Información Integrada sobre la gestión de Rectoría para la Atención y Prevención de la  Violencia contra las Mujeres, SIVIO del INAMU

## Instalación

### Clonar
´´´bash
git clone https://github.com/bsolano/sivio.git
´´´

### Instalar dependencias
´´´bash
composer update
´´´´

### Crear copia de ´config/app´
Craer una *copia* del archivo ´config/app.default.php´ y renombrarlo a ´config/app.php´

´´´bash
cd config/
cp app.default.php app.php
´´´

### Base de datos

Ir a ´app.php´ buscar ´datasource´ y cambiar
* **host**
* **nombre de la base de datos**
* **username**
* **password**

Por los datos que brindó el profe por correo electrónico.