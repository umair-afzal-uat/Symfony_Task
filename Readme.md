# Tech challenge BE

This project is designed with two microservices that communicate via a message bus. It includes:

- **Users Service**: Handles user data and sends events to the Notifications Service.
- **Notifications Service**: Consumes events and logs data.

## Requirements

- Docker
- Docker Compose

## Project Structure

```Symfony
.
├── users-service
│   ├── src
│   ├── Dockerfile
│   
├── notifications-service
│   ├── src
│   ├── Dockerfile
│ 
├── README.md
├── docker-compose.yml

```

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/umair-afzal-uat/Tech_Challenge_BE.git
   ```

2. **Build and Run Containers**

    - **Users Service**

     ```bash
     docker-compose up --build
     docker exec -it users-service bash
     composer install
     php bin/console doctrine:migrations:migrate
     symfony serve -d
     The users-service is available at http://127.0.0.1:9000
     ```
     - **Notifications Service**

     ```bash
     docker exec -it notifications-service bash
     composer install
     symfony serve --port=8001 -d
     The notifications-service is available at http://127.0.0.1:9001
     To listen messages
     docker exec -it notifications-service bash
     php bin/console messenger:consume async

     ```

3. **Local Setup**

   - **Users Service**

     ```bash
     cd users-service
     composer install
     php bin/console doctrine:database:create
     php bin/console doctrine:migrations:migrate
     symfony server:start
     ```

   - **Notifications Service**

     ```bash
     cd notifications-service
     composer install
     symfony server:start
     To listen messages
     docker exec -it notifications-service bash
     php bin/console messenger:consume async
     ```

## Endpoints

### Users Service

- **POST /users**

  **Request Body:**

  ```json
  {
    "email": "user@example.com",
    "firstName": "John",
    "lastName": "Doe"
  }
  ```

  **Description:**

  - Stores user data in a database or logfile.
  - Generates an event and sends it to the Notifications Service.

### Notifications Service

- **Log File**

  - Data received from the Users Service is logged to a file or database.

## Testing

The codebase includes:

- **Unit Tests**: Testing individual components and methods.
- **Integration Tests**: Testing interactions between components.
- **Functional Tests**: Testing the overall functionality of the services.

### Running Tests

1. **For Users Service**

   ```bash
   cd users-service
   php bin/console doctrine:database:create --env=test
   php bin/console doctrine:migrations:migrate --env=test
   php bin/phpunit
   ```

   For Local

   ```bash
   cd users-service
   php bin/console doctrine:database:create --env=test
   php bin/console doctrine:migrations:migrate --env=test
   php bin/phpunit
   ```

## Docker Setup

- **Dockerfile**: Each service has its Dockerfile for building images.
- **docker-compose.yml**: Manages the multi-container setup.

### Docker Compose Configuration

- **users-service**: The container running the Users microservice.
- **notifications-service**: The container running the Notifications microservice.
- **message-broker**: The message broker for communication between services.

## Contributing

1. **Fork the Repository**
2. **Create a Feature Branch**
3. **Commit Your Changes**
4. **Push to the Branch**
5. **Create a Pull Request**

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any questions or issues, please reach out to [umair.afzal.uat@gmail.com].
