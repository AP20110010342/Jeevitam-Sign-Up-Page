CREATE DATABASE registeration_page;

CREATE TABLE register(
    user_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    user_mobile VARCHAR(100) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_address VARCHAR(100) NOT NULL,
    user_city VARCHAR(255) NOT NULL,
    user_dob DATE NOT NULL,
    user_longitude VARCHAR(255) NOT NULL,
    user_latitude VARCHAR(100) NOT NULL,
    user_delivery_mode VARCHAR(255) NOT NULL,
    pincode VARCHAR(100) NOT NULL
);
