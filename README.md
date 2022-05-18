<p align="center">
    <img src="https://github.com/GeeksHubsAcademy/2020-geekshubs-media/blob/master/image/logo.png" >	
</p>


    Considere el siguiente problema:

    Dado el siguiente abecedario con letras estándares :
	
	abcdefghijklmnopqrstuvwxyz
	
	Se quiere calcular el número de posiciones de cada letra respecto a la última aparición de la misma en la formación 
    de una cadena indicándolo en la salida de un array con las posiciones del abecedario.

	Ejemplo:

	Input => 'abacba'
	Resultado => [6, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

	Explicación:

	La letra a = 6 dado que la palabra empieza por 'a' y acaba por 'a'.
	El número de posición desde la primera aparición hasta la última son 6
	a(1),b(2),a(3),c(4),b(5),a(6)

	La letra b = 4 dado que la letra 'b' está en la segunda posición y la útima aparición en la quinta.
	b(1),a(2),c(3),b(4)
	
	La letra c = 1 dado que la letra 'c' solo aparece una vez.
	c(1)


	Los inputs de entrada se restringen de la siguiente manera :

	5 ≤ palabra.length ≤ 50

	No se contemplan otros casos.



    En la carpeta 'src/Palabreitor.php' se encuentra el fichero con la definición de nuestros métodos vacíos.
    En la carpeta 'test/PalabreitorTest.php' se encuentra el fichero con la suite de test.

    El modus operandi de trabajo es el siguiente:
    
    Debes 'forkear' el proyecto a tu cuenta.
    Puedes hacer PR's ilimitadas e ir validando poco a poco la solución contra nuestro respositorio con CI.
    Puedes trabajar en local y subir la solución haciendo un PR a nuestro repositorio.
    Cuando se envíe la PR final, debes indicar el tiempo de dedicación y los intentos que has hecho.
    También puedes añadir un comentario para dar cualquier tipo de feedback.
    
    En caso de duda, revisa en el apartado de 'Referencias'.

    Runtime:       PHP 7.2
    Configuration: ./205-ts-php/phpunit.xml

    Time: 00:04.223, Memory: 02.23 MB

    .................                                                                           19 / 19 (100%)
   
    OK (19 tests, 19 assertions)
    Process finished with exit code 0
