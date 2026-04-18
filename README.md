# Mini DevOps - Gestion de produits


## Objectif

Ce projet présente une mini application PHP/MySQL conteneurisée avec Docker Compose dans le cadre du TP ISGIA.

## Structure du projet

- **app/** : Code source PHP (connexion PDO, logique métier) + CSS
- **db/** : Script SQL d'initialisation de la base de données
- **scripts/** : Scripts d'automatisation (deploy.sh)

## Lancement avec Docker Compose

```bash
docker compose up -d --build
