<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'INSERT INTO movie (movie_name,movie_type, movie_year,
	movie_leadactor, movie_director)
	VALUES ("Jumanji", 1,2022, 1, 2),
	("No apages la luz",2,2017,2,1),
	("Ocho apellidos catalanes",3,2015,3,3)';

mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype (movietype_label)
	VALUES ("Ficcion"),
		("Terror"),
		("Comedia")';

mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO people(people_fullname, people_isactor, people_isdirector)
	VALUES ("Pedro",1,1),
		("Benito",1,1),
		("Martina",1,1)';

mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Foreign Key constraint se ha añadido correctamente';
?>