# Sistema de Login em PHP

- Neste repo estarei colocando um projeto meu, um simples sistema de login feito em php

Acho importante aprender como funciona um Sistema De Login simples, até para você saber como funciona todo o fluxo, por mais simples que esse projeto seja, ter uma noção de como desenvolver ou pensar em um sistema de login é fundamental para um programador (na minha opinião).

Nesse projeto tentei deixar meu código mais organizado, separando cada script por pastas (contextualmente nomeadas) e comentários que me ajudaram a entender melhor cada trecho do código

## Neste projeto ultilizei:

- PostgreSQL como banco de dados para armazenar a informação do nosso usuário.
- PHP como linguagem de script (estou aprendento, e gostando muito!)

## Neste projeto aprendi

- Conexão com banco de dados (PostgreSQL) com PHP puro
[Banco de dados: conexão](./config/db.php)

- Organização de pastas do projeto (ainda não esta tão legal, preciso aprender mais essa boa prática, segui o exemplo de um desenvolvedor do Stack Overflow abaixo: )

```bash
/(sistema_login)
|-- app/               # Diretório onde você coloca seus scripts PHP principais
|   |-- index.php      # Arquivo principal para rodar o servidor
|   |-- outras_páginas.php  # Outros arquivos PHP da aplicação
|
|-- config/            # Arquivos de configuração, como conexão com o banco
|   |-- db.php         # Conexão com o banco de dados
|   |-- config.php     # Outras configurações gerais, se necessário
|
|-- css/               # Arquivos de estilo (CSS)
|   |-- style.css      # Arquivo principal de CSS
|
|-- includes/          # Arquivos de inclusão, como header, footer, etc
|   |-- header.php     # Cabeçalho do site
|   |-- footer.php     # Rodapé do site
|   |-- form.php       # Formulários de login ou outros
|
|-- sessions/          # Arquivos relacionados às sessões do usuário
|   |-- welcome.php    # Página de boas-vindas após o login
|   |-- outra_pagina.php
|
|-- .gitignore         # Arquivo para ignorar arquivos no controle de versão (se estiver usando git)
|-- index.php          # Pode ser a página principal que será acessada, dependendo da estrutura
```
- ultilizar includes, entrando no escopo 'organização' é essencial separar o código por partes no PHP, ainda mais quando se usa HTML junto, então usar o include foi fundamental para manter uma boa organização

- [Footer](./includes/footer.php)
- [Form](./includes/form.php.php)
- [Header](./includes/header.php.php)
- [App](./app/index.php)

- Gerenciar um banco de dados
Resolvi ultilizar o postgres pela facilidade que ja tinham me falado que era, foi bem tranquilo usar, aprendi a criar um User.

```bash
CREATE USER user_system WITH PASSWORD 'system0101';
```
E um banco de dados
```bash
CREATE DATABASE login_system;
```

Criar uma tabela
```bash
CREATE TABLE users (
	users_token_id VARCHAR(255),
	users_email VARCHAR(255),
	users_password VARCHAR(255),
);
```

Inserir informações na tabela
```bash
INSERT INTO users (users_token_id, users_email, users_password) 
VALUES ('593fc900-f0d3-42a3-a0e1-30136cc7bf0d', 'system@exec.com', 'postgresql');
```

Listar a tabela
```bash
SELECT * FROM users;
```

## E por ultimo mas não menos importante Lógica de programação!, sinto que usei bastante lógica nesse projeto, estruturas condicionais e algumas functions no php que não sabia da existencia (kkkkkk), foi uma boa experiência!

