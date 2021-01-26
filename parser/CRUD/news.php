<?php
class news{
    private $id;
    private $naam;
    private $datum;
    private $artikel;
    private $foto;

    public function __construct($id, $naam, $datum, $artikel, $foto){
        $this->id = $id;
        $this->naam = $naam;
        $this->datum = $datum;
        $this->artikel = $artikel;
        $this->foto = $foto;
    }

    public function id(){
        return $this->id;
    }

    public function naam(){
        return $this->naam;
    }

    public function datum(){
        return $this->datum;
    }

    public function artikel(){
        return $this->artikel;
    }

    public function foto(){
        return $this->foto;
    }
}
?>