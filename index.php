<!DOCTYPE html>
<html>
  <head>
      <title>Flight Time Logger</title>
      <meta charset = "utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--Bootstrap, jQuery, Custom Styles & JS-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/functions.js"></script>
  </head>

  <body>
    <div class = "container main-container">
      <div class = "row">

        <div class = "col-md-3 sidenav-container sidebar-min-width">
          <?php include("include/sidenav.php"); ?>
        </div>

        <div class = "col-md-9 hold-height">
          <h1>All Flights</h1>
          <div id = "table_div" class = "top-pad">
            <table id = "flights_table" class="table table-striped pop">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Departure Date</th>
                  <th scope="col">Departure Location</th>
                  <th scope="col">Arrival Date</th>
                  <th scope="col">Arrival Location</th>
                  <th scope="col">Flight Time</th>
                  <th scope="col">Cargo Wt (Lbs)</th>
                  <th scope="col">Aircraft</th>
                  <th scope="col">Tail Number</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>2/2/20</td>
                  <td>Charlotte, NC</td>
                  <td>2/2/20</td>
                  <td>Queens, NY</td>
                  <td>8.6</td>
                  <td>25000</td>
                  <td>C-17</td>
                  <td>04-0249</td>
                </tr>                
                <tr>
                  <td>1</td>
                  <td>2/2/20</td>
                  <td>Charlotte, NC</td>
                  <td>2/2/20</td>
                  <td>Queens, NY</td>
                  <td>8.6</td>
                  <td>25000</td>
                  <td>C-17</td>
                  <td>04-0249</td>
                </tr>
              </tbody>
            </table>
          </div>            
        </div>
      </div>
    </div>
  </body>
</html>