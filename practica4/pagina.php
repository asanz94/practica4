<?php

require_once 'cabecera.php';
require_once 'menu.php';
require_once 'contenido.php';
require_once 'footer.php';


class pagina

{

    private $capcalera;

    private $menu;

    private $cos;

    private $peu;

    public function __construct($text_cap,$text_peu)

    {

        $this->capcalera = new capcalera($text_cap);

        $this->menu = new menusup();

        $this->cos = new contingut();

        $this->peu = new peupagina($text_peu);

    }

     

    public function iniciar_contingut($text)

    {

        $this->cos->iniciarlinea($text);

    }
 

    public function vista()

    {

        echo "<div id='contenedor'>";

        echo "<div id='cabecera'>"; $this->capcalera->disseny(); echo "</div>";

        echo "<div id='menu'>"; $this->menu->disseny(); echo "</div>";

        echo "<div id='contenido'>"; $this->cos->disseny(); echo "</div>";

        echo "<div id='footer'>"; $this->peu->disseny(); echo "</div>";

        echo "</div>";

    }

}
