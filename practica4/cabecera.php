<?php

class capcalera     // Camel Case: Escribir la primera letra de la clase en mayuscula

{
    private $text; //Atributo

    public function __construct($titulo) //Metodo

    {

        $this->text = $titulo;

    }


    public function disseny() //Metodo

    {

        //echo"<h1>".$this->texto."</h1>";

        ?>
        <h1><?php echo $this->text;?></h1>

        <?php

    }

}
