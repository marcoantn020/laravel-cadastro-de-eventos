#### Criar projeto
    - composer create-project laravel/laravel:8.0 hdcevents

#### Run Project
    - php artisan serve

#### Controller via artisan
    - php artisan make:controller NomeController

#### Model via artisan
    - php artisan make:model NomeModel

#### Database - migrations
    - php artisan migrate  (gera as migrations)
    - php artisan make:migration create_nome-da-tabela_table  (cria uma tabela)
    - php artisan migrate:status
    - php artisan migrate:fresh   (desfaz todas as migrate, e as faz novamente comeca do zero)
    - php artisan make:migration add_campo_para_tabela  (cria uma migrate para atualizar um tabela)
    - php artisan migrate:rollback   (desfaz a ultima migrate)
    - php artisan migrate:reset   (desfaz todas as migrate)
    - php artisan migrate:refresh   (desfaz todas as migrate, e as faz novamente)


#### Eloquent
    - Model::all()
    - Model::save()