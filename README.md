<h1 align="center">APP LOCADORA DE CARROS - API REST </h1>
O objetivo desse projeto é aprimorar meus conhecimentos e habilitades utilizando Larvel 8 e Vuejs

COMO FOI DESENVOLVIDO
Foi criado uma API RESTFUL que se comunica com frontend feito em VUE.js permitindo desacoplar as camadas de frontend do backend:

Backend - PHP 8.0+
Backend - Laravel Framework 8.*
Backend - Servidor Apache 2.2+
Backend - Banco de dados Postgres 9.5+
Frontend - VUE JS 2.6

COMO INSTALAR
Faça uma copia do arquivo .env.example, e renomeie para .env. Neste arquivo você vai adicionar as seguintes configurações:

Criar banco de dados
APP_KEY: variavel global de verificação da aplicação em base 64: php artisan key:generate;
JWT_SECRET: chave para a autenticação com Json Web Token: php artisan jwt:secret;
Também será adicionado um link simbólico da pasta public na pasta storage/app/public: php artisan storage:link

Instalar as dependências do laravel com composer:
composer install

Se tiver problemas com a instalação das dependencias verifique as extensões de PHP
sudo apt install php8.*-tokenizer php8.*-dom php8.*-mbstring php8.*-pgsql

Instalar as dependências do Vuejs com npm, lembre ter instalado o NODEJS:
npm install

Crie o esquema do banco de dados no Postgresql com o comando:
$ php arstisan migrate

Agora pode levantar o servidor embutido do framework:
$ php artisan serve