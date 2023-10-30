# Online Food Vendor Website

##Still building

This is the README file for the Online Food Vendor Website, a web application built using PHP and MySQL to allow customers to browse and order food online.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Database Setup](#database-setup)
- [Contributing](#contributing)

## Overview

The Online Food Vendor Website is a platform that enables customers to view your menu, place orders, and make online payments. It's designed to help you manage your online food business efficiently and provide a seamless experience to your customers.

``Not yet implemented the payment gate way you can if possible``

## Features

- Browse and select items from the menu.
- Customize orders with options and special requests.
- Convenient shopping cart for order review.
- Secure online payment processing.
- User-friendly interface for both customers and administrators.

## Requirements

Before you begin, ensure you have met the following requirements:

- PHP (version 8.2.4)
- MySQL (version 8.2.4)
- Web server (Apache)

## Installation

1. Clone this repository to your web server:

   ```shell
   git clone https://github.com/projecthanif/foodvendor.git
   ```

2. Set up your web server to point to the project folder.

3. Configure your database connection by editing the `connection/Connection.php` file:

   ```php
   const 'DB_HOST = 'localhost';
   const DB_USERNAME = 'your_database_username';
   const DB_PASSWORD = 'your_database_password';
   const DB_NAME = 'your_database_name';
   ```

4. Create the necessary MySQL database tables. Refer to [Database Setup](#database-setup) for instructions.

5. Visit your website URL in a web browser to start using the Online Food Vendor Website.

## Usage

1. Customers can visit your website, browse the menu, and place orders.
2. Admins can log in to the admin panel (`admin/app/Database.php`) to manage orders and menu items.

## Database Setup

To set up the necessary database tables, use the provided SQL script. You can import it using a MySQL client or the command line. Replace `[your_database_name]` with your actual database name.

```sql
mysql -u [your_username] -p [your_database_name] < database.sql
```
Or you can just run the file `admin/app/create-table.php` after you have created your database

## Contributing

Contributions are welcome! If you would like to contribute to this project, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and commit them.
4. Push your changes to your fork and submit a pull request.
