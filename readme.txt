-Code reuse-> copy the template i created in TEMPLATE.php to your file and then start development.
	-> create your customized css,js,php file for each html/css file.

.......Read index.php, contactform.php AND linked files to understand how the modularization works.

...........................................................................................................................................
TO BE DONE & TO BE DISCUSSED
	-session implementation
	-feedback display implementation
	-booking system
	-my account system
	-logout
...........................................................................................................................................


Changes:(Vyas)
10/12/17-

	-Customerfeedback implemented(Feedback->Leave review)
	- Dont worry if a nav bar option is not being highlighted when its respective page has been loaded.
	eg. "feedback" on nav bar is not highlighted when customerfeedback.php has been loaded.
	I will solve them using JS later.
	-Nav bar(header modularized)
	-footer fix
	-Use of google map api to locate us ( activated when "Locate us on map" button is pressed in contact page)
	-slider background added

Changes:(Pranav)
20/12/17
	-Home page updated with some relevant contents... future updates will address the customer reviews to be left on homepage as evidence of our services
	-Sign up/ login interface implemented. 
	-!!!JS validation still has bugs.!!!
	

Changes:(Shakill & Vyas)
30/12/17
	-list of employees in aboutemployees.php added
	-css modification
	-js modification

	note: insert data from .sql file to your mysql database for the employees

Changes:(Pranav & Vyas)
22/12/17
	-signup/login js validation fix
	-signup/login php mysql implementation through ajax
	-FULLY FUNCTIONAL EXCEPT SESSION IMPLEMENTATION

Changes: (Vyas)
29/1/18
	-Session implementation(75%)
	-welcome message div added in index.php		
			-visible only if user is logged in

Changes: (Shravan)
31/01/18

	-Added booking table (Not functional)
	-Update your database using carzone.sql found in CarZone LTD folder.

Changes: (Vyas)
	-JS fix (semicolumns missing,case sensitive variables fix);	
		-loop added to get immat number from vehicle container

	-bookingform.php
		-other tags deleted except the form block
		-submit button type changed from submit to button
	
	Everything is working up to the if statement in the bookingprocess.php file
	-Login redirection is also working properly

	Also, navbar sublist will be fixed later

01/02/18
Changes: Shravan

	- Booking now works
	- Added a special <td> to add new car - not functional yet
	- implementing more jQuery for the add new car part

(20:50)

	- Existing users can add new cars.
	- New user can add new cars.
	- Modified contact us page, blocked BODY from scrolling when Google Maps is opened.
	- jQuery is awesome :v

04/02/18
Changes: Shravan

	- Added jQuery for ESC key when adding a new car. (Quicker)

8/02/18
Changes: Pranav
	
	-added five reviews from database to index.php

10/2/18
Changes: Shakill
	
	-added all reviews from database to customerreviews.php

10/2/18
Changes: Vyas
	
	-add car refresh fixed.
	-some css mods in car booking

10/02/18
Changes: Shravan
	- Modded CSS for review: caption element conflicted with that of footer.html, #feedbackform specified
	- Added title to Review file

13/02/18
Changes: Shravan
	- Added transition to "TOP" button

31/03/18
Changes: Shakill	
	-My account implemented using Ajax and responseXML

31/03/18
Changes:Vyas
	-My account Ajax bug fix 
	-My account Css added


