Laravel Contact Form - Phase One
This project is a simple Laravel-based contact form application built as part of Phase One in learning Laravel development fundamentals. The goal of this phase is to understand and implement basic concepts such as form handling, validation, and displaying success messages.

Features Implemented
Display a contact form with input fields for user details.

Use Laravel's Form Request class for clean and reusable validation.

Validate user input with custom rules and error messages.

Protect forms with CSRF tokens.

On successful form submission:

Validate the inputs.

Redirect back to the form page.

Flash a success message to the session, visible to the user.

Display validation error messages inline on the form.

What’s NOT included in this phase
No database migrations or data persistence.

No user authentication or authorization.

No advanced routing or API integrations.

Installation
Clone the repository.

Run composer install to install dependencies.

Set up your .env file with appropriate app configurations.

Serve the app with php artisan serve.

Visit http://localhost:8000/contactform to view the form.