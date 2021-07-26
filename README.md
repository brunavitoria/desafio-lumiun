# desafio-lumiun
Desafio proposto para a seleção na vaga de Programador PHP Júnior

# desafio-lumiun
Desafio proposto para a seleção na vaga de Programador PHP Júnior

# Começando
Para rodar a aplicação é necessario possuir:
* PHP ^7.3
* MySQL
* Laravel 8
* Node ^12.13

### Instalando e Configurando
1. Faça download ou clone o projeto através do comando
```shell
git clone https://github.com/brunavitoria/desafio-lumiun.git
```

2. Crie um arquivo .env e copie o conteúdo de .env.example no arquivo criado.
3. Adicione as informações de banco de dados no arquivo .env

```shell
DB_DATABASE=seubancodedados
DB_USERNAME=seuusuario
DB_PASSWORD=suasenha
```
4. Rode os comandos:

```shell
cd desafio-lumiun/biblioteca
```
```shell
composer install
```
```shell
npm install
```
```shell
php artisan key:generate
```
```shell
php artisan migrate
```
```shell
php artisan db:seed
```
```shell
php artisan dump-autoload
```
```shell
php artisan serve
```
Acesse a url: http://localhost
Dados de acesso:
Usuário: adm@lumiun.com.br
Senha: 1
