# Couzinty

Couzinty is a web application designed as a cooking recipe guide. It utilizes modern technologies including HTML5, CSS3, PHP, JQuery, JavaScript, and Ajax. The site aims to provide users with a simple and practical way to browse, manage, and share recipes while separating data management from presentation using the MVC (Model-View-Controller) architecture.

## Features
### User Interface
#### 1- Homepage: 
Features a logo, social media links, a slideshow of recipes/news, a horizontal navigation menu, and a footer with the same menu.
#### 2- Navigation:
Links to sections including Home, News, Recipe Ideas, Healthy Recipes, Seasonal Recipes, Festive Recipes, Nutrition, and Contact.
#### 3- Categories:
Main content divided into four categories (Starters, Main Dishes, Desserts, Beverages) with a sliding frame for recipes, each showing the title, image, and a short description.
#### 4- Recipe Page:
Detailed view of each recipe, including an image, preparation time, cooking time, difficulty, calorie count, ingredient list, and step-by-step instructions.
#### 5- User Authentication:
Users can register or log in to manage their profiles, preferences, and rate recipes.

### Administrative Features

#### 1- Recipe Management: 
Administrators can view, add, modify, or delete recipes, as well as validate user-submitted recipes.
#### 2- News Management:
Option to add and manage news posts for the site.
#### 3- User Management:
Ability to manage user accounts, validate registrations, and access user profiles.
#### 4- Nutrition Management:
Administrators can add nutritional information for ingredients, categorize them as "Healthy," and specify their seasonal availability.

## Database Configuration

### User Credentials:
##### Admin: `admin@gmail.com`, Password: `admin`
##### User: `user@gmail.com`, Password: `123`
### Database: 
The application uses a MySQL database. The database file is named couzinty.sql.
### Root User:
The database user is set to `root` with an empty password.

## Usage

#### 1- Authentication:
Users must log in or register to access certain features.
#### 2- Adding Recipes:
Authenticated users can add new recipes from the homepage.
#### 3- Adding to Preferences:
Users can save recipes to their favorites.
#### 4- Rating Recipes:
Users can rate recipes and must refresh the page to see updated ratings.
#### 5- Admin Actions:
Admins can modify, delete, or validate items and must refresh the page after actions for updates to reflect.

## Installation

#### 1- Clone the repository:
```bash
git clone https://github.com/syrine-ztn/Couzinty.git
```
#### 2- Import the database:
Use a MySQL tool to run the `couzinty.sql` file.
#### 3- Update the database connection settings in your PHP files as necessary.

## Technologies Used

#### Frontend:
HTML5, CSS3, JavaScript, JQuery, Bootstrap
#### Backend:
PHP
#### Database: 
MySQL