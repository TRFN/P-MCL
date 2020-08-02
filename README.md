# P-MCL

PHP Model Control Layout System

Sistema simplificado de desenvolvimento de aplicações Web


# Esquema de diretórios e arquivos

* ./public_html -> Diretório que contem os arquivos comuns do site, plugins de terceiros e afins. (Varios)

* ./public_html/.htaccess -> Arquivo que contem as configurações para o funcionamento do servidor de maneria correta (HTACCESS File)

* ./app -> Diretório que contem a aplicação (Pastas)

* ./app/controles -> Diretório que contem os arquivos de controle de páginas (.php)

* ./app/database -> Diretório que contem os arquivos de banco de dados (.db)

* ./app/layout -> Diretório que contem os arquivos de layout para páginas (.html)

* ./app/modelos -> Diretório que contem os arquivos de modelo para páginas (.html)

* ./app/motor -> Pasta que contém os arquivos básicos de funcionamento do sistema/aplicação. (Varios)

* ./app/motor/app.json -> Arquivo que contem os parametros principais da aplicação. (Application/JSON)

* ./app/motor/core.php -> Classe principal do motor, ela contem todo esquema do contexto. (PHP File)

* ./app/motor/classes -> Pasta que contem sub-funções da classe principal, destinada a add-ons. (.php)

* ./app/scripts -> Pasta que contem scripts interativos ao contexto (.js)

* ./app/styles -> Pasta que contem estilos interativos ao contexto (.css)


# Classe -> database

* Carregamento: $variavel = new database([nome do banco(opcional,default:não carregar)],[senha(opcional)]);

* Inicialização: $variavel->iniciar([nome do banco(opcional,default:global)],[senha(opcional)]);

* Leitura: $variavel->ler(["\*"|{nome-da-chave ou numero de indice}],[objeto(true:false)],[reload(true:false)]);

* Escrita: $variavel->escrever([chave],[valor]);

* Gravar: $variavel->gravar();


# Classe -> sessoes

* Carregamento: $variavel = new sessoes([nome do banco(id,obrigatório)],[debug(opcional,default:modo de produção{false})]);

* VAR: $variavel->u_name (read and write) => Variável primaria de nome de usuário que será lida como acesso

* VAR: $variavel->u_pass (read and write) => Variável do usuário que será lida como senha

* VAR: $variavel->erros (read only) {
 
    $variavel->erros->login => Contem o ultimo erro de login

    $variavel->erros->criar_conta => Contem o ultimo erro ao criar uma conta

    $variavel->erros->alterar_dado => Contem o ultimo erro ao alterar um dado

}

* FN: $variavel->criar_conta($dados) => Cria uma conta de usuário. Obrigatório que haja um nome de usuário e senha compatíveis com o que será lido.

* FN: $variavel->login($dados) => Tenta realizar o login com os dados de usuário e senha

* FN: $variavel->logout() => Realiza o logout

* FN: $variavel->conexao() => Carrega a conexão atual (caso não esteja conectado retorna -1)

* FN: $variavel->conectado() => retorna verdadeiro ou falso acerca de estar conectado

* FN: $variavel->alterar_dado($dados, $conta = -1) => Permite alterar um dado de usuário. Caso $conta seja -1 ou não seja especificado, a conta conectada será modificada.

* FN: $variavel->listar_contas() => Permite listar todas as contas vinculadas.

* FN: $variavel->conta_disponivel($u_name) => Verifica se um nome de usuário está dispoível

* FN: $variavel->apagar_conta($id) => Apaga uma conta

# Modo de funcionamento

O projeto deve ser configurado através do app.json.
