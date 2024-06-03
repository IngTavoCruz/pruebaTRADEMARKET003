1. ¿Qué es el virtual DOM y cómo funciona en React?
Es la representación ideal del DOM que se mantiene en memoria y se sincroniza con el DOM real, esto mediante el uso de la biblioteca ReactDOM.
JS puede manipular el DOM para interactuar con los usuarios,se les presenta una falsa representación de este, mientras que por detras se hacen los 
calculos pesados, y de esta manera no se congela la interacción entre la webApp y el usuario.

2. ¿Qué es Eloquent ORM en Laravel y cómo se utiliza?
Eloquent ORM (mapeo objeto-relacional) en Laravel, es una herramienta para interactuar con la base de datos de una manera sencilla.

Nota.- Cuando se utiliza Eloquent, cada tabla de base de datos tiene un "Modelo" correspondiente que se utiliza para interactuar con esa tabla. (Documentación oficial de Laravel11)

3. ¿Cuál es la diferencia entre useState y useReducer en React?
Ambas son para manejar el estado local de los componentes. useReducer te permite mover la lógica de actualización de estado de los controladores de eventos 
a una única función fuera de tu componente.

4. ¿Qué es CSRF y cómo lo maneja Laravel?
Los ataques CSRF (Cross-site request forgery) consisten en que un usuario envía muchas solicitudes no autorizadas a través de usuarios 
que sí están autorizados a hacerlas. Para contrarrestar estos ataques, Laravel implementa un token para cada usuario con sesión activa, 
de forma tal que solo dicho usuario pueda hacer solicitudes a su nombre.

5. ¿Cuáles son las mejores prácticas para escribir código JavaScript limpio y mantenible?
Utiliza nombres de variables claros y descriptivos
Comentarios con moderación
Escribe funciones cortas y concisas
Indentación clara
Desestructura tus objetos