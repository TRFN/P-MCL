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


# Modo de funcionamento

O projeto deve ser configurado através do app.json.
