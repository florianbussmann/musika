<?php

class Album {
    protected $platzierung;
    protected $interpret;
    protected $name;
    protected $year;
    protected $genre;
    
    public function __construct($platzierung, $interpret, $name, $year, $genre) {
        $this->platzierung = $platzierung;
        $this->interpret = $interpret;
        $this->name = $name;
        $this->year = $year;
        $this->genre = $genre;
    }
    
    public static function add_album($name, $year, $interpret) {
        global $dbh;
        
        $stmt = $dbh->prepare("INSERT INTO alben (name, year, interpret) VALUES (:name, :year, :interpret)");
        
        return $stmt->execute(array(
            'name'      => $name,
            'year'      => $year,
            'interpret' => $interpret
        ));
    }
    
    public static function getAlbums() {
        global $dbh;
        
        $arr = array();
        
        foreach ($dbh->query("SELECT * FROM alben a LEFT JOIN platzierungen p ON a.id = p.album ORDER BY platzierung ASC") as $entry) {
            array_push($arr, new Album($entry['platzierung'], $entry['interpret'], $entry['name'], $entry['year'], $entry['genre']));
        }
        
        return $arr;
    }
    
    public function getPlatzierung() {
        return is_null($this->platzierung) ? '-' : $this->platzierung;
    }
    
    public function getInterpret() {
        return $this->interpret;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getYear() {
        return $this->year;
    }
    
    public function getGenre() {
        return $this->genre;
    }
}