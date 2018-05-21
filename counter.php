<?php
// Connects to your Database
mysql_connect("173.194.110.228", "db", "db") or die(mysql_error());
mysql_select_db("mysql") or die(mysql_error());
//Adds one to the counter
mysql_query("UPDATE counter SET counter = counter + 1");
//Retrieves the current count
$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));
//Displays the count on your site
print "$count[0]";
?>
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                                                                                                          
~                               
