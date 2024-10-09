# Cat Wisdom
This is a simple app that will show a random cat image and fact every time you enter or refresh the page

## Features
- Random cat images
- Random cat facts

## Prerequisites

If you want to replicate the project make sure you have the following installed:

- PHP 8.3.12 or higher
- Docker (for production environment)

## Local Setup
 Use the following commands on your terminal: <br> 
- Clone the repository:  
  `git clone https://github.com/Aless00san/Cat-Wisdom.git`  
  `cd Cat-Wisdom`  
- Build and run the Docker container (for production) : <br> 
  `docker build -t cat-wisdom .`<br>
  `docker run -p 8000:80 cat-wisdom`

- Build and run the php file (for develop) : <br> 
  `php -S localhost:8000.`

Then your app will be hosted at http://localhost:8080 

## How to add an API key

#### Develop
- Create a file called APIKEY.key in the root directory of your project and input your API key into that file.

#### Production
- Set an environment variable named API_KEY with your actual API key as its value.

## Environment Setup

To configure the environment for this project, you'll need to define the ENVIRONMENT constant in your code. This determines how the API key is retrieved.

Step 1: Set the Environment

In your code, locate the following line:

`define('ENVIRONMENT', 'production');`
		
Change the value to any string other than 'production' to use a local API key file. For example:

`define('ENVIRONMENT', 'development');` <br> 
`define('ENVIRONMENT', 'local');` <br> 
`define('ENVIRONMENT', 'testing');` <br> 
		
As long as the value is not 'production', the API key will be retrieved from the APIKEY.key file.
