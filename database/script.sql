CREATE DATABASE BookiDB;
USE BookiDB;

-- SQL code to create the 'Book' table
CREATE TABLE Book (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      title VARCHAR(255),
                      author VARCHAR(255),
                      genre VARCHAR(255),
                      description TEXT,
                      publication_year DATE,
                      total_copies INT,
                      available_copies INT
);

-- SQL code to create the 'User' table
CREATE TABLE User (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      fullname VARCHAR(255),
                      last_name VARCHAR(255),
                      email VARCHAR(255),
                      password VARCHAR(255),
                      phone VARCHAR(255)
);

-- SQL code to create the 'Role' table
CREATE TABLE Role (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      name VARCHAR(255)
);

-- SQL code to create the 'Reservation' table with 'book_id' and 'user_id' as foreign keys
CREATE TABLE Reservation (
                             id INT AUTO_INCREMENT PRIMARY KEY,
                             book_id INT,
                             user_id INT,
                             description TEXT,
                             reservation_date DATE,
                             return_date DATE,
                             is_returned INT,
                             FOREIGN KEY(book_id) REFERENCES Book(id),
                             FOREIGN KEY(user_id) REFERENCES User(id)
);

-- SQL code to create the 'UserRole' junction table for the many-to-many relationship between 'User' and 'Role'
CREATE TABLE UserRole (
                          user_id INT,
                          role_id INT,
                          PRIMARY KEY(user_id, role_id),
                          FOREIGN KEY(user_id) REFERENCES User(id),
                          FOREIGN KEY(role_id) REFERENCES Role(id)
);

INSERT INTO Role (name) VALUES
                            ('Administrator'),
                            ('Member');