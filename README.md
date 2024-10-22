                           Documentations
This website is designed for a car rental service, offering users a streamlined experience to browse various vehicle options, learn about the services offered, and make bookings online. The website is structured to provide essential information on the homepage and link to different sections for specific services, booking options, and legal details.

                        Website Structure and Pages
index.php: The main homepage where users can get an overview of the car rental services. It highlights various car types, such as luxury, economy, and SUV, and includes links to other important sections of the website like services, booking, etc. The page initially had similar content to home.html, but to avoid redundancy, I merged the content and visuals from both files, maintaining a unified design. The images were adjusted to match the theme of the site, and additional car types were added to provide users with a broad range of options.

home.html was originally designed as the homepage, it contained a similar structure to index.php, featuring a layout with different images and minor variations in text with I modify it
 since having two homepages was redundant, home.html was retired, and the content was merged into index.php to ensure consistency in user experience and prevent duplication.

        Also, footer.php and header.php were created for reusability across all pages.
 header.php contains the logo and the navigation bar that links to all major sections of the website, ensuring uniformity across the site. footer.php includes copyright information and a link to the legal page, maintaining consistency at the bottom of every page. Initially, the headers and footers were hardcoded into each page. By breaking them into separate files and including them using PHP (include 'header.php'; and include 'footer.php';), the structure became easier to maintain, and updates to the header or footer now apply to all pages automatically.
 

service.php: This page provides details about the various services offered by the car rental business. Services include economy car rentals, SUV rentals, long-term rentals, and more. The original structure from Chapter 6 of the course materials was adapted, with additional services listed, and the layout improved for a more professional presentation. I also added images to give users a visual idea of the car types available for each service.

booking.php: This page is used for making car reservations. It contains a form that collects customer details such as name, vehicle type, rental duration, and payment details. While the form layout was adapted from Chapter 6, extra fields were added to include payment details, rental dates, and vehicle selection. I also connected the form to processorder.php to handle form submissions.

legal.php: This page contains important legal information about the service, including privacy policies and terms of use. It ensures transparency regarding how user data is handled and the terms governing the service. The page follows the standard structure laid out in the course materials but was customized with specific terms that align with the business’s needs.

processorder.php: This PHP script processes form submissions, such as customer booking or feedback from the contact page. It takes user input, validates it, and handles the data appropriately (e.g., saving it to a database or sending a confirmation email). The script was initially basic but was extended to handle more complex data submission, including validating form inputs, error handling, and providing users with feedback upon successful submission. I also added functionality to redirect users to a confirmation page after a successful booking.

about.php:  This page provides information about the car rental service, its history, mission, and team. The page uses headings and paragraphs to clearly present the information. team member profiles may also be included for personalization.
 cars.php: This page lists all available cars for rental, including images, descriptions, and pricing. PHP is used to pull car data from a database (or a predefined array) to display each car's information dynamically. Each listing includes relevant images and pricing information, styled for clarity.
 
payment.php: This page allows users to enter payment information to finalize their booking. The page includes a form to collect payment details, such as credit card information. HTML validation attributes ensure all fields are filled appropriately.

contact.php: This page provides users with contact information and a form to submit inquiries or feedback. Similar to the booking form, it collects user information and comments. Display Information like contact details (phone number, email, address) are also included for user convenience.

styles.css: This stylesheet contains the CSS rules for styling the entire website, ensuring a cohesive visual design. General styles for fonts, colors, and layout are defined to maintain consistency across all pages.

           Challenges and Resolutions
 Image and Style Display Issues. Images weren’t displaying correctly due to incorrect file paths and references, so I corrected all the image paths by using relative URLs based on the folder structure of the project. Additionally, I ensured that CSS rules were applied correctly by linking the styles.css file across all pages.
 
 Also, merging index.php and home.html. Both index.php and home.html were serving as the homepage, which caused confusion and inconsistencies. I decided to unify the content from home.html into index.php and retired the home.html file to avoid redundancy. This created a single, consistent homepage experience for users.

Finally, initial form submissions in processorder.php didn’t handle user input properly, causing errors when users tried to submit their booking requests, so I adapted and extended the form handling code from Chapter 7 by adding better validation checks and error messages to improve the user experience.
