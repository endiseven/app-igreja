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
- Laravel
- Composer

### Passos para Rodar o App Localmente

1. **Clonar o Repositório**

   ```bash
   git clone https://github.com/endiseven/app-igreja.git
   cd app-igreja

2. **Instalar Dependências**

   ```bash
   composer install

3. **Configurar o Banco de Dados**

   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=app-igreja
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

4. **Executar as Migrações**

   ```bash
   php artisan migrate

5. **Rodar o Servidor**

   ```bash
   php artisan serve
   
Agora, você pode acessar o aplicativo no seu navegador utilizando o endereço http://localhost:8000.

