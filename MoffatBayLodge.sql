DROP DATABASE IF EXISTS moffatBayLodge;
CREATE DATABASE IF NOT EXISTS moffatBayLodge;
USE moffatBayLodge;

CREATE USER 'moffatBay'@'localhost' IDENTIFIED BY 'moffatBayLodge!';
GRANT ALL PRIVILEGES ON moffatBayLodge.* TO moffatBay;

CREATE TABLE Guests (
   guest_id INT AUTO_INCREMENT PRIMARY KEY,
   first_name VARCHAR(255) NOT NULL,
   last_name VARCHAR(255) NOT NULL,
   telephone VARCHAR(20) NOT NULL,
   email VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL,
   registration_date DATETIME NOT NULL DEFAULT NOW(),
   last_login_date DATE
);
 
CREATE TABLE Rooms (
   room_id INT AUTO_INCREMENT PRIMARY KEY,
   room_type VARCHAR(255) NOT NULL,
   capacity INT NOT NULL,
   room_size VARCHAR(255) NOT NULL
);
 
CREATE TABLE Reservations (
   reservation_id INT AUTO_INCREMENT PRIMARY KEY,
   guest_id INT,
   room_id INT,
   num_of_guests INT,
   check_in_date DATE NOT NULL,
   check_out_date DATE NOT NULL,
   room_size VARCHAR(255) NOT NULL,
   FOREIGN KEY (guest_id) REFERENCES Guests(guest_id),
   FOREIGN KEY (room_id) REFERENCES Rooms(room_id)
);

-- UPDATE ROOMS --
UPDATE Rooms SET room_size = 'Double Full' WHERE room_type = 'Double Full';
UPDATE Rooms SET room_size = 'Queen' WHERE room_type = 'Queen';
UPDATE Rooms SET room_size = 'Double Queen' WHERE room_type = 'Double Queen';
UPDATE Rooms SET room_size = 'King' WHERE room_type = 'King';

CREATE TABLE Reservations (
   reservation_id INT AUTO_INCREMENT PRIMARY KEY,
   guest_id INT,
   room_id INT,
   num_of_guests INT,
   check_in_date DATE NOT NULL,
   check_out_date DATE NOT NULL,
   -- pricePerNight DECIMAL(10, 2) NOT NULL,
   FOREIGN KEY (guest_id) REFERENCES Guests(guest_id),
   FOREIGN KEY (room_id) REFERENCES Rooms(room_id)
);
CREATE VIEW ReservationInfo AS
SELECT
    g.first_name,
    g.last_name,
    g.email,
    rm.room_type,
    rs.check_in_date,
    rs.check_out_date,
    rs.num_of_guests,
    DATEDIFF(rs.check_out_date, rs.check_in_date) AS nights_booked,
    CASE
        WHEN rs.num_of_guests <= 2 THEN DATEDIFF(rs.check_out_date, rs.check_in_date) * 120.75
        WHEN rs.num_of_guests > 2 THEN DATEDIFF(rs.check_out_date, rs.check_in_date) * 157.5
    END AS stay_total,
    rs.reservation_id
FROM Reservations rs
JOIN Guests g ON g.guest_id = rs.guest_id
JOIN Rooms rm ON rm.room_id = rs.room_id;

 
-- INSERTING DATA INTO THE TABLES --

-- GUESTS--
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Susie', 'Whitehead', '924-310-3380', 'susiew@gmail.com', 'Whitehead3380!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Emily', 'Dyer', '749-826-4504', 'dyerE@gmail.com', 'Dyer4504!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Ray', 'Frost', '314-396-1499', 'mr.frost@gmail.com', 'Frost1499!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Kamal', 'Jefferson', '911-275-9743', 'kjefferson@gmail.com', 'Jefferson9743!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Wyatt', 'Wade', '604-566-5220', 'wwwade@gmail.com', 'Wade5220!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Zoe', 'Rocha', '919-356-0796', 'rochaZoe@gmail.com', 'Rocha0796!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Casper', 'Nolan', '683-478-4312', 'Casper.Nolan@gmail.com', 'Nolan4312!');
INSERT INTO Guests (first_name, last_name, telephone, email, password)
VALUES ('Felix', 'Irwin', '627-980-1856', 'f.Irwin@gmail.com', 'Irwin1856!');

-- ROOMS -- 
INSERT INTO Rooms(room_type,capacity)
Values('Double Full',5);
INSERT INTO Rooms(room_type,capacity)
Values('Queen',2);
INSERT INTO Rooms(room_type, capacity)
Values('Double Queen', 5);
INSERT INTO Rooms(room_type, capacity)
Values('King',2);

-- RESERVATIONS -- 
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (1, 1, 5, '2024-01-01', '2024-01-03');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (2, 2, 2, '2024-01-03', '2024-01-04');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (3, 3, 5, '2024-01-01', '2024-01-05');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (4, 4, 2, '2024-02-14', '2024-02-16');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (5, 4, 2, '2024-01-15', '2024-01-18');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (6, 3, 1, '2024-01-21', '2024-01-25');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (7, 2, 1, '2024-01-31', '2024-02-05');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (8, 1, 2, '2024-02-01', '2024-02-03');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (4, 2, 2, '2024-03-14', '2024-03-17');
INSERT INTO Reservations (guest_id, room_id, num_of_guests, check_in_date, check_out_date)
VALUES (4, 3, 4, '2024-04-01', '2024-04-05');




