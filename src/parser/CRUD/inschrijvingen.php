<?php
class inschrijvingen{
    private $id;
    private $evenement_id;
    private $voornaam;
    private $naam;
    private $email;
    private $aantal_1; // 0-12
    private $aantal_2; // 12-18
    private $aantal_3; // 18-65
    private $aantal_4; // 65+

    public function __construct($id, $evenement_id, $voornaam, $naam, $email, $aantal_1, $aantal_2, $aantal_3, $aantal_4){
        $this->id = $id;
        $this->evenement_id = $evenement_id;
        $this->voornaam = $voornaam;
        $this->naam = $naam;
        $this->email = $email;
        $this->aantal_1 = $aantal_1;
        $this->aantal_2 = $aantal_2;
        $this->aantal_3 = $aantal_3;
        $this->aantal_4 = $aantal_4;
    }

    public function id(){
      return $this->id;
    }

    public function evenment_id(){
      return $this->evenment_id;
    }

    public function voornaam(){
      return $this->voornaam;
    }

    public function naam(){
      return $this->naam;
    }

    public function email(){
      return $this->email;
    }

    public function aantal_1(){
      return $this->aantal_1;
    }

    public function aantal_2(){
      return $this->aantal_2;
    }

    public function aantal_3(){
      return $this->aantal_3;
    }

    public function aantal_4(){
      return $this->aantal_4;
    }
}
?>