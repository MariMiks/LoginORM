# Login com ORM

Este projeto é um exemplo de sistema de login usando o framework Laravel. Ele inclui um controlador de login, um seeder para popular a tabela `users` e instruções sobre como rodar o projeto.

## Estrutura do Projeto

- **login/app/Http/Controllers/LoginController.php**: Controlador responsável pelo login. Ele possui métodos para exibir o formulário de login e para processar a autenticação do usuário.
- **login/database/seeders/UserSeeder.php**: Seeder que popula a tabela `users` com dados de exemplo. Ele cria 20 usuários com nomes e senhas sequenciais.
- **login/README.md**: Este arquivo contém informações sobre o projeto.
- **login/.gitignore** e outros arquivos `.gitignore`: Especificam quais arquivos e diretórios devem ser ignorados pelo Git.
- **login/storage/**: Diretório usado pelo Laravel para armazenar arquivos gerados pela aplicação, como logs e cache.
- **login/tests/TestCase.php**: Arquivo base para testes unitários.

## Como Rodar o Projeto

1. **Instalar Dependências**:
   Certifique-se de ter o Composer instalado. No diretório raiz do projeto, execute:
   ```sh
   composer install
    ```


2. **Configurar o Ambiente**:
    Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, especialmente as configurações de banco de dados.

3. **Gerar a Chave da Aplicação**:
    Execute o comando abaixo para gerar a chave da aplicação:
    ```
    php artisan key:generate
    ```
    

4. **Rodar as Migrações e Seeders**: Execute as migrações para criar as tabelas no banco de dados e os `seeders` para popular a tabela `users`:
    ```
    php artisan migrate --seed
    ```

5. **Iniciar o Servidor de Desenvolvimento**:
    Inicie o servidor de desenvolvimento do Laravel:
    ```
    php artisan serve
    ```

6. **Acessar a Aplicação**:
    Abra o navegador e acesse `http://localhost:8000` para ver a aplicação em execução.


## Segurança

1. **Uso do Eloquent ORM**:

- `User::where('name', $name)->first()`; é uma consulta segura que usa o Eloquent ORM do Laravel. Ele automaticamente escapa os valores das variáveis `$name` e `$password`, prevenindo SQL injection.

2. **Hashing de Senhas**:

- `Hash::check($password, $user->password)` verifica se a senha fornecida corresponde ao hash armazenado no banco de dados.