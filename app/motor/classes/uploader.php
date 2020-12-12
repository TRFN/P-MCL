<?php
    class uploader {
        private $dir = null;

        function __construct($security=-1){
            $this->dir = dirname(dirname(__DIR__)) . "/uploads";
        }

        public function file($name){
            return $this->dir . "/{$name}.b64";
        }

        public function read($name){
            return $this->exist($name) ? file_get_contents($this->file($name)):"notfound";
        }

        public function upload($name,$data){
            return file_put_contents($this->file($name),$data);
        }

        public function exist($name){
            return file_exists($this->file($name));
        }

        public function unlink($name){
            if($this->exist($name)){
                unlink($this->file($name));
            }
        }
    }
?>
