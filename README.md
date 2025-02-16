# 🎉 App Igreja Kids 🎉

Bem-vindo ao **App Igreja Kids**! Este é um aplicativo Laravel criado para facilitar o cadastro, check-in e check-out de membros na igreja Kids. Com ele, você pode gerenciar os membros de maneira eficiente e organizada durante os cultos.

## 🌟 Funcionalidades

- 📋 Cadastro de membros
- ✅ Check-in de membros
- 🚪 Check-out de membros

## 🚀 Começando

### Requisitos

Certifique-se de ter os seguintes softwares instalados:

- PHP
  
   O projeto requer PHP 8.2 ou superior, ao rodar o comando para iniciar o servidor ele irá procurar pela pasta PHP, na raiz do seu sistema, provavelmente "C:". 
- Composer

### Passos para Rodar o App Localmente

1. **Clonar o Repositório**

   ```bash
   git clone https://github.com/endiseven/app-igreja.git
   cd app-igreja

2. **Instalar Dependências**

   ```bash
   composer install
    ```
   Mude o nome do arquivo ".env.example" para ".env" e gere a chave de encriptação com o comando:
   
   ```bash
   php artisan key:generate

4. **Configurar o Banco de Dados**

   Configure o arquivo .env para se conectar ao banco de dados, você pode usar o pgadmin para criar e gerenciar o bd.
   Certifique-se que o o arquivo php.ini permita o uso de extensões para realizar a comunicação com o bd.
   
   ```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=app-igreja
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

5. **Executar as Migrações**

   O comando a seguir irá configurar o seu banco de dados para rodar o servidor Laravel e criará as tabalas necessárias no banco de dados para o funcionamento do app.
   ```bash
   php artisan migrate

7. **Rodar o Servidor**
    Agora é só rodar!
   ```bash
   php artisan serve
   
Agora, você pode acessar o aplicativo no seu navegador utilizando o endereço http://localhost:8000.

