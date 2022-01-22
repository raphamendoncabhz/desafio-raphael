
## Desafio JN2 

O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.
Você precisará construir uma base de dados com os seguintes campos:

	ID;
	Nome;
	Telefone;
	CPF;
	Placa do Carro.

Para o gerenciamento dessa base, você construirá uma API REST contendo os seguintes endpoints:

	Método	Endpoint	Descrição
	POST	/cliente	Cadastro de novo cliente. 
	PUT	/cliente/{id}	Edição de um cliente já existente.
	DELETE	/cliente/{id}	Remoção de um cliente existente.
	GET	/cliente/{id}	Consulta de dados de um cliente.
	GET	/consulta/final-placa/{numero}	Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado.


## Regras 

Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
Você deve utilizar um framework PHP de sua escolha;
Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID e PSR.

Após o final do desenvolvimento, crie um repositório público do GIT, hospede o seu código e nos envie o endereço do repositório.


## INSTRUÇÕES DE USO  

Clonar o desafio

git clone  https://github.com/raphamendoncabhz/desafio-raphael.git desafio-raphael

cd desafio-raphael

Copiar arquivo .env  
	cp .env.example .env

composer install

php artisan key:generate

docker-compose up -d


Opcional (O banco já esta carregado com alguns registros)
	Realizar as migrações
	Acesse o container com o seguinte comando: 

	Windows: 	winpty docker exec -it shouts-laravel-app bash
	Linux: 		docker exec -it shouts-laravel-app bash

	Execute o seguinte comando dentro do container:
	php artisan migrate:fresh --seed
	(Elimina todas as tabelas e as constroi novamente alimentando com a Factorie do laravel.)



## ENDPOINTS 

Utilizar alguma ferramenta de Requisições Http: ( POSTMAN )

POST	/cliente	Cadastro de novo cliente. 
http://localhost/api/clientes 
Parâmetros: name, cpf, phone

PUT	/cliente/{id}	Edição de um cliente já existente.
http://localhost/api/clientes/{$id}
Parâmetros: name, cpf, phone

DELETE	/cliente/{id}	Remoção de um cliente existente.
http://localhost/api/clientes/{$id}
Parâmetros: id

GET	/cliente/{id}	Consulta de dados de um cliente.
http://localhost/api/clientes/{$id}
Parâmetros: id

GET	/consulta/final-placa/{numero} Consulta placa pelo ultimo numero 
http://localhost/api/consulta/final-placa/{numero}
Parâmetros:numero -- Ultimo número da placa

GET Listagem de todos os clientes
http://localhost/api/clientes


