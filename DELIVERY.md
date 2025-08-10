# Delivery Document - Library Book Management System

## Overview

This project implements a Library Book Management API using Laravel with Docker and Laravel Sail.  
It provides endpoints for managing books, members, borrowing processes, and includes secure authentication & authorization.

## Features

- Book CRUD operations  
- Member CRUD operations  
- Borrowing and returning books  
- User registration and login with token-based authentication  
- Dockerized environment for easy setup and deployment  
- Database migrations and seeders included  

## Setup & Running Instructions

Please refer to the `README.md` for detailed installation and running steps.  
In summary:

1. Clone the repository  
2. Install PHP dependencies  
3. Start Docker containers with Laravel Sail  
4. Configure environment variables and generate app key  
5. Run database migrations and seeders  
6. Access the API via `http://localhost`  

## Flowchart

A flowchart illustrating the API structure and workflow is included in the `/docs/Flowchart.png` file.

## Testing

Automated tests are included and can be run with:

```bash
./vendor/bin/sail artisan test
