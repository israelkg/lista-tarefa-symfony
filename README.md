# 👨‍💻 Projeto: Lista de Tarefas (To-Do List)

Este projeto é uma aplicação web simples de gerenciamento de tarefas (To-Do List) construída com o framework PHP Symfony. Ele foi desenvolvido com o objetivo de consolidar conhecimentos práticos sobre os principais conceitos do Symfony, como rotas, controladores, Twig, Doctrine ORM, formulários e a integração básica de estilos.

A aplicação permite que o usuário adicione, visualize, edite e exclua tarefas, com persistência de dados em um banco de dados relacional.

## 📚 Índice

* [📄 Descrição](#-descrição)
* [✨ Funcionalidades](#-funcionalidades)
* [⚙️ Tecnologias Usadas](#-tecnologias-usadas)
* [📌 Pré-requisitos](#-pré-requisitos)
* [📦 Instalação](#-instalação)
* [🚀 Como Usar](#-como-usar)
* [🤝 Contribuição](#-contribuição)

---

## 📄 Descrição

Este projeto é uma aplicação web simples de gerenciamento de tarefas (To-Do List) construída com o framework PHP Symfony. Ele foi desenvolvido com o objetivo de consolidar conhecimentos práticos sobre os principais conceitos do Symfony, como rotas, controladores, Twig, Doctrine ORM, formulários e a integração básica de estilos.

A aplicação permite que o usuário adicione, visualize, edite e exclua tarefas, com persistência de dados em um banco de dados relacional.

---

## ✨ Funcionalidades

* **Criar (Create):** Adicionar novas tarefas à lista via formulário.
* **Listar (Read):** Exibir todas as tarefas cadastradas em uma interface clara.
* **Editar (Update):** Modificar detalhes de tarefas existentes através de um formulário pré-preenchido.
* **Excluir (Delete):** Remover tarefas do banco de dados com confirmação de segurança (CSRF token).
* **Persistência de Dados:** Armazenamento das tarefas em um banco de dados (PostgreSQL ou SQLite).
* **Feedback ao Usuário:** Mensagens flash para indicar sucesso ou falha das operações (ex: "Tarefa criada com sucesso!").

---

## ⚙️ Tecnologias Usadas

* **PHP 8.1+:** Linguagem de programação principal.
* **Symfony 6/7:** Framework PHP robusto para o backend.
* **Composer:** Gerenciador de dependências PHP.
* **Doctrine ORM:** Mapeamento Objeto-Relacional para abstração do banco de dados.
* **Twig:** Motor de templates flexível para as views.
* **Tailwind CSS (CDN):** Framework CSS utilitário para estilização rápida e funcional.
* **PostgreSQL / SQLite:** Sistemas de gerenciamento de banco de dados.
* **Git & GitHub:** Ferramentas para controle de versão e hospedagem.

---

## 📌 Pré-requisitos

Para rodar este projeto localmente, você precisará ter as seguintes ferramentas instaladas:

* **PHP 8.1+** (com as extensões PDO necessárias para o seu banco de dados, ex: `pdo_pgsql`, `pdo_mysql`, `pdo_sqlite` - configuradas no seu `php.ini`).
* **Composer**.
* Um sistema de gerenciamento de banco de dados (ex: **PostgreSQL**, **MySQL/MariaDB**, ou **SQLite** que não requer instalação de servidor).
* Um servidor web local (ex: Apache/Nginx via XAMPP, WAMP, MAMP, ou o servidor embutido do PHP).

---

## 📦 Instalação

Siga os passos abaixo para preparar o ambiente e instalar o projeto:

### Clone o Repositório:

```bash
git clone [https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git](https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git)
cd NOME_DO_REPOSITORIO
