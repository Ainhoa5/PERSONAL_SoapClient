# SOAP Web Service Consumer App

## Description

This is a simple web application that consumes a SOAP web service to display and insert records into a table. It consists of two main components: an index page to show the content of a table using the web service and a form to insert records into the table.

## Table of Contents

- [Geting Started](#geting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
- [Usage](#usage)
    - [Index Page](#index-page)
    - [Inserting Records](#inserting-records)

## Geting Started
### Prerequisites
To run this application, you need:
- A web server (e.g., Apache) with PHP support.
- The SOAP extension for PHP enabled.
### Installation
- Clone this repository to your local environment:
```
git clone https://github.com/yourusername/soap-consumer-app.git
```
Configure your web server to serve the project from the appropriate directory.

Update the SOAP service URL in the following files to match your service's location:
- index.php: Update the $soapUrl variable.
- actions/addUser.php: Update the $soapUrl variable.


## Usage
### Index Page
The index page displays the contents of the table by calling the GetAllUsuariosService method from the SOAP web service. Users' information is displayed in a tabular format.

### Inserting Records
To insert records into the table, follow these steps:
1. Click the "Add New User" button on the index page.
2. You will be redirected to a form (pages/form.php) where you can enter user details (Name, Surname, Email).
3. Submit the form, and the data will be sent to the SOAP service using the InsertCategoriaService method.
4. If the insertion is successful, you will see a "User added successfully" message, and you will be redirected back to the index page.


