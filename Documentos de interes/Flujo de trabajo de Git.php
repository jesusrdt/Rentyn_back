* Ramas 

link repositorio: https://github.com/rentyn/Rentyn_back.git

master -> principal
dev -> copia de master, en ella se realizan los merge que se vayan solicitando.
-------------------------------------------------------------------

Flujo de trabajo de Git

1. Descargar rama dev y preparar area de trabajo
	
	(Clonar rama dev)
	git clone -b dev https://github.com/rentyn/Rentyn_back.git

	(Crear rama local para realizar sus acrtividades)
	git checkout -b NOMBRE_DE_SU_RAMA

2. Desarrollo de actividades

	Realizar sus actividades sobre la rama creada a partir de la rama "dev", una vez terminado subir los cambios a su rama en el repositorio

	git add -A
	git commit -m "Titulo detallado de lo que se esta subiendo"
	git push origin NOMBRE_DE_SU_RAMA

	Una vez realizado lo anterior moverse a la rama dev local

	git checkout dev

	(Bajar los ultimos cambios en el repositorio)
	git pull origin dev

	(Moverse a su rama local)
	git checkout NOMBRE_DE_SU_RAMA

	(Realizar merge con la rama dev)
	git merge dev

	Esto lo vamos a hacer para confirmar que no existan conflictos al realizar el merge con la rama principal. En caso de existir conflictos resolverlos de forma local y repetis la secuencia.

3. Realizar pull request

	Si todo lo anterior funciono, ahora es momento de realizar un pull request para probar los cambios en produccion.

	Ingresar a gitHub y realizar una peticion de pull request, e indicar detalladamente que contiene la version con la que se realizara el merge

4. Prueba

	Si llegamos a este punto y no se han presentado conflictos se aceptara el pull request y las personas encargadas de realizar las pruebas tendran que ejecutar en su rama dev local

	git pull origin dev

	Luego de esto se realizaran las pruebas correspondiente al modulo que fue descrito en el pull request.

5. Version de produccion

	Si todas las pruebas fueron exitosas es hora de realizar el merge de la rama master con dev y montar la version a produccion/servidor de prueba