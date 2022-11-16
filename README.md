# HDVEvents
Aplicação de eventos com intuito de aprender os conceitos básicos do Laravel.

## Pré Requisitos:
Ter o <a href="https://www.php.net/downloads.php" target="_blank">PHP</a> instalado. <br>
Ter o <a href="https://nodejs.org/en/download/" target="_blank">Node Js</a>  instaldo. <br>
Ter o <a href="https://getcomposer.org/download/" target="_blank">Composer</a> instalado.

## Como Utilizar:
Clone a aplicação. <br>
Excute o comando ``` composer install ``` para instalar as dependências do Laravel. <br>
Execute o comando ``` npm install ``` para instalar as dependências do Node Js. <br>
Executar o comando ``` php artisan serve ``` para inicializar o servidor.

## Conexão com o banco de dados
Foi utilizado o banco de dados Sql Server no projeto, sua conexão é feita através do arquivo de variáveis de ambiente .env conforme mostra o exemplo abaixo:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Após configurar a conexão, para testar se está tudo ok executa o comando ``` php artisan migrate ```, se ocorrer tudo bem irá criar as tabelas da migration para o controle de versão do banco de dados. <br>
Para criar uma nova migration utiliza-se o comando ``` php artisan make:migration nome_da_tabela ```. <br>
Para ver o status das migrations utiliza-se o comando ``` php artisan migrate:status ```. <br>
Para criar a tabela no banco de dados utiliza-se o comando ``` php artisan migrate ```. <br>
Para deletar as tabelas do banco de dados e criar novamente caso tenha alguma adição de coluna, utiliza-se o comando ``` php artisan migrate:fresh  ```. <br>
Para deletar alguma alteração feita nas migrations, utiliza-se o comando ``` php artisan migrate:rollback ```. <br>
Para voltar todas as alterações feitas nas migrations, utiliza-se o comando ``` php artisan migrate:reset ```. <br>
Para fazer o rollback e depois executar as migrations novamente, utiliza-se o comando ``` php artisan migrate:refresh ```. <br>

## Criar Models
Utilizado para fazer comunicação com o banco de dados para as operações de CRUD. <br>
Para criar um model, utiliza-se o comando: ``` php artisan make:model Nome_da_model ```. <br>

## Autenticação
Instale a biblioteca Jetstream para facilitar a construção da autenticação com o comando: 
``` composer require laravel/jetstream ```. <br>
Para utilizar a sessão instalamos o pacote do Livewire com o comando:
``` php artisan jetstream:install livewire ```. <br>
Instale as dependências do node com o comando:
``` npm install ```. <br>
Rode o servidor de autenticação com o comando:
``` npm run dev ```. <br>