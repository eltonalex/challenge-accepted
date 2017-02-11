<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Clima Tempo</title>
    <link rel="stylesheet" href="icons/material.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="topo-fixo z-depth-1">
        <!-- Barra superior -->
        <div class="valign-wrapper blue darken-4 white-text">
            <img src="images/logo-white.png" class="titulo" />
            <div>
                <i class="material-icons waves-effect waves-light waves-circle scan-qrcode">camera</i>

                <i class="material-icons waves-effect waves-light
                          waves-circle dropdown-button"
                    data-activates="submenu" data-gutter="5"
                    data-constrainwidth="false">
                        more_vert
                </i>

                <ul id="submenu" class="dropdown-content">
                  <li><a class="black-text acao-limpar">Limpar</a></li>
                </ul>
            </div>
        </div>
        <!-- Campo para busca -->
        <div class="topo-pesquisa white input-field">
          <input id="cidade" type="text" onkeyup="exibirCidade(this.value)">
        </div>
        <!-- Fim campo para busca -->
        
        <!-- Fim barra superior -->
    </div>

    <div id="previsao" class="section">
        <h5>Previsão para:<span id="txtCidade"></span></h5> 
    </div>

    <div class="row" id="previsaoTempo">
        <div class="col s12 m6">
          <div class="card white">
            <div class="card-content blue-text">
              <span class="card-title black-text">Data da Previsão</span>
              <p>Descrição da previsão do Tempo</p>
            </div>
            <div class="card-action">
              <table>
                <tbody>
                    <tr>
                    <td class='flow-text red-text'><img src="images/icons/upload.png" />0º max</td>
                    <td class='flow-text blue-text'><img src="images/icons/download.png" />0º min</td>
                  </tr>
                  <tr>
                    <td class='flow-text'><img src="images/icons/raindrop-close-up.png" />0 mm</td>
                    <td class='flow-text'><img src="images/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png" />0 %</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/controle.js"></script>
    <script src="cordova.js"></script>
    <script>

    </script>
</body>
</html>
