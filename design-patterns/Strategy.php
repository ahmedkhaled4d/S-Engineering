<?php
    interface ICalculate
{
    public function load();

}

class Sum implements ICalculate
{

    public function load()
    {
        return 7+1;
    }
}

class Minus implements ICalculate
{

    public function load()
    {
        
       
        return 7-1;
    }
}

 


/***************** Client ************/

class SomeClient
{
    private $output;

    public function setOutput(ICalculate $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load();
    }

}
 
$client = new SomeClient();

// Want an array?
$client->setOutput(new Sum());
$data = $client->loadOutput();
var_dump($data);
// Want some JSON?
$client->setOutput(new Minus());

$data = $client->loadOutput();

var_dump($data);
?>
