# How to get started?

1. `docker-compose up -d`
2. `docker-compose run --rm -e PGPASSWORD=moddix db psql -U moddix -h db < setup.sql`
3. `docker-compose run --rm -e PGPASSWORD=moddix db psql -U moddix -h db` to start postgres client and query something like 'SELECT * FROM web_users;'
