<p align="center">
  <a href="http://www.climatempo.com.br">
      <img src="http://i.imgur.com/Q9lCAMF.png" alt="Climatempo" width="300px"/>
  </a>
</p>

___


## Projeto Proposto

Foi Desenvolvida uma aplicação Web/Mobile utilizando 

- HTML
- CSS
- Javascript
- PHP

Que para ver em funcionamento precisa apenas de um servidor web, no caso foi utilizado:

- PHP 5.5.12
- Apache 2.4.9

Foram realizados teste nos navegadores:

Firefox 51.0.1 (32-bit)
Google Chrome Versão 56.0.2924.87
Opera 43.0

Todas as funcionalidade propostas estão ativas;


### A ideia
Deixa a aplicação pronta para rodar em um servidor web  ou ser transformada em uma app Apps mobile.
Foi utilizado o http://materializecss.com/ como framework front-end por ser ser baseado no Material Design e
por facilitar o desenvolvimento da aplicação solicitada.

Os arquivos que servem de base para aplicação estão no formato de JSON e foram manipulados via PHP para que a view
apenas consumisse o resultado  e exibisse na tela da melhor forma.

Com isso espero ganhar performance e deixar o servidor responsável pelo processamento e resposta das requisições.

### Dados Utilizados

A API deve fazer a leitura dos dados dos JSONs no diretório base.
 
Localidades:
    
    base/locales.json
 
| Propriedade   | Tipo   | Descrição                           |
| ------------- |:------:| ------------------------------------|
| `id`          | Number | Id da localidade                    |
| `name`        | String | Nome da localidade                  |
| `state`       | String | Sigla do estado da localidade       |
| `latitude`    | Number | Latitude do centro da localidade    |
| `longitude`   | Number | Longitude do centro da localidade   |
 
 
Os dados de previsão estão no JSON:
 
    base/weather.json
    
**period: Object**
 
| Propriedade        | Tipo   | Descrição                                  |
| ------------------ |:------:| -------------------------------------------|
| `period.begin`     | String | Data início da busca no formato AAAA-MM-DD |
| `period.end `      | String | Data fim  da busca no formato AAAA-MM-DD   |

**locale: Object**
 
Os mesmos dados do JSON de localidades.
 
**weather: Object**
 
| Propriedade                     | Tipo   | Descrição                                  |
| ------------------------------- |:------:| -------------------------------------------|
| `weather.date`                  | String | Data da previsão no formato AAAA-MM-DD     |
| `weather.text`                  | String | Texto sobre a previsão do dia              |
| `weather.temperature.min`       | Number | Temperatura mínima em graus celsius (°C)   |
| `weather.temperature.max`       | Number | Temperatura máxima em graus celsius (°C)   |
| `weather.rain.probability`      | Number | Probabilidade de chuva em porcentagem (%)  |
| `weather.rain.precipitation`    | Number | Precipitação de chuva em milímetros (mm)   |

___


Qualquer dúvida estou a disposição: elton.alex@hotmail.com, eltonalex.s@gmail.com (12)99131-2471.