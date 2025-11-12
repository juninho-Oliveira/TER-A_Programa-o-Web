<?php
require("config.php");
//require -> requisita uma página e da erro
	//caso a página não carregue
	//require_once -> Mesmo que o require mas só executa
	//uma vez
	//include -> Requisita a página porém não dá erro
	//include_once
?>
<html>
	<head>
		<style>
			td{
				padding:5px;
			}
		</style>
	</head>
	<body>
	<?php
	//consulta na tabela alunos
	$consulta = "select * from usuarios";
	$obj_consulta = mysqli_query($con,$consulta) or die(mysqli_error($con));
	?>
			
<table border="1" cellspacing="0"  >
	<tr>
		<th>Id Usuário</th>
		<th>Nome</th>
		
		<th>Data de Nascimento</th>
		<th>Usuário</th>
		<th>Senha</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>
				
<?php
//laço de repetição para formar a tabela no html
while($reg_consulta = mysqli_fetch_array($obj_consulta)){
echo "<tr>";
echo "<td>". $reg_consulta["id_usuario"] . "</td>";
echo "<td>". $reg_consulta["nome_usuario"] . "</td>";

echo "<td>";
	$data = new DateTime($reg_consulta["dt_nascimento"]);
	echo $data->format('d/m/Y');
echo "</td>";

echo "<td>". $reg_consulta["usuario"] . "</td>";

echo "<td>". str_repeat("*",strlen($reg_consulta["senha"]) ) . "</td>";
echo "<td>". $reg_consulta["email"] . "</td>";

									
				
						
	
						echo "<td>
						<a href='inserir_form.php' target='_self'>
							Incluir Usuário
						</a>
						<br/>
						<a href='alterar_form.php?id_usuario="
						. $reg_consulta["id_usuario"] . "' target='_self'>
							Alterar Usuário
						</a>
						<br>
						<a href='apagar_proc.php?id_usuario="
						. $reg_consulta["id_usuario"] . "' target='_self'>
							Excluir Usuário
						</a>
						</td>";
					}
				
				?>
			</table>
	</body>
</html>

create database aula_php_junior;
use aula_php_junior; -- use é o comando para 
-- ultilizar um banco de dados 

create table usuarios (
	id_usuario int not null auto_increment primary key,
    nome_usuario varchar(200),
    usuario varchar(10) unique,
    senha varchar(20),
    email varchar(200),
    cpf char(11),
    dt_nascimento date,
    tipo_usuario varchar(10),
    status char(1)
);

describe usuarios;

insert into usuarios values(
	null,
    'Junior',
    'juninho123',
    '123456', -- senha em ambiente real é HASH
    'junior@unicid.edu.br',
    '1234567891011',
    '2020-12-18', -- ano mês dia
    'admin',
    'a'
);

use aula_php_junior;
show databases;
show tables;

describe usuarios;
select * from usuarios;


select nome_usuario, senha from usuarios usuarios 
where
email = 'junior@unicid.edu.br'
and
(usuario = 'juninho123' and senha = 123456);

update usuarios set nome_usuario ='junior' where id_usuario = 3 ;

















