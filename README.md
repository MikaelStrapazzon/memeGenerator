# MemeGenerator

## Informações (DEV)
- Aplicação: **Porta 8020**
- Banco de Dados:
    - Senha e usuário padrão: **root**
- PhpMyAdmin: **Porta 8010**

## Como executar o projeto

### Produção
- Em construção

### Desenvolvimento
#### Requisitos
- Docker (https://www.docker.com/)
- Docker-compose (https://docs.docker.com/compose/install/)

Você pode testar as instalações com os seguintes comandos
  ```
  docker -v
  docker-compose -v
  ```
#### Inicializando
- Na raiz do projeto, rodar o seguinte comando **(Windows)**:
  ```
   docker-compose -f ./containers/developer/docker-compose.dev.yml up
  ```
- Na raiz do projeto, rodar o seguinte comando **(Linux)**:
  ```
   sudo sh initDevelopmentServ.sh
  ```

#### Observações
- Se você <b>não está rodando em localhost</b>, é necessário alterar o campo APP_URL no arquivo .env para o ip da vm
- Talves seja necessário desativar a proteção do Brave para funcionar a injeção de CSS e JS do Vite (Hot Reload)
