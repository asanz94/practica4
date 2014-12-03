<?php

require_once 'pagina.php';
echo "<link href='style.css' rel='stylesheet' />";

$pag = new pagina("Benvingut A la Pagina web Andreu","Desarrollat per Andreu");

$pag->iniciar_contingut(

"<div id='texto'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet lectus sit amet tortor imperdiet iaculis. Cras ornare scelerisque libero et pellentesque. Mauris malesuada interdum sapien a porta. Curabitur cursus odio et nibh pretium, quis ornare purus aliquet. Aliquam gravida sodales convallis. Fusce nec viverra quam. Proin ultrices augue massa, in accumsan dui volutpat a. Quisque fringilla augue at nisl sagittis vestibulum. Duis venenatis, mauris in pharetra aliquet, ipsum massa aliquam lectus, ut volutpat nisl arcu iaculis turpis. Ut vehicula sollicitudin diam, ut pulvinar justo ornare vitae. Sed gravida auctor faucibus. Sed vel risus ac lorem commodo tincidunt a in dui. Fusce tellus magna, adipiscing et suscipit eget, malesuada at orci. Aenean vitae dignissim velit. Sed facilisis tempor lacus ac bibendum.
132
<br>
133
<br>
134
Nullam et lacus lobortis, congue erat at, lacinia eros. Ut dictum sodales nisi id convallis. Fusce posuere quam eget orci interdum sagittis. Maecenas vitae elementum sem. Sed et massa sem. Phasellus ac lobortis est. Praesent sit amet euismod leo. Maecenas sagittis vel ligula vitae imperdiet. Etiam condimentum elit nibh. Aliquam urna purus, sollicitudin quis est nec, convallis aliquet leo. Cras elementum, est sed feugiat sollicitudin, lorem ante venenatis urna, quis consectetur libero odio sed libero. Mauris nisi arcu, molestie ac enim nec, sagittis scelerisque turpis. Fusce sodales, nulla a venenatis eleifend, quam velit venenatis dui, vel aliquam lorem odio a lacus. Morbi vehicula felis lectus. Mauris faucibus, ante sed cursus imperdiet, est urna suscipit libero, vitae. </div>"

);

$pag->vista();



?>