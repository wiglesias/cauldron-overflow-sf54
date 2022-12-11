# Cauldron Overflow app with Symfony

This repository holds the code and script
for the cauldron overflow app

## Content
- Symfony 5.4 LTS
- PHP container running version 8.1.1
- MySQL container running version 8.0.26
- Nodejs 18 LTS

## Instructions
- `make build` to build the containers
- `make start` to start the containers
- `make stop` to stop the containers
- `make restart` to restart the containers
- `make prepare` to install dependencies with composer (once the project has been created)
- `make run` to start a web server listening on port 1000 (8000 in the container)
- `make logs` to see application logs
- `make ssh-be` to SSH into the application container