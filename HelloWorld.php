<?php

namespace public\HelloWorld;

/**
* HellowWorld class
* Outputs hello world based on chosen output
*
*/
class HelloWorld {
    
    private $output = "Hello World";

    /**
    * Update output if user supplies output override
    * @var string $output 
    */
    function __construct($output = $this->output) {
        if ($this->output != $output) {
            $this->setOutput($output);
        }
    }

    /**
    * Sets the text to be output
    * @var string $output 
    */
    public function setOutput($output) {
        $this->output = $output;
    }

    //Echos the set output
    public function hello() {
        echo $this->output;
    }
}