CREATE TABLE Vendors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    category VARCHAR(255),
    description TEXT,
    price VARCHAR(50),
    rating DECIMAL(3, 1),
    image_url VARCHAR(255)
);
CREATE TABLE Venues (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(255),
    name VARCHAR(255),
    description TEXT,
    image_url VARCHAR(255)
);
CREATE TABLE Invitations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255)
);
