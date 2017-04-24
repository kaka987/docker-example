#!/bin/bash

/usr/bin/docker build -t='192.168.100.99:5000/php7:latest' php
sleep 2

/usr/bin/docker push 192.168.100.99:5000/php7:latest
sleep 2

echo "build ok."
