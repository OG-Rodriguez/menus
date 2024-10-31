Menus Project
Project Overview
The "Menus" project is designed to demonstrate the usage of the Laravel Blade template system. The project includes a primary view with a navigation menu, multiple content sections, and a shared footer. The menu highlights the current section, providing a clear, dynamic navigation experience.

Objectives
Gain practical experience with the Laravel Blade templating system.
Understand and implement basic routing and controller structures in Laravel.
Build a dynamic menu that highlights the active section.
Practice using Git and GitHub for version control and project management.
Project Structure
Routes: Defined in routes/web.php for each menu option (Home, Photos, Contact).
Controller: MenuController handles requests and directs users to the appropriate views.
Views:
layout.blade.php: The main layout template with a navigation bar, content section, and footer.
home.blade.php: The Home section view.
photos.blade.php: The Photos section view with sample images.
contact.blade.php: The Contact section view with a sample contact form.
Styling: CSS styles located in public/css/style.css for menu highlighting and basic layout.
Installation and Setup
Clone the repository:

bash
Copy code
git clone https://github.com/OG-Rodriguez/menus.git
cd menus
Install dependencies:

bash
Copy code
composer install
Set up environment:

Copy .env.example to .env.
Configure the .env file for your local environment (database, app key, etc.).
Generate an application key:
bash
Copy code
php artisan key:generate
Run the application:

bash
Copy code
php artisan serve
Usage
Open your browser and go to http://localhost:8000 to view the project.
Use the navigation menu to switch between sections (Home, Photos, Contact).
Observe the highlighted menu item as you navigate between pages.
Contributing
Contributions are welcome! Feel free to fork this repository, make your changes, and submit a pull request.