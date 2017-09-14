--This Database is for banking info
--very basic but its a start for practice

CREATE DATABASE BankInfo;

--This is the table and data for the customers
CREATE TABLE BankCustomers (
	CustomerId INT(8) PRIMARY KEY,
	First VARCHAR(30),
	Last VARCHAR(30),
	Mobile CHAR(10),
	LandLine CHAR(10)
)

INSERT INTO BankCustomers VALUES(1, 'Shelly', 'Mody', '9085811211', '');
INSERT INTO BankCustomers VALUES(2, 'Jake', 'Jones', '', '9735811233');
INSERT INTO BankCustomers VALUES(3, 'Aparna', 'Lee', '9178872314', '9145453567');


--This is the table and data for the customer accounts
CREATE TABLE BankAccounts (
    AccountId INT(8),
    CustomerId INT(8),  
    AccountType CHAR(30),
    Balance FLOAT(10,2),
    PRIMARY KEY (AccountId),
    FOREIGN KEY (CustomerId) REFERENCES BankCustomers(CustomerId)
);

INSERT INTO BankAccounts VALUES(1, 1, 'Checking', 2000.00);
INSERT INTO BankAccounts VALUES(2, 1, 'Savings', 12000.00);
INSERT INTO BankAccounts VALUES(3, 2, 'Savings', 150.00);
INSERT INTO BankAccounts VALUES(4, 3, 'Savings', 360.00);


--this is the table and data for the transactions being made
CREATE TABLE BankTransactions (
    TransactionId INT(8),
    AccountId INT(8),
    TransactionType CHAR(30),
    Amount FLOAT(10,2),
    PRIMARY KEY (TransactionId),
    FOREIGN KEY (AccountId) REFERENCES BankAccounts (AccountId)
);

INSERT INTO BankTransactions VALUES(1, 3, 'Withdraw', 20.00);
INSERT INTO BankTransactions VALUES(2, 3, 'Withdraw', 20.00);
INSERT INTO BankTransactions VALUES(3, 3, 'Deposit', 100.00);
INSERT INTO BankTransactions VALUES(4, 1, 'ATM Withdraw', 100.00);
INSERT INTO BankTransactions VALUES(5, 4, 'Deposit', 85.00);
INSERT INTO BankTransactions VALUES(6, 4, 'Deposit', 95.00);

--I have below some queries that can be used with the tables

/*
--Shows the Customer name and mobile number
SELECT first, last, mobile FROM BankCustomers;

--Shows the transactions made that were a withdrawl
SELECT * FROM BankTransactions WHERE TransactionType = "Withdraw";

--Shows customers name, accounts, and balance
SELECT BankCustomers.First, BankCustomers.Last,
    BankAccounts.AccountType, BankAccounts.Balance
    FROM BankCustomers
    INNER JOIN BankAccounts ON
	BankCustomers.CustomerId=BankAccounts.CustomerId;

--Shows the customers who have more than $1000 in their account
SELECT First, Last 
	FROM BankCustomers 
	INNER JOIN BankAccounts ON 
	BankCustomers.CustomerId=BankAccounts.CustomerId 
	WHERE Balance >= 1000;

*/


