#!/bin/bash
CATTLE_ACCESS_KEY='4D2615F51BA0F72DE896'
CATTLE_SECRET_KEY='L2vr25Gawd53ZbCRJvm4AVUJiQU9jCijUkUvybiR'
curl -u "${CATTLE_ACCESS_KEY}:${CATTLE_SECRET_KEY}" \
	-X POST \
	-H 'Accept: application/json' \
	-H 'Content-Type: application/json' \
	-d '{}' \
	'http://192.168.100.100:8080/v2-beta/projects/1a5/services/1s36/?action=update'
echo 'deploy ok'
