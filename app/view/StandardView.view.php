<?php

Class StandardView extends Disco\classes\View {

    public function header(){
        return Template::build('header');
    }//header

    public function __construct(){

        $this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        $this->scriptSrc('/js/modernizr.js');
        $this->scriptSrc('/js/foundation.min.js');
        $this->scriptSrc('/js/js.js');

        $this->styleSrc('/css/foundation.min.css');
        $this->styleSrc('/css/new-css.css');
		//$this->styleSrc('/css/master.css');
        $this->script('$(document).foundation();');
		$this->setBodyTemplate("%1\$s %2\$s %3\$s");
		
    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

?>
