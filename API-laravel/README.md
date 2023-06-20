# Random Food Picture Application

This is a simple web application that fetches and displays random food pictures from the Spoonacular API. The application is built using PHP, JavaScript, and jQuery.
## The website is hosted on: https://bout0047.github.io/API/
## Setup Instructions

Follow these steps to set up and run the application:

**Step 1: Set up the necessary files and dependencies**
- Create a new PHP file, e.g., `random_food_picture.php`.

**Step 2: Include the code in your PHP file**
- Copy and paste the entire code provided into the `random_food_picture.php` file.

**Step 3: Define the `getRandomFoodImage()` function**
- This function generates a random recipe ID and constructs the image URL using the Spoonacular API.
- If you'd like to customize the size or image type, you can modify the `$size` and `$imageType` variables accordingly.

**Step 4: Handle the AJAX request**
- The code checks if the request is an AJAX request (`HTTP_X_REQUESTED_WITH` header is set to `'xmlhttprequest'`).
- If it is an AJAX request, a JSON response is sent back containing the new random image URL.
- This allows the image to be updated dynamically without refreshing the page.

**Step 5: Create the HTML structure**
- The HTML code inside the `body` tag creates a simple layout for the page.
- It includes a heading, a container for the food picture, and a button to change the picture.
- The initial image is loaded by calling the `getRandomFoodImage()` function.

**Step 6: Implement the JavaScript functionality**
- The JavaScript code uses jQuery to handle the click event on the "Change Picture" button.
- When the button is clicked, an AJAX request is sent to the current page (`window.location.href`).
- The request includes the `X-Requested-With` header to indicate it is an AJAX request.
- Upon a successful response, the image source is updated with the new random image URL.

**Step 7: Run the application**
- Save the `random_food_picture.php` file.
- Start a local development server or upload the file to a web server.
- Open the file in a web browser, and you should see the "Random Food Picture" page.
- Clicking the "Change Picture" button will trigger an AJAX request and update the image dynamically.

That's it! You now have a working application to fetch and display random food pictures from the Spoonacular API. Enjoy exploring delicious food images!

