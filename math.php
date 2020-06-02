<?php

class A{
	function x(){echo "In A";}
}
class B{
 function getA(){
 	return new A();
 }
}
$b = new B();
B::getA()::x();


?>