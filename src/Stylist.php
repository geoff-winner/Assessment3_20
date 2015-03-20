<?php
    $DB = new PDO('pgsql:host=localhost;dbname=hair_salon');

    class Stylist
    {
        private $name;
        private $id;

        function __construct($name, $id = null)
        {
            $this->name =  $name;
            $this->id = $id;
        }

        function getName()
        {
          return $this->name;
        }

        function setName($new_name)
        {
          $this->name = (string) $new_name;
        }
        
    }

?>