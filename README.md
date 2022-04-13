# Challenge EmCash

In this Api is possible to create [triangles] and [rectangles] and get all [polygons]

##### Configuration 

***To start the project it is necessary to use composer install***

No need to configure the [DataBase] variables, as the [DataBase] is local, I don't send the .env in git ignore. But you need to configure your local database information in the connection database.


##### Tecnologies

In this project I chose to use the slim micro framework, to facilitate the management of routes and get the data from the Body.

- Slim Framework v4
- PDO
- MySql
- PHPUnit

## Base Documentation
[Triangule]: To create a triangle it is necessary to send three sides, the system will validate if these sides can form a triangle, if it is not possible to form a triangle with the three values ​​sent, the data will not be inserted in the [DataBase] and the API will return an Erro.

[Rectangule]: to create a rectangle it is necessary to send four sides, the system will validate if these sides can form a rectangle, if it is not possible to form a rectangle with the four values ​​sent, the data will not be inserted in [DataBase] and the API will return an Error.

[Polygons]: As it is not possible to register lines that do not form triangles and rectangles in the [DataBase], the GET polygons method returns all shapes registered in both [DataBase], because both are polygons.

[UnitTests]:It is possible to test the API business rules in the tests module, just insert lines that can form triangles and rectangles to have a valid assertTrue.