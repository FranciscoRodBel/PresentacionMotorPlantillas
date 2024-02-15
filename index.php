<?php
    require_once 'vendor/autoload.php';

    //Indicamos en Twig la ubicación de las plantillas
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);

    //Definimos las variables que deseamos rellenar en las plantillas
    $variablesEmail = [
        'titulo' => 'Ejemplo Twig',
        'nombre' => 'CIFP Ceuta',
        'email' => 'cifpceuta@info.com',
        'asunto' => 'Actualización para uso de Twig'
    ];

    //Renderizamos con la plantilla 'index.html.twig'
    $plantillaHTML = $twig->render('index.html.twig', $variablesEmail);

    //Mostramos el resultado
    echo $plantillaHTML;
?>