## Project Overview

Longs App is a Laravel-based web application designed to manage user data and interactions. This project utilizes Docker for containerization, making it easy to set up and run in different environments.

## Project Structure

The project is organized as follows:

- **app/**: Contains the core application logic.
  - **Http/Controllers/**: Contains controller classes that handle incoming requests.
  - **Models/**: Contains model classes that represent the application's data.
  - **Providers/**: Contains service provider classes that bootstrap application services.
  
- **public/**: Contains the entry point for the application.
  
- **routes/**: Contains route definitions for the application.
  
- **config/**: Contains configuration files for the application.
  
- **database/**: Contains migration files for database schema.
  
- **resources/**: Contains view files and other resources.
  
- **storage/**: Contains logs and cached files.

- **docker/**: Contains Docker-related files.
  - **nginx/**: Contains the Nginx configuration for the Laravel application.
    - **default.conf**: Nginx server settings and routing directives.
- **.env**: Environment variables for the Laravel application, including database credentials and application keys.
- **docker-compose.yml**: Defines the services, networks, and volumes for the Docker containers.
- **Makefile**: Contains commands for managing Docker containers, simplifying interactions with Docker.
- **README.md**: Documentation for the project.

## Docker Setup

This project includes a `Dockerfile` and `docker-compose.yml` for easy setup and deployment. To get started, ensure you have Docker and Docker Compose installed on your machine.

### Build and Run

1. Clone the repository:
   ```
   git clone https://github.com/longineers/longs_app.git
   cd longs_app
   ```

2. Copy the `.env.example` to `.env` and update the environment variables as needed:
   ```
   cp .env.example .env
   ```

3. Build the Docker images and start the containers:
   ```
   make up
   ```

4. Run migrations:
   ```
   make migrate
   ```

### Usage

- Use the Makefile commands to manage the application:
  - `make up`: Start the application.
  - `make down`: Stop the application.
  - `make migrate`: Run database migrations.
- Access the application in your browser at `http://localhost:8080/`.

## Dependencies

This project uses Composer for dependency management. To install the required dependencies, run:
```
composer install
```

## License

This project is open-source and available under the [MIT License](LICENSE).
