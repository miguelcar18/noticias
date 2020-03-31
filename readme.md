## Proyecto de noticias para pruebas

- El formulario de usuario contendrá nombre, email, contraseña, confirmar contraseña y select multiple o checkboxes con las categorias de los articulos encontrados en la base de datos. Todos los campos son obligatorios

- El formulario de articulos/noticias contendrá titulo, subtitulo, noticia y la categoría a la cual pertenece la noticia. Todos los campos son obligatorios a excepcion del subtitulo.

- El formulario de categorías contendrá el nombre y la descripción. Solo el nombre es obligatorio.

- Los roles de usuarios serán administrador y periodista.

- Tanto administradores como periodistas podrán registrar articulos/noticias.

- Los administradores pueden acceder al listado, edición y eliminación de un articulo/noticia de cualquier usuario. Los periodistas solo podrán listar, editar y eliminar sus propios articulos/noticias.

- Al registrarse un nuevo usuario se debe de enviar una notificación al administrador de que un nuevo usuario se ha registrado. Se debe indicar en el correo el email y el nombre del usuario.

- Al registrarse un nuevo artículo se debe de enviar una notificación a los usuarios que esten asociados a la categoría a la que pertenece el articulo.
El usuario podrá asociarse a una o varias categorías.

- Solo el administrador podrá registrar, editar y eliminar categorias.

- Tanto usuarios como noticias solo pueden ser eliminados de forma lógica y no de forma física. El administrador podrá listar los usuarios que fueron eliminados.