# Configurações Iniciais

### Inicialização do BD
```
$ mysql -uroot -p
> create database loja;
> use loja;
> SET autocommit=0 ; source sql.sql ; COMMIT ;
```

### Iniciando a aplicação
```
$ cd public
$ php -S localhost:8000
```
