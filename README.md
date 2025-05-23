# Parking Management System for Quick-Park

A Laravel and MySQL-based Parking Management System designed to streamline parking management by reducing traffic congestion and improving operational efficiency.

## Table of Contents
- [Quick-Park](#parking-management-system-for-quick-park)
  - [Table of Contents](#table-of-contents)
  - [Project Overview](#project-overview)
  - [Features](#features)
  - [Technologies Used](#technologies-used)
  - [Installation](#installation)
    - [Prerequisites](#prerequisites)
    - [Setup Steps](#setup-steps)
  - [Alternatively:](#alternatively)
    - [Usage](#usage)
    - [Testing](#testing)
    - [Limitations](#limitations)
    - [Potential Enhancements](#potential-enhancements)
    - [License](#license)
    - [Contact](#contact)

## Project Overview

**Quick-Park** was created to address parking challenges. This system provides a modern solution for tracking parking availability, managing parking entries and exits, and automating payment processing.

## Features

- **User Module**:
  - Real-time display of parking space availability
  - Streamlined entry and exit processes
  ![User Module Screenshot](public/img/readme/user.png)

- **Admin Module**:
  - Manage parking spot availability and monitor usage
  - Generate and view parking utilization reports
  - Set dynamic rates based on demand
   ![Rates](public/img/readme/drivein.png)

- **Payment Integration**:
  - Integrated online payment processing for parking fees
  <!-- - ![Payment Processing Screenshot](public/img/readme/pay.jpg) -->

## Technologies Used

- **Backend**: Laravel (PHP framework)
- **Frontend**: HTML, CSS, Bootstrap
- **Database**: MySQL (using XAMPP)
- **Tools and IDE**: Visual Studio Code
- **Browsers**: Safari and Google Chrome for testing
- **Version Control**: Git and GitHub

## Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) (for Apache and MySQL)
- [Composer](https://getcomposer.org/) (for Laravel dependencies)

### Setup Steps
1. **Install XAMPP and Start Services**:
   - Start Apache and MySQL services from the XAMPP Control Panel.
   - Open phpMyAdmin (usually at http://localhost/phpmyadmin) and create a database named "parking_management".
   - Alternatively, you can import the provided database file directly into phpMyAdmin.

2. **Clone the Repository**:
   ```bash
   git clone https://github.com/OmiShrestha/quick-park.git
   cd quick-park
    ```
 3. **Install Dependencies**:
Run the following commands to install project dependencies:
```bash
composer install
npm install && npm run dev
```
 4. **Configure Environment Variables**:
- Copy `.env.example` to `.env`:
  ```bash
  cp .env.example .env

5. **Generate Application Key**:
Generate the application key by running the following command:
```bash
php artisan key:generate
```
6. **Run Migrations**:
If you're not using a provided database file, create the necessary tables by running:
```bash
php artisan migrate
```
 7. **Start the Application**:
Start the Laravel development server with:
```bash
php artisan serve
```
Access the application at [http://localhost:8000](http://localhost:8000).


## Alternatively: 
  This version includes an alternative step for importing the database directly. Reach out for further customization.


### Usage
- **Admin Dashboard**: Access the admin dashboard to manage parking spaces, monitor usage, and view reports.
    ![Admin Dashboard Screenshot](public/img/readme/report.png)

- **User Module**: Users can find number of available parking spaces and complete parking-related transactions.
    ![User Module Screenshot](public/img/readme/drivein.png)

### Testing
The system has been tested for:
- **Functionality**: Core features like user login, parking availability tracking, and payment processing.
- **Performance**: Load testing to handle multiple users concurrently.
- **Security**: Basic testing for data integrity and input validation.

### Limitations
- Dependence on a stable internet connection for real-time data updates.
- High initial setup costs and dependency on XAMPP for local hosting.
- Limited scalability for larger parking lots or more complex systems.

### Potential Enhancements
- **Smart Parking Sensors**: Integrating IoT sensors for real-time availability updates.
- **Advanced Analytics**: Data analysis for usage insights and dynamic rate optimization.
- **Automated License Plate Recognition (ALPR)**: To streamline vehicle entry and exit tracking.

### License
This project is licensed under the MIT License. See the [`LICENSE`](LICENSE) file for more details.

## Languages Used
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-ff2d20?style=for-the-badge&logo=laravel&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![SQL](https://img.shields.io/badge/SQL-4479A1?style=for-the-badge&logo=postgresql&logoColor=white)
