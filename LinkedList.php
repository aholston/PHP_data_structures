<?

class Node {
  public function __construct($value) {
    $this->value = $value;
    $this->next = null;
  }
}

class SinglyLinkedList {
  public function __construct() {
    $this->head = null;
  }

  public function add($val) {
    $newNode = new Node($val);

    if ($this->head == null) {

      $this->head = $newNode;

    } else {

      $current = $this->head;

      while(current->next) {

        $current = $current->next;

      }

      $current->next = $newNode;
    }
  }
}
