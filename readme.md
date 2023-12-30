# Project Setup Guide

## Prerequisites

Before you embark on this exciting journey, ensure that you have the following installed on your system:

- [XAMPP](https://www.apachefriends.org/download.html) 🚀
- [Git](https://git-scm.com/) 📦

## Installation Steps

1. **Install XAMPP:**

   - Download and install XAMPP from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html). 🌐
2. **Clone the Repository:**

   - Open your XAMPP installation directory and navigate to the `htdocs` folder.
   - Open a terminal and run the following command to clone the repository:

     ```bash
     git clone https://github.com/j-a-y-e-s-h/freeiva.git
     ```
3. **Start Servers:**

   - Launch XAMPP and start both MySQL server and Apache server.
   - Ensure that your MySQL username and password are correctly configured. 🔐
4. **Run MySQL Queries:**

   - Open MySQL Workbench or XAMPP MySQL.
   - Execute the following queries:

     ```sql
     -- Create a database
     CREATE DATABASE IF NOT EXISTS login;

     -- Use the created database
     USE login;

     -- Create a table for user registration
     CREATE TABLE IF NOT EXISTS register (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL,
         email VARCHAR(100) NOT NULL,
         password VARCHAR(255) NOT NULL
     );
     ```
5. **Configure Registration Password:**

   - Open the `registration.php` file and update your password.
6. **Ensure Folder Placement:**

   - Confirm that the cloned repository is placed in the `xampp > htdocs` folder.
7. **Run the Project Locally:**

   - Open your browser and go to [http://localhost/Freeiva/](http://localhost/Freeiva/)🚀

## Demo Video

Watch our demo video to witness the magic of Freeiva: [Demo Video](https://youtu.be/0vVL0oJYR5w?si=a-SST0w_7_FB2iXK) 🎥

## Documentation

Explore our detailed documentation to unravel the secrets of the project: [Documentation](link-to-your-documentation) 📖

# Contributors

The Freeiva project is made possible by contributions from amazing individuals. We express our gratitude to:

- [Jayesh](https://github.com/j-a-y-e-s-h)
- [Yash](https://github.com/YashPatil2023/)
- [Kamlesh](https://github.com/K-a-r-a-n-m-i-k-e-y)

Feel free to join our vibrant community and contribute to the project! 🚀

### Notes

- Ensure that your XAMPP servers are running before accessing the application.
- For local development, the project folder must be located in the `htdocs` directory.

Now you are all set! Feel free to explore your project at the provided localhost URL.

🚀 Happy coding! If you encounter any issues, double-check your configurations and ensure each step is followed accurately.
