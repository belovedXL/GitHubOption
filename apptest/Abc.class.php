<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-01-27 17:11:29
 * @version $Id$
 */

class A {
    
    public static $a=0;
    public  $b=0;
    public $c='ccccccc';

    public function getAbc(){
    	echo $this->b;
    }
    public function getc(){
    	echo $this->c;
    }
}
class B{

	public $a=1000;
	public $b='bbbbbbbb';
	public $c=TRUE;
	public function getA(){
		echo $this->a;
	}
}