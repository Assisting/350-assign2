## Working with AJAX

This project was a simple one. Implement an address book first using MySQL, and then again using Azure. This was essentially my second time working with AJAX in the web development course I took in the 2014-15 school year. The first time was actually AJAX in the true sense, which is the subject of another repository. This was, instead, meant to also be a lesson in working with JSON, PHP, as well as relational databases. I also learned a great deal about Microsoft's cloud services, since most of my previous web development has centred around the Linux sphere.

### Post-Mortem

As of this writing it's been about two and a half weeks since hand-in. I'm still pretty happy with how this turned out:

* Use of AJAX. This was not actually required, and some other students did actually use the old action="script.php" method. Using AJAX did actually increase the complexity somewhat since I had to get used to the format for passing JSON objects back and forth, but in the end it was very worth it. Those students who didn't use AJAX ended up with sub-par results, from a usability standpoint.
* Update function. The goal of the assignment was to implement all the CRUD operations, however I only wrote create, read, and delete functions. Update is handled as a deletion and a creation, which saved me from code duplication. So far as I know I'm the only student that realized this could be done.
* PDOs. MySQL can of course be handled using MySQLi, and many other students did so since the MySQL portion of the assignment was done before the Azure portion. However I realized fairly early on that by using PDOs for the MySQL work, I would increase the work load in the short term, but it would allow me to reuse work when implementing the Azure portion; all that was required was a quick copy/paste to connect to a different server.

All that said, improvements could be made:

* Code reuse. Currently there is a fair bit of code duplication between the two database types. Ideally, there would only be create.php, read.php, and delete.php, and calls to those functions would specify which database was required for the operation. This would also be useful if additional databases were to be added later.
* Styling fixes. Right now if you press "Update" on a row of the address book, it will highlight it yellow to indicate it is being edited; however, pressing Update on multiple rows results in multiple rows being highlighted, even though only one row can be edited at a time.
* Support for other types of database. If this hadn't been an assignment with a relatively tight specification, I would probably have tried to add NoSQL support.
