<?php

class peupagina

{

    private $texto;

    public function __construct($cadena)

    {

        $this->texto = $cadena;

    }

     

    public function disseny()

    {

        ?>

        <hr>

        <?php echo $this->texto;?>

        <?php

    }

}
