CREATE DATABASE IF NOT EXISTS daily_labour_report;
USE daily_labour_report;
CREATE TABLE teams(
id INT AUTO_INCREMENT PRIMARY KEY,
team VARCHAR(50),
skilled INT,
unskilled INT,
mason INT,
welder INT,
helper INT,
fitter INT,
supervisor INT
);
