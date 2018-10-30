<?php
    class Sentences{
        const FILENAME = 'frases.txt';
        private $sentences;

        public function __construct(){
            echo "A new Sentences object has been created using " . self::FILENAME . " as data source. \n";
            $this->sentences = json_decode(file_get_contents(self::FILENAME));

        }
        
        public function getFileName() {
            echo "The source file is: " . self::FILENAME . "\n";
        }

        public function getRandomSentence() {
            echo $this->sentences[mt_rand(0, sizeof($this->sentences)-1)] . " \n";
        }

        public function getSentenceAt($index) {
            echo $this->sentences[$index] . "\n";
        }

        public function getSentencesCount() {
            echo count($this->sentences) . "\n";
        }

        public function addNewSentence($newSentence) {
            array_push($this->sentences, $newSentence);
            file_put_contents( self::FILENAME, json_encode( $this->sentences ) );
        }
    }
?>