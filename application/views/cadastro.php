<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Teste RPM - Cadastro</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://theforestbr.com/rpm/css/mycustom.css">
	</head>
	<body>
		<div id="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Título -->
					<h2>Cadastro de Usuários</h2>
				</div>
				<div class="col-md-6">
					<form id="cadastrar" method="POST" class="form-horizontal">
						<!-- ###### DADOS DO USUÁRIO ###### -->
						
						<!-- Nome-->
						<div class="form-group">
						  <h4>Dados Pessoais</h4>
						  <label class="col-md-4 control-label" for="txtNome">Nome <span class="text-danger">(*)</span></label>  
						  <div class="col-md-12">
							<input id="txtNome" name="txtNome" type="text" placeholder="Digite seu nome" class="form-control input-md" required>
						  </div>
						</div>

						<!-- Email-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="txtEmail">Email <span class="text-danger">(*)</span></label>  
						  <div class="col-md-12">
							<input id="txtEmail" name="txtEmail" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required>
						  </div>
						</div>
						
						<!-- Senha -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="txtSenha">Senha <span class="text-danger">(*)</span></label>
						  <div class="col-md-12">
							<input id="txtSenha" name="txtSenha" type="password" placeholder="Digite a senha" pattern=".{6,}" title="Mínimo de 6 caracteres" class="form-control input-md" required>
						  </div>
						</div>
						
						<!-- Confirmar Senha -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="txtConfSenha">Confirmar Senha <span class="text-danger">(*)</span></label>
						  <div class="col-md-12">
							<input id="txtConfSenha" name="txtConfSenha" type="password" placeholder="Confirme a senha digitada" class="form-control input-md" required>
						  </div>
						</div>
						<!-- Telefone -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="txtTelefone">Telefone <span class="text-danger">(*)</span></label>
						  <div class="col-md-6">
							<input id="txtTelefone" name="txtTelefone" type="text" placeholder="(xx) xxxxx-xxxx" class="form-control input-md" required>
						  </div>
						</div>
						
						<!-- RG -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="txtRg">RG</label>
						  <div class="col-md-6">
							<input id="txtRg" name="txtRg" type="text" placeholder="Digite seu RG" class="form-control input-md">
							
						  </div>
						</div>
				</div>
				<div class="col-md-6">				
					<!-- ###### ENDEREÇO ###### -->
					<h4>Endereço</h4>
					<!-- CEP -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">CEP <span class="text-danger">(*)</span></label>  
						<div class="col-md-3">
							<input id="txtCep" name="txtCep" type="text"  maxlength="8" required  placeholder="CEP" class="form-control input-md" >
						</div>
					</div>
					
					<!-- CEP -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Logradouro <span class="text-danger">(*)</span></label>  
						<div class="col-md-8">
							<input id="txtLogradouro" name="txtLogradouro" type="text"  maxlength="8" required  placeholder="Rua, avenida, etc" class="form-control input-md" >
						</div>
					</div>
					
					<!-- Número -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Número <span class="text-danger">(*)</span></label>  
						<div class="col-md-2">
							<input id="txtNumero" name="txtNumero" type="text"  placeholder="Nº" class="form-control input-md"  required>
						</div>
					</div>
					
					<!-- Complemento -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Complemento</label>  
						<div class="col-md-8">
							<input id="txtComplemento" name="txtComplemento" type="text" maxlength="50" placeholder="Apto, Bloco, etc" class="form-control input-md">
						</div>
					</div>
					
					<!-- Bairro -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Bairro <span class="text-danger">(*)</span></label>  
						<div class="col-md-8">
							<input id="txtBairro" name="txtBairro" type="text"  placeholder="Vila, Vale, etc" class="form-control input-md" required>
						</div>
					</div>
					
					<!-- Cidade -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Cidade <span class="text-danger">(*)</span></label>  
						<div class="col-md-8">
							<input id="txtCidade" name="txtCidade" type="text"  placeholder="São Paulo, Minas Gerais, etc" class="form-control input-md" required>
						</div>
					</div>
					
					<!-- Estado -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="txtCep">Estado <span class="text-danger">(*)</span></label>  
						<div class="col-md-8">
							<input id="txtEstado" name="txtEstado" type="text"  placeholder="SP, MG, etc" class="form-control input-md" maxlength=2  required>
						</div>
					</div>
				</div>
				<div class="col-md-12">	
					<!-- Botões -->
					<div class="form-group col-md-12 ">
						<div class="float-left"><span class="text-danger">(*)</span> Campos obrigatórios</div>
					 	<button id="btnConfirmar" type="submit" name="btnConfirmar" class="btn btn-success col-md-5 col-lg-1 float-right" value="C">Confirmar</button>
						<button id="btnCancelar" name="btnCancelar" class="btn btn-danger col-md-5 col-lg-1  float-right">Cancelar</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script type='text/javascript' src="https://theforestbr.com/rpm/js/mycustom.js"></script>
	</body>
</html>