<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

    echo '<table>';
    echo '<tr>';
    echo '<th>Name </th>';
    echo '<th> Salaries Amount </th>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td> Raghad </td>';
    echo '<td> 1000 </td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td> Alaa </td>';
    echo '<td> 800 </td>';
    echo '</tr>';
    echo '</table>'

?>


/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////
<?php
$countries = array( "Italy"=>"Rome",
"Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki",
 "France" => "Paris",
 "Slovakia"=>"Bratislava" ) ;

asort($countries);

foreach($countries as $c=>$value)
   {
   echo '<ul>';
   echo '<li>' ;
   echo "country =" . $value;
   echo '<li>';
   echo '</ul>';
   }
?>






/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

<?php

for($i = 0 ; $i <= 5 ; $i++){
    

    echo '*';
    echo '</br>';

      for($j = 0 ; $j <= $i ; $j++){
      echo '*';
       }

}
?>

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days

<form metod='post'>
<input type='text' name='date1'> 
<input type='text' name='date2'>

<?php
if (isset($_POST['date1'])){
    if(isset($_POST['date2'])){

        $date1 = strtotime($_POST['date1']);
        $date2 = strtotime($_POST['date2']);

        echo"($date1 - $date2)/12/30/24"; 

    }

}

?>



/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */

<form method='post'>
<input type='text' placeholder='Enter your name' name='name' value=''>  
<input type='submit' name="submit"> Submit

<form>


<?php
if (isset($_POST['submit'])) 
{
    $name=$_POST['name'];

    echo $name;
}
?>