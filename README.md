# Instalação no Linux (Feito no Ubuntu 18.04)
Instalar php-cli<br />
```
sudo apt install php7.2-cli
```

Plugins essenciais<br />
```
sudo apt-get install php-bcmath
sudo apt-get install php-json
sudo apt-get install php-mbstring
sudo apt-get install php-tokenizer
```

Instalar Extensão php-zip <br />
```
sudo apt-get install php7.2-zip
```

Instalar Plugin de conexão php-mysql<br />
```
sudo apt-get install php7.2-mysql
``` 

? Instalar OpenSSL dev tools<br />
```
sudo apt-get install libcurl4-openssl-dev
sudo apt-get install libssl-dev
```

Instalar Composer<br />
```
sudo apt-get install composer
```

Instalar Laravel<br />
```
composer global require laravel/installer
```

Adicionar Laravel ao $PATH<br />
```
nano ~/.profile
```
Adicione o seguinte ao final do arquivo:<br />
```
# Laravel
export LARAVEL_HOME=$HOME/.config/composer/vendor/bin
export PATH=$LARAVEL_HOME:$PATH
```
Restart profile:<br />
```
. ~/.profile
```
Checar Instalação<br />
```
laravel --version
```

Criar banco de Dados Mysql<br />
Necessário possuir mysql-server instalado, você pode instalá-lo com o seguinte comando<br />
```
sudo apt-get install mysql-server
```

dbeaver foi usado para a manutenção do banco de dados, você pode instalá-lo com o seguinte comando:<br />
```
snap install dbeaver-ce
```

Detalhes do Banco de Dados:<br />
```
user: 'root'
password: ''
database connection mysql
db_name: 'seminario'
charset: 'utf8mb4',
collation: 'utf8mb4_unicode_ci',
```

Rodar Migrações<br />
Este comando executará as migrações anteriormente criadas, criando as tabelas no banco de dados<br />
```
php artisan migrate
```

Rodar seeders<br />
Este comando escreverá as entradas padrão no banco de dados, como as credenciais do usuário administrador<br />
```
php artisan db:seed
```

FrontEnd<br />
Este comando instalará as depencias do FrontEnd, como Vue.js, bootstap e axios. Você precisa possuir node e npm instalados na sua máquina.<br />
```
npm install
```

# Rodando o Projeto
Serve project<br />
```
php artisan serve
```

# Iniciando um novo projeto
```
laravel new <nome_do_projeto>
```

Basic Scaffolding<br />
```
composer require laravel/ui
```

add Vue.js<br />
```
php artisan ui vue
```

build Vue Components<br />
```
npm run dev
ou
npm run watch
```

Create a New Controller<br />
```
php artisan make:controller <NameOfTheController> --resource
```

Create a CRUD Controller<br />
```
php artisan make:controller <NameOfTheController>
```

Create a Model/Migration<br />
```
php artisan make:model <ModelName> -m
```

Show all App Routes<br />
```
php artisan route:list
```
