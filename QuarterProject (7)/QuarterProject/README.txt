Welcome to Urvi and Eden's Quarter project! 

IMPORTANT: Please import the data.sql file onto your MySQL Database before continuing. 

Purpose: We have collected data from all the vending machines across campus, to inform you about the IMSA collection of snacks and drinks. Our website includes information on what snacks are in each vending machine, as well as the ingredients of each snack, and where the snack is located. We also surveyed 136 IMSA students to ask about their food preferences, and put those into our tables as well. 

Things to note: 
	- We used Bootstrap Scrollspy to make our webpage. 
	- We used the 50 color schemes website on Moodle to color our page. 
	- We created our own Hash function, called encrypt(), to encrypt our code
	- We have an accordion that we made using JQuery, that states the mission of the website.

1. User authentification 
	We made this using our previous quarter project, and changed it by adding our own hash function, called encrypt(). 

2. Data Tables: 
	We have three data tables, product information, students' preferences for chips in the vending machine, and dietary restrictions for vending machine snacks. We formatted these tables using jQuery, and extracted the data using MySQL and PHP. 
	We got our data by asking student council for their data on vending machines (they surveyed 136 students), and we also went around and took pictures of all of the vending machines across campus, and then typed our findings directly into the SQL database. 
	Here is a brief layout of our database: 
		database: Vending_Machines

		table name: products
		columns:  name, location, price, type, flavor 

		table name: preference
		columns: Name, numOfStudents

		table name: diet
		columns: Name, Restriction

3. Charts 
	We have two charts: a bar graph and a pie chart. The pie chart talks about the frequency of flavors in the vending machines, and the bar graph displays each product, and the number of students that want that product to be in vending machines. I made these using JavaScript, and help from Google charts. 

4. More Informationn + Queries
	Here, I displayed interesting information using queries in MySQL. The information included the most wanted chips brand, the most common vending machine snack, and the average price of all of the snacks in the vending machine. 

5. Advanced Search
	In this, we used AJAX to complete the user's query. Basically, the user chose a snack, and we display the locations of that snack. s