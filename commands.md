#### Criar projeto
    - composer create-project laravel/laravel:8.0 hdcevents

#### Run Project
    - php artisan serve

#### Controller via artisan
    - php artisan make:controller NomeController

#### Database - migrations
    - php artisan migrate  (gera as migrations)
    - php artisan make:migration nome_separado_por_underline  (cria uma migrate)
    - php artisan migrate:status
    - php artisan migrate:fresh  (roda todas as migration de novo)