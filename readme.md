<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


#### Api Banco de Questões - Startline 

Para testar API, pode acessar a documentação publicada pelo postman.
## Acessando documentação API  - postman

https://documenter.getpostman.com/view/2906328/collection/RVu5jUPU

#### Baixando e Rodando o Projeto

#### 1 clone o projeto para um diretório onde o servidor esteja rodando.
#### 2 duplique o arquivo .env.example e renomeie o outro para .env ( assim vc vai manter sempre um de exemplo, quando outra pessoa for baixar o projeto)

#### 3 coloque no arquivo .env  o banco mysql e ususario e senha ( já tem o local certo para isso basta lé o arquivo)

#### 4 rode o comando em seu terminal:

`composer install  ( para baixar as depêndencias do projeto )

#### 5 rode o comando:

php artisan key:generate  ( para gerar a chave no seu arquivo .env )

#### 6 rode o comando:

php artisan migrate:install

#### 7 rode o comando: php artisan migrate --seed ( isso vai fazer com que as tabelas sejam geradas através das migration juntamente com as seeds que são arquivos para popular alguns dados das tabelas)

#### 8 agora rode o camando para executar o projeto: 

php artisan serve

#### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
