<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/base.php');
    $instance = new Sentences;
    $instance->getFileName();
    $instance->getRandomSentence();
    $instance->getSentenceAt(1);
    $instance->getSentencesCount();
    //$instance->addNewSentence("Nueva frase lolhahaxd");
?>
