# Sample Integrate Laravel With GraphQL
GraphQL is a query language for your API, and a server-side runtime for executing queries by using a type system you define for your data

this is sample how to integrating Graphql with laravel, for full documentation you can check
[here](https://github.com/rebing/graphql-laravel) and [Graphql](http://graphql.org/learn)

## Installation

##TODO: format

docker run --rm -v $(pwd):/app -v ~/.ssh:/root/.ssh composer install --ignore-platform-reqs
sudo chmod 777 -Rv storage
sudo chmod 777 -Rv bootstrap

cp .env.example .env

docker ps

docker exec -it id_php_container bash

php artisan key:generate

http://localhost:8080/
Server: mysql
Username: root
password: 123456A
database: laravel_graphql


php artisan migrate
php artisan db:seed


Open Postman and import (paste raw text)

curl -X POST \
  http://localhost/graphql/login \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json' \
  -H 'postman-token: 2136f022-4fa0-906e-da8d-9718aa1f7fde' \
  -d '{
	"email": "leonardo.delfica@gmail.com",
	"password": "secret"
}'


Select and copy the returned token between ""

Open Altair
Set Headers
Authorization
Bearer tokenabcd