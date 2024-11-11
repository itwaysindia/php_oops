<?php
namespace include\classes\abc\file1;
class abc extends \a\abc {
    function fun1(){
        echo "namespace b: Hello this is class a fun1";
        echo "<br />";
        parent::fun1();
    }
}


