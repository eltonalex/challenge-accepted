<?php

//Lê todo o conteúdo de um arquivo para uma string
$json_file = file_get_contents("base/weather.json");   

//Decodifica uma string JSON
$json_str = json_decode($json_file);

// get o parâmetro q da URL
$id = trim($_REQUEST["q"]);

// Montagem dos cartões com dados da previsão por cidade e por dia
foreach ( $json_str as $n ){

	foreach ($n->weather as $t) {
		if($n->locale->name == $id)
		{
			
			echo "
					<div class='col s12 m6'>
			          <div class='card white'>
			            <div class='card-content blue-text'>
			              <span class='card-title black-text'>".$t->date."</span>
			              <p>".$t->text."</p>
			            </div>
			            <div class='card-action'>
			              <table>
			                <tbody>
			                    <tr>
			                    <td class='flow-text red-text'><img src='images/icons/upload.png' />".$t->temperature->max."&#176; max</td>
			                    <td class='flow-text blue-text'><img src='images/icons/download.png' />".$t->temperature->min."&#176; min</td>
			                  </tr>
			                  <tr>
			                    <td class='flow-text'><img src='images/icons/raindrop-close-up.png' />".$t->rain->precipitation."mm</td>
			                    <td class='flow-text'><img src='images/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png' />".$t->rain->probability."%</td>
			                  </tr>
			                </tbody>
			              </table>
			            </div>
			          </div>
			        </div>

			";

				
		}else{
			break;
	}
	
}
	
	
 
}


?>