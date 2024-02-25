#!/bin/sh

echo "============================="
echo "Remove container"
docker container stop apriori_penjualan_container
docker container rm apriori_penjualan_container
echo "Build image docker "
docker build . -t apriori_penjualan_img
echo "Running container"
docker run -itd -p 9012:9012 --name=apriori_penjualan_container --network=almira-net apriori_penjualan_img
docker update --restart unless-stopped apriori_penjualan_container
echo "============================="
echo "DEPLOY DONE"
docker logs -f apriori_penjualan_container


#list docker
#docker run -itd --name= -p 8911:3306 -e MYSQL_ALLOW_EMPTY_PASSWORD=yes -v --network=almira-net /root/DockerSqlData/Patch1:/var/lib/mysql mariadb:10.4
