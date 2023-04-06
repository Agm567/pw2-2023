<?php  
    class Kendaraan {
        protected $jenis;
        protected $fuel;

        protected function __construct($jenis,$fuel)
        {
            $this->jenis = $jenis;
            $this->fuel = $fuel;
        }

        protected function getInfo() {
            echo "Jenis Kendaraan: ". $this->jenis . "<br>";
            echo "Bahan Bakar: ". $this->fuel . "<br>";
        }
    }

    class Motor extends Kendaraan {
        public $roda;

        public function __construct($jenis,$fuel,$roda)
        {
            parent::__construct($jenis,$fuel);
            $this->roda = $roda;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->roda . "<br>";
        }
    }

    class Submarine extends Kendaraan {
        public $max_depth;

        public function __construct($jenis,$fuel,$max_dpth)
        {
            parent::__construct($jenis,$fuel);
            $this->max_dpth = $max_dpth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Maksimal Kedalaman: " . $this->max_dpth . "<br>";
        } 
    }
?>
