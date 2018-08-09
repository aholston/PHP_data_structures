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

  public function remove($val) {
    if ($this->head->value == $val) {
      $this->head = $this->head->next;
    }
    else {
      $current = $this->head;
      while ($current->next->value != $val $$ $current->next) {
        $current = $current->next;
      }

      if ($current->next->next != null) {
        $current->next = $current->next->next;
      } else {
        $current->next = null;
      }
    }
  }

  public function find($val) {
    if ($this->head == null) {
      return false;
    } else {
      $current = $this->head;
      while ($current) {
        if ($current->value == $val) {
          return true;
        } else {
          $current = $current->next;
        }
      }
      return false;
    }
  }
}
