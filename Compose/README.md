# Docker Compose

This is the complete demo built using docker-compose. You will need to add your trial certificate and key to the builder directory.

## docker-compose.yml

In this file we again define each service, ports, volumes and custom network. If you notice the proxy service we don't use the default image, we build a customer docker image. `context` points use to the path of our dockerfile and `dockerfile` is our file name, in this case *Dockerfile*.