<!-- Maria Molloy, Daniel Simpson, Tori Spychalski Lab 5 -->

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>DEAD PRESIDENTS</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
<!--
Author: R. Coleman and C. DeCusatis

This PHP script was modified based on result.php in McGrath (2012).
It demonstrates how to ...
  1) Connect to MySQL.
  2) Write a complex query.
  3) Format the results into an HTML table.
-->
<!DOCTYPE html>
<html>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Create a query to get the name and price sorted by price
$query = 'SELECT num, fname, lname FROM presidents ORDER BY num DESC' ;

# Execute the query
$results = mysqli_query( $dbc , $query ) ;

# Show results
if( $results )
{
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1>DEAD PRESIDENTS</H1>' ;
  echo '<TABLE border="1">';
  echo '<TR>';
  echo '<TH>NUMBER</TH>';
  echo '<TH>FIRST NAME</TH>';
  echo '<TH>LAST NAME</TH>';
  echo '</TR>';

  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
    echo '<TR>' ;
    echo '<TD>' . $row['num'] . '</TD>' ;
    echo '<TD>' . $row['fname'] . '</TD>' ;
      echo '<TD>' . $row['lname'] . '</TD>' ;
    echo '</TR>' ;
  }

  # End the table
  echo '</TABLE>';

  # Free up the results in memory
  mysqli_free_result( $results ) ;
}
else
{
  # If we get here, something has gone wrong
  echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
}

# Close the connection
mysqli_close( $dbc ) ;
?>
</html>
  </body>
</html>
