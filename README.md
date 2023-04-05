<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<br>

## Teste Laravel

Projeto criado para teste de emprego, com as seguintes funcionalidades:

- Cadastro de turmas e edição de turmas;
- Cadastro de alunos;
- Gerenciador de presenças.

## Banco de dados

O banco de dados é o MySQL, e conta com as seguintes tabelas:

### Alunos

| Coluna        | Tipo       |
| ------------- | ---------- |
| id            | int        |
| nome          | varchar    |
| data_nascimento | date      |
| cpf           | varchar    |
| created_at    | timestamp  |
| updated_at    | timestamp  |
| turma_id      | int        |

### Turmas

| Coluna        | Tipo       |
| ------------- | ---------- |
| id            | int        |
| descricao     | varchar    |
| ano           | int        |
| vagas         | int        |
| created_at    | timestamp  |
| updated_at    | timestamp  |

### Matriculas

| Coluna        | Tipo       |
| ------------- | ---------- |
| id            | int        |
| aluno_id      | int        |
| turma_id      | int        |
| data_matricula| date       |
| created_at    | timestamp  |
| updated_at    | timestamp  |

### Chamadas

| Coluna        | Tipo       |
| ------------- | ---------- |
| id            | int        |
| data          | date       |
| presente      | boolean    |
| aluno_id      | int        |
| created_at    | timestamp  |
| updated_at    | timestamp  |

## Relacionamentos

As tabelas possuem os seguintes relacionamentos:

- A tabela `Alunos` tem um relacionamento de muitos para um com a tabela `Turmas`.
- A tabela `Alunos` tem um relacionamento de um para muitos com a tabela `Matriculas`.
- A tabela `Turmas` tem um relacionamento de um para muitos com a tabela `Matriculas`.
- A tabela `Alunos` tem um relacionamento de um para muitos com a tabela `Chamadas`.

## Tecnologias

Este projeto foi desenvolvido com Laravel, um framework PHP moderno e popular, utilizado para o desenvolvimento de aplicativos web e API's RESTful. O projeto também utiliza o banco de dados MySQL.


## Como Rodar o Projeto

1. Clone o repositório para sua máquina local;
2. Crie um banco de dados no MySQL;
3. Copie o arquivo `.env.example` para um novo arquivo `.env` e configure as variáveis de ambiente, como o nome do banco de dados e credenciais de acesso;
4. Execute o comando `php artisan migrate` para executar as migrações e criar as tabelas do banco de dados;
5. Execute o comando `php artisan serve` para rodar o servidor localmente;
6. Acesse o projeto no seu navegador através do endereço http://localhost:8000.

## Conclusão

Este projeto foi desenvolvido como teste para uma vaga de emprego, utilizando Laravel como framework principal, e MySQL como banco de dados. As funcionalidades incluem cadastro de turmas, alunos e gerenciamento de presenças.
