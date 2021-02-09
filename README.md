# Instalação
1. Rode o comando ``composer install`` para instalar as dependencias do projeto.
2. Na raiz do projeto , copie o conteúdo do arquivo **.env.example** , e crie na raiz um arquivo chamado .env , e cole seu conteúdo.
3. Rode o comando ``php artisan key:generate`` , para gerar uma chave para aplicação no .env .
4. No arquivo .env , das variaveis com nome **DB** , insira as configurações do banco que será utilizado pela aplicação.
5. Rode o comando ``php artisan migrate`` , para migrar para as tabelas que serão utilizadas pela aplicação , para seu banco.

# Utilização
1. Rode o comando ``php artisan serve`` , para utilizar a aplicação localmente.
2. Na tela inicial , clique em **Registrar** para registrar um novo usuário na aplicação.
3. Faça o login com email e senha do usuário criado.
4. No Dashboard , clique em **Cursos** e selecione a opção **Cadastrar Curso** , ou se preferir importar via XML , clique na opção **Todos Cursos** e importe o arquivo.
5. Depois de ter cadastrado os Cursos , é hora de cadastrar os Alunos , para isso clique na opção **Cadastrar Alunos do navbar**. Para edição , e exclusão de alunos , basta acessar a opção **Todos Alunos**.
