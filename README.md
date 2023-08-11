# Instruções de Instalação do Projeto 


## Requisitos

Certifique-se de ter instalado:

- PHP (recomendado PHP 7.4 ou superior)
- Composer
- Node.js e npm

## Passos

1. **Clone o repositório:**
   ```bash
    git@github.com:sumoyama/teste-php-IPO.git
    cd teste-php-IPO
2. **Instale as dependências do Composer**
   ```bash
    composer install

3. **Configure as informações de banco de dados no arquivo env**
    ```bash
    cp .env.example .env
4. **Gere a key** 
    ```bash
    php artisan key:generate

5. **Lembre de configurar as informações do banco de dados**
    ```bash
    DB_USERNAME=root
    DB_PASSWORD=12345678

6. **Gere as migrações do banco de dados**
    ```bash
    php artisan migrate        
    php artisan db:seed --class=DataBaseSeeder

7. **Instale outras dependências do Node**
    ```bash
    npm install

8. **Inicie o servidor de desenvolvimento**
    ```bash
    php artisan serve

9. **Acesse o aplicativo**
  Abra o navegador e acesse http://localhost:8000. ou a porta correspondente indicado na aplicação
