
# 🧠 Plataforma de Gerenciamento Clínico: Psicologia & Pacientes

[![Status](https://img.shields.io/badge/Status-Pronto%20para%20Deploy-success)](README.md)
[![Framework](https://img.shields.io/badge/Framework-CodeIgniter%204-red)](https://codeigniter.com/)
[![Arquitetura](https://img.shields.io/badge/Padrão-MVC-blue)](README.md)
[![PHP Versão](https://img.shields.io/badge/PHP-8.1%2B-informational)](README.md)

---

## ✨ Visão Geral do Projeto

Esta aplicação é uma plataforma web para gestão clínica, desenvolvida para digitalizar e otimizar o fluxo de trabalho entre **Psicólogas** e **Pacientes**. Utiliza o **CodeIgniter 4** e o padrão **MVC** para garantir uma estrutura de código limpa e segura. O sistema oferece ambientes de trabalho isolados por perfil, gerenciando agendamentos, finanças e documentos com foco total na confidencialidade dos dados.

---

## 🚀 Funcionalidades Chave

O acesso é estritamente controlado e segregado em dois perfis, definidos no momento do cadastro.

### 👩‍⚕️ Portal da Psicóloga
O back-end fornece acesso completo às ferramentas de gestão:

| Funcionalidade | Descrição |
| :--- | :--- |
| **📅 Agenda Completa** | Visualização, edição e gestão de todos os agendamentos. |
| **💰 Controle Financeiro** | Acesso ao **Resumo Financeiro** e atualização do status de **Pagamento** (Pago / Não Pago) por paciente. |
| **📄 Gestão de Documentos** | **Upload**, armazenamento seguro e disponibilização de documentos clínicos (como laudos) ao paciente. |
| **👥 Dados do Paciente** | Gerenciamento de informações básicas e registro de acompanhantes. |

### 👤 Portal do Paciente
O paciente possui acesso exclusivo e limitado às suas informações:

| Funcionalidade | Descrição |
| :--- | :--- |
| **🗓️ Agendamento** | Marcação de novas consultas e visualização do histórico de sessões. |
| **💸 Status de Pagamento** | Confirmação e acompanhamento pessoal do status de quitação para organização. |
| **🗂️ Documentos Recebidos** | Acesso seguro e visualização dos documentos compartilhados pela Psicóloga. |
| **📝 Meu Perfil** | Visualização e atualização de dados cadastrais. |

---

## 🛠️ Arquitetura e Segurança

### Back-end e API

O coração do sistema é o back-end em **CodeIgniter 4 / PHP**, que atua como **API RESTful** para o front-end, trocando dados primariamente em formato **JSON**.

* **Padrão MVC:** Garantia de separação lógica: **Model** (Interação com o Banco de Dados), **View** (Interface) e **Controller** (Lógica de Negócio e Roteamento).
* **Protocolo:** Comunicação estrita via **HTTPS**, utilizando métodos como `GET`, `POST`, `PUT/PATCH` e `DELETE`.

### 🛡️ Segurança de Dados

A proteção das informações é prioritária e implementada através de métodos de segurança:

* **Hashing de Senhas (com Salt):** As senhas são protegidas por **Hashing** robusto (não reversível), utilizando as funções nativas do CodeIgniter, garantindo que as credenciais nunca sejam armazenadas em texto simples no banco de dados.
* **Autorização por Perfil:** O back-end verifica o nível de acesso (`Psicóloga` ou `Paciente`) em cada chamada à API para impedir o acesso não autorizado a recursos.
* **Prevenção de SQL Injection:** Utilização de **Consultas Preparadas** (*Prepared Statements*), padrão do *framework*, para proteger o banco de dados contra ataques de injeção.

---

## ⚙️ Instalação e Configuração

Esta seção é crucial para configurar o ambiente de desenvolvimento.

### 1. Requisitos do Servidor

Certifique-se de que seu ambiente atende aos seguintes requisitos:

* **PHP** versão **8.1** ou superior.
* Extensões PHP obrigatórias: **`intl`** e **`mbstring`**.
* Extensões recomendadas: **`json`**, **`mysqlnd`** (para MySQL) e **`libcurl`**.

### 2. Passo a Passo

1.  **Clonar o Repositório:**
    ```bash
    git clone [LINK_DO_SEU_REPOSITORIO]
    cd nome-do-projeto
    ```
2.  **Instalar Dependências:**
    ```bash
    composer install
    ```
3.  **Configurar o Ambiente (`.env`):**
    * Copie `env` para **`.env`**.
    * Ajuste `app.baseURL` e configure as credenciais do seu banco de dados na seção `database.*`.

### 3. Configuração de Segurança (Servidor Web)

🚨 **IMPORTANTE:** O servidor web (Apache/Nginx) deve ser configurado para apontar a raiz do projeto para a pasta **`public/`**. Esta é uma medida de segurança essencial do CodeIgniter para proteger o código-fonte.

### 4. Manutenção

Para manter as dependências e o *framework* atualizados:
```bash
composer update