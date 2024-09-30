
# CadLog_System

## Descrição do Projeto

O **CadLog_System** é uma aplicação de cadastro e login de usuários, com três diferentes níveis de acesso:

1. **Administrador (Admin)**: Possui controle total sobre o sistema, incluindo a gestão de usuários e configurações globais.
2. **Gestor**: Conta com permissões intermediárias, podendo gerenciar dados e equipes sob sua supervisão.
3. **Colaborador**: Tem acesso restrito a funcionalidades específicas da aplicação, limitadas às suas responsabilidades.

O foco principal do projeto é garantir **usabilidade** e **acessibilidade**, com uma interface moderna, responsiva e com cores suaves, proporcionando uma experiência agradável em dispositivos de diferentes tamanhos.

## Tecnologias Utilizadas

- **CSS3**: Para estilização, com efeitos de degradê, animações e fontes amigáveis ao usuário.
- **PHP**: Responsável pela lógica de back-end, incluindo autenticação, cadastro e gerenciamento de usuários.
- **MySQL**: Banco de dados utilizado para armazenar as informações de usuários e seus perfis.

## Funcionalidades

- **Login de Usuário**: Permite o acesso ao sistema mediante email e senha cadastrados.
- **Cadastro de Usuário**: Facilita a criação de novos usuários e atribuição de diferentes perfis (Admin, Gestor, Colaborador).
- **Validação de Formulários**: Verificação automática de campos obrigatórios e padrões corretos para email e senha.
- **Design Responsivo**: O layout adapta-se automaticamente a diferentes resoluções de tela, assegurando boa experiência tanto em computadores quanto em dispositivos móveis.
- **Degradês e Animações CSS**: O design inclui fundos com gradientes de rosa a roxo pastel, além de animações nos botões que mudam de cor e aumentam de tamanho ao serem clicados ou quando o mouse passa sobre eles.

## Telas

### Tela de Login:

```html
<input type="email" name="email" placeholder="Email" required><br>
<input type="password" name="senha" placeholder="Senha" required><br>
```
![imagem]()

### Tela de Cadastro:

```html
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" required>
<label for="email">Email</label>
<input type="email" name="email" id="email" required>
<label for="senha">Senha</label>
<input type="password" name="senha" id="senha" required>
<label for="perfil">Perfil:</label>
```

## Tecnologias Suporte

- **GitHub**: Repositório para versionamento de código.
- **Xampp**: Ferramenta para rodar o ambiente de desenvolvimento.
- **PhpMyAdmin**: Interface para gerenciar o banco de dados MySQL.
- **PHP**: Linguagem de programação para o back-end.
- **CSS** e **HTML**: Para o front-end.

## Contato e Agradecimentos

Agradecemos a todos os desenvolvedores e colaboradores que contribuíram para o desenvolvimento deste projeto. Suas sugestões e apoio são fundamentais para a evolução contínua da aplicação.

Se tiver dúvidas ou sugestões, entre em contato conosco.
