# ft_server
O objetivo do ft_server é criar um servidor web capaz de executar um wordpress, um phpmyadmin e um banco de dados. Este servidor será executado em um container Docker, usando o Debian Buster.
***
##ToC
- [O que é o ft_server?](#o-que---o-ft_server)
- [Como usar o ft_server?](#como-usar-o-ft_server)
  - [Instalando o Docker](#instalando-o-docker)
  - [Iniciando o ft_server](#iniciando o ft_server)
-

<a name="o-que---o-ft_server"></a>
### O que é o ft_server?
É um projeto da [42 São Paulo](https://www.42sp.org.br/) que tem como objetivo criar um servidor web dinâmico em um container usando o Docker.
Para isso, utilizaremos:
- **Debian Buster** - Sistema operacional;
- **NGINX** - Servidor HTTP;
- **Maria DB** - Banco de Dados;
- **PHP** - Linguagem de scripts.

Também serão instaladas e configurados o WordPress e o phpMyAdmin para demonstrar a funcionalidade do projeto.

<a name="como-usar-o-ft_server"></a>
### Como usar o ft_server?
Antes de tudo, você precisa instalar o docker para que o container possa sere criado.
<a name="instalando-o-docker"></a>
#### Instalando o Docker
> :warning: Docker em sistemas Linux, se o seu sistema operacional for outro, busque uma alternativa ou entre em contato.

1º Atualize seu sistema:
```consloe
sudo apt update
sudo apt upgrade
```
2º Instale os pacotes nescessários para que o Docker seja instalado:
```
sudo apt-get install  curl apt-transport-https ca-certificates software-properties-common
```
O que você está instalando aqui:
- **apt-transport-https** – permite que o gerenciador de pacotes transfira os tiles e os dados através de https;
- **ca-certificates** – permite que o navegador da web e o sistema verifiquem certificados de segurança;
- **curl** – transfere dados;
- **software-properties-common** – adiciona scripts para gerenciar o software.

3º Adicione os repositórios do Docker:
```
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
sudo apt update
```
4º Instale o Docker:
```
sudo apt install docker-ce
```
Pronto! ✔️ O Docker já está instalado em seu computador.

<a name="iniciando o ft_server"></a>
#### Iniciando o ft_server
