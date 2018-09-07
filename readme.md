## ITEM LIST
>Evaluación de conocimientos básicos de Laravel + Vue.js.

##Instrucciones

###Parte 1
>Clonar y crear una branch llamada `feature/parte-1` donde se deberá desarrollar lo siguiente
1. Crear y ejecutar migración llamara `create_items_table` para la tabla items la cual solamente contendrá los campos `id` y `name`
2. Implementar los métodos del controlador `ItemController` 
3. Generar las rutas correspondientes a los métodos del controlador en el archivo `routes/api.php`
4. En el componente `ItemComponent.vue` reemplazar el código de los métodos **fetchItems()**, **removeItem()** y **addItem()** utilizando **axios** o **ajax** para consumir las rutas creadas anteriormente.

##Parte 2
>Crear una nueva branch a partir llamada `feature/parte-2` a partir de `feature/parte-1`
1. Crear un formulario de edición de Items en el componente `ItemComponent` y generar la lógica correspondiente tanto en el backend como en el frontend para que funcione correctamente

##Parte 3
>Crear una nueva branch a partir llamada `feature/parte-3` a partir de `feature/parte-1`
1. Crear una migración llamada `alter_items_table` para alterar la tabla items agregando `softDeletes` (https://laravel.com/docs/5.5/eloquent#soft-deleting)
2. Crear una tabla similar dentro del componente **ItemComponent** a la tabla `#items_table` donde se muestren los items eliminados.

## Notas:

- Las tres ramas deben estar en el repositorio al que se le proporciono acceso
- Considere hacer varios commits para cada punto proporcionando una descripción en el mensaje del commit
- Se evaluara el orden y calidad en el código



- Mucho éxito...
