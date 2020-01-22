# Trabalho Loja Virtual

## Estrutura de diretórios

`public/` - diretório que será exposto pelo servidor

`views/` - diretório onde estão as views

`model/` - diretório onde estão todas as classes utilizadas

## Colocando fontes no servidor

Para servir os arquivos, a o diretório `public/` deve ser a raíz do servidor, os diretórios `model/` e `views/` irão ficar um nível abaixo.

## Configuração do Banco de Dados

O trabalho utiliza PDO e o arquivo que realiza a conexão ao banco é `model/DB.php`, nele devem ser alteradas as credenciais de acesso ao banco.

O arquivo `initial-ddl.sql` é um arquivo de dump com a estrutura de banco utilizada no trabalho e dados préviamente cadastrados.


