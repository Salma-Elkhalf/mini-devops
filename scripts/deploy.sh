#!/bin/bash
set -e

echo "[1/3] Arrêt des conteneurs..."
docker-compose down

echo "[2/3] Construction et démarrage..."
docker-compose up -d --build

echo "[3/3] État des services..."
docker-compose ps

echo "Application disponible sur http://localhost:8080"
