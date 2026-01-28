<?php
class Student {
    private static $students = [];

    public static function getCount() {
        return count(self::$students);
    }

    public static function findAll() {
        return self::$students;
    }

    public static function findByNumber($num) {
        return self::$students[$num] ?? null;
    }

    protected $name;
    protected $number;

    public function __construct($name, $number) {
        if (empty($number)) {
            throw new Exception("Student number cannot be empty");
        }

        $this->name = $name;
        $this->number = $number;

        self::$students[$number] = $this;

        // echo "Creating student: " . $this->name . "<br/>";
    }

    public function getName() {
        return $this->name;
    }
    
    public function getNumber() {
        return $this->number;
    }

    public function leave() {
        unset(self::$students[$this->number]);
        echo "Student: " . $this->name . " has left<br/>";
    }

    public function __toString() {
        return "Student: " . $this->name . " (" . $this->number . ")";
    }

    public function __destruct() {
        echo "Student " . $this->name . " has been destroyed<br/>";
    }
}