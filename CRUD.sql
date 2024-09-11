				-- Create Database & Use Database 
					CREATE DATABASE myDB;
					USE mydb;
                    
				-- Create table
                CREATE TABLE customers(
					cust_id INT PRIMARY KEY AUTO_INCREMENT,
                    first_name VARCHAR(50),
                    last_name VARCHAR(50),
                    email VARCHAR(50)
                );

                --  Add customer Store Procedure
                 
                 DELIMITER $$
				  CREATE PROCEDURE add_customer(IN  first_name VARCHAR(50), IN last_name VARCHAR(50), IN email VARCHAR(50))
				  BEGIN
				  INSERT INTO customers (first_name,last_name,email)
				  VALUES (first_name, last_name, email);
				  END $$
				  DELIMITER ;
                  
				-- Get all customers Email Store Procedure 
                DELIMITER $$
                  CREATE PROCEDURE get_all_customers_email()
                  BEGIN
                     SELECT email FROM customers;
                  END $$
                  DELIMITER ;
                  
				--  Delete customer by ID Store Procedure 
					  DELIMITER $$
					  CREATE PROCEDURE DeleteCustID(IN id INT)
					  BEGIN
						DELETE FROM customers
						WHERE cust_id = id;
					  END $$
					  DELIMITER ;
                      
                      --  Get customer by ID Store Procedure 
                      DELIMITER $$
                      CREATE PROCEDURE GetCustID(IN id INT)
                      BEGIN
                      SELECT * FROM customers
                      WHERE cust_id = id;
                      END $$
                      DELIMITER ;
                      --  Update customer by ID Store Procedure 
                      DELIMITER $$
                      CREATE PROCEDURE UpdateCust(IN fist_name VARCHAR(50), IN last_name VARCHAR(50), IN email VARCHAR(50), IN id INT )
                      BEGIN
                      UPDATE customers
                      SET first_name = first_name, last_name = last_name, email = email
                      WHERE cust_id = id;
                      END $$
                      DELIMITER ;