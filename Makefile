all: start

start:
	@echo "Starting app..."
	@mkdir -p ./dbData
	@docker-compose up
	
stop:
	@echo "Stopping app..."
	@docker-compose down
	
restart: stop start

clean:
	@echo "Cleaning app..."
	@docker-compose down --rmi all --volumes --remove-orphans