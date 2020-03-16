<!DOCTYPE html>
<html>
    <head>
        <title>Flight Time Logger</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Bootstrap, jQuery, Google Charts-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="functions.js"></script>
    </head>

    <body>
        <div class = "container">
            <?php include("include/sidenav.php"); ?>
            <h1>Flight Time Logger</h1>
            <div class = "row">
                <div class = "col-md-12 hold-height">
                    <!-- <div id= "chart_div"></div> -->
                    <div id = "table_div" class = "top-pad">
                        <table id = "flights_table" class="table table-striped">
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
                                <th scope="col"></th>
                              </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container top-line">
            <div class = "row">
                <div class = "col-md-11">
                    <h2>Enter the Flight Information</h2>
                </div>
            </div>
            <br>
            <form id = "flight-info">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="departureDate">Departure Date</label>
                    <input type="text" class="form-control" id="departureDate" placeholder = "1/1/2020">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="departureLocation">Departure Location</label>
                    <input type="text" class="form-control" id="departureLocation" placeholder = "Charlotte, NC">
                  </div>
                </div>
                <div class = "form-row">
                  <div class="form-group col-md-6">
                    <label for="arrivalDate">Arrival Date</label>
                    <input type="text" class="form-control" id="arrivalDate" placeholder = "1/1/2020">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="arrivalLocation">Arrival Location</label>
                    <input type="text" class="form-control" id="arrivalLocation" placeholder = "Memphis, TN">
                  </div>
                </div>                
            </form>
            <button id = "add-flight-button" class="btn btn-primary">Add Flight</button>
            <button id = "get-data-button" class="btn btn-primary">Get Data (in console)</button>
        </div>
    </body>
</html>