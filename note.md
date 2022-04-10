Basic PHP (Form Handling / Intro to OOP)

class is the representation of object blueprint

class does have attributes 
eg. member funtions and data members

eg, a PersonClass

class PersonClass {
  protected $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function move($xcoordinate, $ycoordinate) 
  {
    print("$name Moved $xcoordinate towards the x-axis and $ycoordinate towards the y-axis");

  }

  public function sayMyName() {
    print("$name");
  }
}

$person1 = new PersonClass("Celestine");

$person1->sayMyname() // Celestine;

$person1->move(0.32324, 1.04343);
// Celestine Moved 0.32324 towards the x-axis and 1.04343 towards the y-axis


Access Specifiers in PHP
public 
protected
private