#!/bin/bash

sudo docker build -t='192.168.100.99:5000/php7:latest' php
sleep 2

sudo docker push 192.168.100.99:5000/php7:latest
sleep 2

echo "build ok."
