# HDVEvents
Aplicação de eventos com intuito de aprender os conceitos básicos do Laravel

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

Após configurar a conexão, para testar se está tudo ok executa o comando ``` php artisan migrate ```, se ocorrer tudo bem irá criar as tabelas da migration para o controle de versão do banco de dados.