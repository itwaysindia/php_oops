<?php 
class class1{
     public static $var = 10;
   public function __construct(){
    echo "This is Constructor! <br />";
   }

   public static function fun1(){
    echo "This is fun1 <br /> Calling property:" . self::$var;
   }
}

// $obj = new class1;
// $obj->fun1();

class1::fun1();

class visitorCounter{
    public static $totalVisitor =0;

    public function __construct(){
        self::$totalVisitor++;
    }

    public static function getTotalVisitors(){
        return self::$totalVisitor;
    }
}

echo "<hr>";
$visitor1 = new visitorCounter;
$visitor2 = new visitorCounter;
echo $visitor2->getTotalVisitors();

echo "Total Visitors: ". visitorCounter::getTotalVisitors();
?>