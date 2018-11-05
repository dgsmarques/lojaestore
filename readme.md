<p align="center">Loja&Store</p>

## Sobre

a Loja&Store é um projeto de carrinho de compras simples, onde podemos adicionar e remover itens ao carrinho, buscar produtos,
ver detalhe do produto, criar e ver seus pedidos. Desenvolvido com o Laravel na versão 5.7 e com componentes com o Vuejs 2.

## Requisitos

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mysql ou Mariadb
- Nodejs >= 8.12
- Composer

## Instalação

Faça o clone do repositório;

git clone git@github.com:dgsmarques/lojaestore.git  
cd lojaestore

Instale as dependencias do projeto
composer install  
npm install  

Configure o acesso do banco de dados no arquivo **.env**  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=lojaestore  
DB_USERNAME=root  
DB_PASSWORD=102030  

Com o banco de dados configurado execute as migrates e os seeds para carregar as informações ao banco de dados.  
php artisan migrate --seed

Agora é necessário compilar os componentes do vuejs, css e javascripts  
npm run dev

Para rodar o projeto podemos utilizar o servidor que vem junto ao laravel  
php artisan serve

E acesse http://127.0.0.1:8000

Já existe um usuário criado para a realização dos testes.  
email: danielsousamartins@ggmail.com  
senha: 102030