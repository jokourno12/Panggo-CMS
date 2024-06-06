# Command
1. install wp-cli
2. install MySQL:
	- sudo apt update
	- sudo apt install mysql-server
	- sudo systemctl start mysql.service
	- sudo mysql
	- ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Qwerty123';
	- exit
	- mysql -u root -p
3. wp core download
4. wp core config --dbname=panggo_cms --dbuser=root --dbpass=Qwerty123 --dbprefix=wp_
5. wp core install --url=http://localhost --title="Panggo" --admin_user=admin --admin_password=Qwerty123 --admin_email=admin@example.com
6. wp server --port=8888
7. Frontend : http://localhost:8888
8. Backend : http://localhost:8888/wp-admin
9. create Dockerfile
10. docker build -t panggo_cms .
11. docker run --network host -d panggo_cms
12. to get update from container:
	- docker cp {id_container}:/var/www/html .

# Architecture
1. Operational Excellence
2. Security
3. Reliability
4. Performance Efficiency
5. Cost Optimization
6. Sustainability