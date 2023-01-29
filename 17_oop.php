<?php
/* --- Objektorientierte Programmierung -- */

/*
  Ab PHP5 kannst du PHP entweder prozedural oder objektorientiert schreiben. OOP besteht aus Klassen, die "Eigenschaften" und "Methoden" enthalten können. Aus Klassen können Objekte erstellt werden.
*/

class User {
  // Eigenschaften sind nur Variablen, die zu einer Klasse gehören.
  // Zugriffsmodifikatoren: public, private, protected
  // public - kann von überall zugegriffen werden
  // private - kann nur innerhalb der Klasse aufgerufen werden
  // protected - kann nur von innerhalb der Klasse und von vererbenden Klassen angesprochen werden
  private $name;
  public $email;
  public $password;

  // Der Konstruktor wird immer dann aufgerufen, wenn ein Objekt aus der Klasse erstellt wird.
  // Wir übergeben dem Konstruktor Eigenschaften von außen.
  public function __construct($name, $email, $password) {
    // Wir weisen die von außen übergebenen Eigenschaften den Eigenschaften zu, die wir innerhalb der Klasse erstellt haben.
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methoden sind Funktionen, die zu einer Klasse gehören.
  // function setName() {
  //   $this->name = $name;
  // }

  function getName() {
    return $this->name;
  }

  function login() {
    return "Der Benutzer $this->name ist eingeloggt.";
  }

  // Destructor wird aufgerufen, wenn ein Objekt zerstört wird oder das Ende des Skripts erreicht ist.
  function __destruct() {
    echo "Der Nutzername lautet {$this->name}.";
  }
}

// Einen neuen Benutzer instanziieren
$user1 = new User('Erik', 'raphael@michaelthier.de', '123456');
echo $user1->getName();
echo $user1->login();

// Einen Wert zu einer Eigenschaft hinzufügen
// $user1->name = 'Erik';

var_dump($user1);
// echo $user1->name;

/* ----------- Vererbung(en) ---------- */

/*
  Die Vererbung ist die Möglichkeit, eine neue Klasse aus einer bestehenden Klasse zu erstellen.
  Dies wird erreicht, indem man eine neue Klasse erstellt, die eine bestehende Klasse erweitert.
*/

class employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new employee('RIta','rita@kimmkorn.de','123456','Maneger');
echo $employee1->getTitle();