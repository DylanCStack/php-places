<?php
    class Place
    {
        private $name;
        private $image_path;
        private $stay_duration;

        function __construct($name, $image_path, $stay_duration)
        {
            $this->name = $name;
            $this->image_path = $image_path;
            $this->stay_duration = $stay_duration;
        }

        function getName()
        {
            return $this->name;
        }
        function getImage()
        {
            return $this->image_path;
        }
        function getDuration()
        {
            return $this->stay_duration;
        }

        function save()
        {
            array_push($_SESSION['list_of_places'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }
    }
?>
