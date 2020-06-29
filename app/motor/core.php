<?php
    class motor {
        private $mimeTypes = array();

        public function MIMESet($type,$ext){
            if(!is_array($ext)){
                $ext = array($ext);
            }

            foreach($ext as $extensao){
                $this->mimeTypes[$extensao] = $type;
            }
        }
    }
