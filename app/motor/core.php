<?php
    class motor {
        private $mimeTypes = array();
        private $dirs = array();

        function __construct(){

        }

        public function MIMESet($type,$ext){
            if(!is_array($ext)){
                $ext = array($ext);
            }

            foreach($ext as $extensao){
                $this->mimeTypes[$extensao] = $type;
            }
        }

        public function dirAdd($dir,$params=array()){
            $this->dirs[(string)$dir] = $params;
        }
    }
