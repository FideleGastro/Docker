# Docker

Surcouche docker-compose en YAML 
https://docs.docker.com/compose/compose-file/compose-file-v2

- `docker-compose build` crée/édite des images via leur Dockfile (recharge les src/ en les écrasant si l'image existe déjà)
- `docker-compose up -d` instance tout les composants dans le .yml (prend en compte par défault les "links" pour les ordres d'instances)
- `docker-compose up -d phpmyadmin-test` lancera phpmyadmin->Mysql
- `docker-compose down` stop les instances, et les --rm


Note: 
- il semblerait que link fasse les communications via $SERVER_ADDR Ex: apache-test-> 172.18.0.1

- Existe une liason "depends_on"