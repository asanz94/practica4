<?php

class contingut

{

    private $linees = array();

    public function iniciarlinea($li)

    {

        $this->linees[] = $li;

    }

    public function disseny()

    {

        for ($i=0;$i<sizeof($this->linees);$i++)

        {

            ?>  


            <p id="text_der_img_php"><?php echo $this->linees[$i];?></p>

            <?php

        }

    }

}

?>