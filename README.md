<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<!DOCTYPE html>
<html>
<head>
	<title>Teste Laravel</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			padding: 20px;
		}
		h1 {
			margin-bottom: 20px;
		}
		h2 {
			margin-top: 40px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		.code {
			background-color: #f2f2f2;
			padding: 20px;
			overflow-x: auto;
			font-size: 14px;
			line-height: 1.5;
			border-radius: 5px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Teste Laravel</h1>
	<p>Projeto criado para teste de emprego, com as seguintes funcionalidades:</p>
	<ul>
		<li>Cadastro de turmas e edição de turmas;</li>
		<li>Cadastro de alunos;</li>
		<li>Gerenciador de presenças.</li>
	</ul>
	<h2>Banco de Dados</h2>
	<p>O banco de dados é o MySQL, e conta com as seguintes tabelas:</p>
	<h3>Alunos</h3>
	<table>
		<thead>
			<tr>
				<th>Coluna</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>id</td>
				<td>int</td>
			</tr>
			<tr>
				<td>nome</td>
				<td>varchar</td>
			</tr>
			<tr>
				<td>data_nascimento</td>
				<td>date</td>
			</tr>
			<tr>
				<td>cpf</td>
				<td>varchar</td>
			</tr>
			<tr>
				<td>created_at</td>
				<td>timestamp</td>
			</tr>
			<tr>
				<td>updated_at</td>
				<td>timestamp</td>
			</tr>
			<tr>
				<td>turma_id</td>
				<td>int</td>
			</tr>
		</tbody>
	</table>
	<h3>Turmas</h3>
	<table>
		<thead>
			<tr>
				<th>Coluna</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>id</td>
				<td>int</td>
			</tr>
			<tr>
				<td>descricao</td>
				<td>varchar</td>
			</tr>
			<tr>
				<td>ano</td>
				<td>int</td>
			</tr>
			<tr>
				<td>vagas</td>
				<td>int</td>
			</tr>
			<tr>
				<td>created_at</td>
				<td>timestamp
    <h2>Banco de dados</h2>
    <p>O banco de dados é o MySQL, e conta com as seguintes tabelas:</p>

    <table>
      <thead>
        <tr>
          <th>Tabela</th>
          <th>Colunas</th>
          <th>Relacionamentos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alunos</td>
          <td>id, nome, data_nascimento, cpf, created_at, updated_at, turma_id</td>
          <td>Relacionamento de muitos para um com a tabela Turmas, de um para muitos com a tabela Matriculas e com a tabela Chamadas</td>
        </tr>
        <tr>
          <td>Turmas</td>
          <td>id, descricao, ano, vagas, created_at, updated_at</td>
          <td>Relacionamento de um para muitos com a tabela Matriculas</td>
        </tr>
        <tr>
          <td>Matriculas</td>
          <td>id, aluno_id, turma_id, data_matricula, created_at, updated_at</td>
          <td>Relacionamento de muitos para um com a tabela Alunos e de um para muitos com a tabela Turmas</td>
        </tr>
        <tr>
          <td>Chamadas</td>
          <td>id, data, presente, aluno_id, created_at, updated_at</td>
          <td>Relacionamento de muitos para um com a tabela Alunos</td>
        </tr>
      </tbody>
    </table>

    <h2>Tecnologias</h2>
    <p>Este projeto foi desenvolvido com Laravel, um framework PHP moderno e popular, utilizado para o desenvolvimento de aplicativos web e API's RESTful. O projeto também utiliza o banco de dados MySQL.</p>

    <h2>Como Rodar o Projeto</h2>
    <ol>
      <li>Clone o repositório para sua máquina local;</li>
      <li>Crie um banco de dados no MySQL;</li>
      <li>Copie o arquivo <code>.env.example</code> para um novo arquivo <code>.env</code> e configure as variáveis de ambiente, como o nome do banco de dados e credenciais de acesso;</li>
      <li>Execute o comando <code>php artisan migrate</code> para executar as migrações e criar as tabelas do banco de dados;</li>
      <li>Execute o comando <code>php artisan serve</code> para rodar o servidor localmente;</li>
      <li>Acesse o projeto no seu navegador através do endereço <code>http://localhost:8000</code>.</li>
    </ol>

    <h2>Conclusão</h2>
    <p>Este projeto foi desenvolvido como teste para uma vaga de emprego, utilizando Laravel como framework principal, e MySQL como banco de dados. As funcionalidades incluem cadastro de turmas, alunos e gerenciamento de presenças.</p>
