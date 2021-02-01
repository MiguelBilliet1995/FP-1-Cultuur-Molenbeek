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
    private $type;

    public function __construct($id, $naam, $prijs, $datum, $uur, $locatie, $beschrijving, $foto, $type){
        $this->id = $id;
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->datum = $datum;
        $this->uur = $uur;
        $this->locatie = $locatie;
        $this->beschrijving = $beschrijving;
        $this->foto = $foto;
        $this->type = $type;
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

    public function type(){
        return $this->type;
    }
}
?>