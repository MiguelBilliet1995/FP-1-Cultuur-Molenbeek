<?php
class evenementen{
    private $id;
    private $naam;
    private $prijs;
    private $datum;
    private $uur;
    private $locatie;
    private $beschrijving;
    private $foto;

    public function __construct($id, $naam, $prijs, $datum, $uur, $locatie, $beschrijving, $foto){
        $this->id = $id;
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->datum = $datum;
        $this->uur = $uur;
        $this->locatie = $locatie;
        $this->beschrijving = $beschrijving;
        $this->foto = $foto;
    }

    public function id(){
        return $this->id;
    }

    public function naam(){
        return $this->naam;
    }

    public function prijs(){
        return $this->prijs;
    }

    public function datum(){
        return $this->datum;
    }

    public function uur(){
        return $this->uur;
    }

    public function locatie(){
        return $this->locatie;
    }

    public function beschrijving(){
        return $this->beschrijving;
    }

    public function foto(){
        return $this->foto;
    }
}
?>