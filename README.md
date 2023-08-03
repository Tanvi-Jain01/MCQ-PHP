# MCQ-PHP

# User Interface:
## Homescreen
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/7aa391b9-91ff-415a-949e-a19f3a2f1d49)

## Registration
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/bcb1a28b-391d-4e49-ac80-c50cb509c165)
## After registration
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/8df2ac22-8c9c-4769-98e1-ba18e2093e9c)

## Login
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/64ab4b6b-4197-464b-be43-f16ba53f7fc1)


## After succesful login cookie has been saved, so that the user dont have to enter again.
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/78c200c2-6887-4d60-a065-17b7e4db253d)


## Check Marks
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/423403b5-c6ef-4f9e-a637-9d845757c7fc)
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/873ceb3c-e039-44c4-ab14-f7f64070404e)

# Get Print
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/db78f613-3643-4668-a1ac-de2c9cdebf21)

## Start the Test
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/a89176f2-b572-4b37-8755-a4f6120c0c8e)

## Get result instantly
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/2a984f38-04af-45fe-8106-268406fd15c6)

# Unregister
## Enter your credentails and you will be unregistered.
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/e4f93765-1387-4b30-afec-d3e719692b49)

---

# Database
### Register schema: 
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/c5be8da4-54fb-4bc5-b689-656b800ac4d0)

### feedback schema:
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/75633612-1d58-497c-b0a3-39e954668461)
### Result schema:
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/d4dc7bb2-d5a1-4212-8bbe-110047a56d40)

---

# Testacases:

# Registration
## If email already exists
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/bcb1a28b-391d-4e49-ac80-c50cb509c165)

## if password doesn't match
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/5296620d-6bf8-4676-85e3-a1b070882f4c)

## password should be 8 charachter
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/f551f357-2f02-49f7-9cc9-c79f32969ec6)

# Testcases in Login:
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/84a6873a-91ad-4726-a801-db6e00e538cd)

## Testcases in Checking marks
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/09963491-53ae-40cf-9416-5219ca6ed111)


---


# Security
## Sanitizing input
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/54f4caf5-78e3-4b49-8c31-413a8e820498)

## password encryption
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/41c1dab2-416d-4838-97c4-1f1704a94b3d)

# POST method
![image](https://github.com/Tanvi-Jain01/MCQ-PHP/assets/123053700/0e0dd181-fcd7-42f3-bd00-03f90983329e)

## Why POST Method?
Some notes on POST requests:

POST requests are never cached
POST requests do not remain in the browser history
POST requests cannot be bookmarked
POST requests have no restrictions on data length
Data is not displayed in the URL
Data will be re-submitted (the browser should alert the user that the data are about to be re-submitted)

---


# Other Threats:
## SQL Injection:
SQL injection is another technique that exploits a web application's vulnerability to execute malicious SQL statements on the server-side database. These statements can manipulate, delete, or extract data from the database, or even gain access to the server itself. SQL injection can occur when a web application accepts user input that is not properly sanitized or parameterized, and then uses it to construct SQL queries.

## How to prevent SQL injection?
One of the best ways to prevent SQL injection is to use prepared statements or parameterized queries, which separate the user input from the SQL logic and prevent any malicious input from being interpreted as part of the query. This means that any potentially harmful characters, such as ', ;, or --, are treated as literal values and not as SQL commands. Another way to prevent SQL injection is to use stored procedures, which are predefined SQL statements that are stored on the server and can be invoked by the web application with specific parameters.Another way to prevent SQL injections is to use an allowlist for allowed values

## XSS:
 XSS stands for cross-site scripting, a technique that allows malicious actors to inject client-side scripts into web pages that are viewed by other users. These scripts can steal cookies, session tokens, or other sensitive information, or redirect users to phishing or malware sites. XSS can occur when a web application accepts user input that is not properly validated or encoded, and then displays it as part of the web page.

# Prevention:
### 1) Sanitize the user input.
### 2) Encryption of database names and columns while deployment.
### 3) Give minimum access to users.
### 4) Never trust User Inputs.

---

# How to test your web design for XSS and SQL injection?
One of the easiest ways to test your web design is to use a tool like OWASP ZAP, which is a free and open source web application security scanner that can detect and exploit XSS and SQL injection flaws. You can also use manual testing techniques, such as entering malicious input in the web forms or the URL, and observing the response of the web application.

---

# Which's safe, Session or Cookies??
A session stores the variables and their values within a file in a temporary directory on the server.
Cookies are stored on the user's computer as a text file.
The session ends when the user logout from the application or closes his web browser.
Cookies end on the lifetime set by the user.

We can store as much data as we want within a session, but there is a maximum memory limit, which a script can use at one time, and it is 128 MB.
The maximum size of the browser's cookies is 4 KB.

Sessions are more secured compared to cookies, as they save data in encrypted form.
Cookies are not secure, as data is stored in a text file, and if any unauthorized user gets access to our system, he can temper the data.

---

# Future Aim
### 1) Include time of Attempts
### 2) Include captchas
