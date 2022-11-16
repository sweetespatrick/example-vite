
<html>
   
<h1>

<?php

    class MyClass {
    public $var = 'Hello World';
    }

    $myclass = new MyClass;

    function test(MyClass $arg) : object {
    return $arg;
    }
    echo test($myclass)->var;
    echo Request::ip();
    echo "<p></p>";
    echo test($myclass)->var;
?>
    
</h1>
    

</html>