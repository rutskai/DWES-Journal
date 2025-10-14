<?php
#crea un programa que muestre la pregunta recibida y genere una respuesta de manera aleatoria entre un conjunto de respuestas predefinidas, 
#almacenadas en un array: Si, no, quizás, claro que sí, por supuesto que no, no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
#Este ejercicio se basa en el juego de la Bola 8 mágica.

function magic8Ball(string $question) : string{

$answers = [
    "Sí",
    "No",
    "Quizás",
    "Por supuesto",
    "Por supuesto que no",
    "No lo tengo claro",
    "Seguro",
    "YEAHHHHHHHHH",
    "Ni de coña",
    "Tal vez"
];

$randomAnswer = array_rand($answers);

return "Pregunta: $question\nRespuesta: $answers[$randomAnswer]";

}

echo magic8Ball("Voy a morir mañana?");


?>