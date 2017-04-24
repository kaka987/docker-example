#!/bin/bash
version=`cat script/VERSION`
docker_image="192.168.100.99:5000/php7:${version}"

sudo docker build --no-cache=true -t="${docker_image}" php
sleep 1
sudo docker push ${docker_image}
sleep 1

echo "build ok."
