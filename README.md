### Instructions:

Requisitos de instalacion para uso del aplicativo:

1. Se debe tener instalado xampp o wamp para un entorno local.
2. El directorio de la aplicación debe ubicarse en la ruta del entorno local:
  - Ejemplo : C:\xampp\htdocs\Imanku
3. Crear la base de datos SQL:
 - Desplegar el siguiente script:
ELECTIONS.SLQ - Base de datos: elections.

Cuando cumpla con los requisitos estara lista para iniciar la aplicación:
- Debe entrar en la URL solo en local:
 http://localhost/imanku/index.php

Para cargar y limpiar los datos de counties.Xlsx lo siguiente:

- Ingrese a la URL local:
 http://localhost/imanku/cargarxlsx.php

si lo datos son cargados correctamente va a obtener un mensaje:
"completed successfully!"

Para cargar y limpiar los datos de elections.json lo siguiente:

- Ingrese a la URL local:
 http://localhost/imanku/cargarJson.php

si lo datos son cargados correctamente va a obtener un mensaje:
"Inserted 46689 records successfully"

# System Elections
######El sistema de elecciones cuenta con un login para el ingreso del coordinador de votaciones. Si el login es válido, el coordinador será redirigido al formulario de Election que se utiliza para registrar los datos de las votaciones.

#####Login:

![login](a "login")](https://i.ibb.co/hHvy01W/Opera-Instant-nea-2022-12-30-095434-localhost.png "login")

#####Form Elections:
![frm Election](frm Election "frm Election")](https://i.ibb.co/hRXV3QX/Opera-Instant-nea-2022-12-30-095924-localhost.png "frm Election")

######Cuenta con una grafica que representa el conteo de votaciones por año y por partido.

#####Chart Elections:
![chart](chart "chart")](https://i.ibb.co/2tfBZdC/Opera-Instant-nea-2022-12-30-100515-localhost.png "chart")

![](https://i.ibb.co/vkpRvGf/Imanku-Colombia.png)



