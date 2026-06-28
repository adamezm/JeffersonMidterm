# World Explorer

World Explorer is a small travel and geography website built with PHP, Bootstrap, and data retrieved from the REST Countries API.

The purpose of this project was to create an API-driven website that allows users to explore countries, browse by region, search for locations, and view detailed country information in an easy-to-use format.

## API Information

This project uses the REST Countries API.

Country data is retrieved using PHP, decoded from JSON format, processed into PHP arrays, and displayed dynamically throughout the website.

Although this API does not require authentication, configuration values are stored separately and excluded from GitHub using a .gitignore file.

## Installation

1. Clone the repository.

git clone https://github.com/adamezm/JeffersonMidterm.git

2. Place the project folder inside:

C:\xampp\htdocs\JeffersonMidterm

3. Start Apache using XAMPP.

4. Navigate to:

http://localhost/JeffersonMidterm

## Features

* Homepage with image carousel
* Countries page with search function
* Country details page
* Region filtering
* Responsive Bootstrap design
* Shared PHP templates
* Custom CSS styling
* GitHub version control

## AI Use

I already had experience working with HTML, CSS, PHP fundamentals, Bootstrap, and GitHub from previous coursework. However, working with APIs and JSON structures was new to me.

AI was primarily used to help understand API documentation, interpret JSON responses, and troubleshoot API integration issues.

One challenge involved the Details page, since I initially couldn’t get the country details to display and kept getting an error message. I had to inspect the JSON response, test different approaches, and modify the code until I was able to correctly retrieve countries using their alpha-2 country codes.

Although AI accelerated development, all code was tested, modified, and adapted to meet the project requirements.

Through this project, I learned more about APIs and JSON data structures.