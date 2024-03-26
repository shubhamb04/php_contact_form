# PHP Contact Form Application

This is a simple PHP contact form application built with Docker, Apache, and PHP. It allows users to submit their name, email, and message through a web form, which is then saved to a text file on the server.

## Prerequisites

Before running this application, ensure that you have Docker installed on your system. You can download and install Docker from the [official Docker website](https://www.docker.com/get-started).

## Getting Started

To run the PHP contact form application on your local machine, follow these steps:

1. Clone this repository to your local machine:

   ```bash
   git clone git@github.com:shubhamb04/php_contact_form.git
   ```

2. Navigate to the project directory:

   ```bash
   cd php_contact_form
   ```

3. Build the Docker image using the provided Dockerfile:

   ```bash
   docker build -t php_contact_form .
   ```

4. Run the Docker container:

   ```bash
   docker run -d -p 8000:80 php_contact_form
   ```

   This command will start the Docker container and expose the application on port 8000 of your local machine.

5. Access the application in your web browser:

   Open a web browser and navigate to [http://localhost:8000](http://localhost:8000) to access the PHP contact form application.

## Usage

1. Fill out the form with your name, email, and message.
2. Click the "Submit" button to submit the form.
3. You will receive a success message if the form submission is successful.
4. The submitted data will be saved to a file named `contacts.txt` in the `php_contact_form` directory.
