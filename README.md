# Challenge EmCash

Nesta Api é possível criar [triângulos] e [retângulos] e obter todos os [polígonos]

##### Configuration 

***para iniciar o projeto é necessário usar o composer install***

Não é necessário configurar as variáveis de ambiente ​​[DataBase], pois o [DataBase] é local, dessa forma eu não usei o .env. Portanto é preciso configurar as informações do banco de dados local no Connection/ConnectionDB.

##### Tecnologies

Neste projeto optei por utilizar o micro framework slim, para facilitar o gerenciamento de rotas e obter os dados do Body.

- Slim Framework v4
- PDO
- MySql
- PHPUnit

## Base Documentation
[Triângulo]: Para criar um triângulo é necessário enviar três lados, o sistema validará se esses lados podem formar um triângulo, caso não seja possível formar um triângulo com os três valores enviados, os dados não serão inserido no [DataBase] e a API retornará um erro.

[Retângulo]: Para criar um retângulo é necessário enviar quatro lados, o sistema validará se esses lados podem formar um retângulo, caso não seja possível formar um retângulo com os quatro valores enviados, os dados não serão inserido em [DataBase] e a API retornará um Error.

[Polygons]: Como não é possível cadastrar linhas que não formem triângulos e retângulos no [DataBase], o método GET polygons retorna todas as formas cadastradas em ambos [DataBase], pois ambos são polígonos.

[UnitTests]:É possível testar as regras de negócio da API no módulo de testes, basta inserir linhas que possam formar triângulos e retângulos para ter um assertTrue válido.