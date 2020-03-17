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
          <h1>Add or Remove Flights</h1>
            <br>
            <form id = "aircraft-info" class = "pop flight-form">
              <h3>Aircraft Information</h3>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="aircraftType">Aircraft Type</label>
                  <input type="text" class="form-control" id="aircraftType" placeholder = "C-17 Globemaster">
                </div>
                <div class="form-group col-md-6">
                  <label for="tailNumber">Tail Number</label>
                  <input type="text" class="form-control" id="tailNumber" placeholder = "00-0000">
                </div>
              </div>                
            </form>
            <br>
            <form id = "flight-info" class = "pop flight-form">
              <h3>Flight Information</h3>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="departureDate">Departure Date</label>
                  <input type="date" class="form-control" id="departureDate" placeholder = "1/1/2020">
                </div>
                <div class="form-group col-md-4">
                  <label for="departureLocation">Departure Location</label>
                  <input type="text" class="form-control" id="departureLocation" placeholder = "Charlotte, NC">
                </div>
                <div class="form-group col-md-4">
                  <label for="departureAirportCode">Departure Airport Code</label>
                  <input type="text" class="form-control" id="departureLocation" placeholder = "CLT">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="departureTimeLocal">Departure Time (Local)</label>
                  <input type="time" class="form-control" id="departureTimeLocal" placeholder = "0500">
                </div>
                <div class="form-group col-md-6">
                  <label for="departureTimeZulu">Departure Time (Zulu)</label>
                  <input type="time" class="form-control" id="departureTimeZulu" placeholder = "0900">
                </div>
              </div>
              <div class = "form-row">
                <div class="form-group col-md-4">
                  <label for="arrivalDate">Arrival Date</label>
                  <input type="date" class="form-control" id="arrivalDate" placeholder = "1/1/2020">
                </div>
                <div class="form-group col-md-4">
                  <label for="arrivalLocation">Arrival Location</label>
                  <input type="text" class="form-control" id="arrivalLocation" placeholder = "Memphis, TN">
                </div>
                <div class="form-group col-md-4">
                  <label for="arrivalAirportCode">Arrival Airport Code</label>
                  <input type="text" class="form-control" id="arrivalLocation" placeholder = "MEM">
                </div>                
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="arrivalTimeLocal">Arrival Time (Local)</label>
                  <input type="time" class="form-control" id="arrivalTimeLocal" placeholder = "0700">
                </div>
                <div class="form-group col-md-6">
                  <label for="arrivalTimeZulu">Arrival Time (Zulu)</label>
                  <input type="time" class="form-control" id="arrivalTimeZulu" placeholder = "1100">
                </div>
              </div>
            </form>
            <br>
            <form id = "cargo-info" class = "pop flight-form">
              <h3>Cargo Information</h3>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="itemsNumber">Number of Items</label>
                  <input type="number" class="form-control" id="itemsNumber" placeholder = "0">
                </div>
                <div class="form-group col-md-4">
                  <label for="weightPounds">Weight (Lbs)</label>
                  <input type="number" class="form-control" id="weightPounds" placeholder = "0">
                </div>
                <div class="form-group col-md-4">
                  <label for="weightKilograms">Weight (Kg)</label>
                  <input type="number" class="form-control" id="weightKilograms" placeholder = "0">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="loadingAgents">Loading Agents</label>
                  <input type="text" class="form-control" id="loadingAgents" placeholder = "Loader 1, Loader 2, Loader 3...">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="cargoDescription">Cargo Description</label>
                  <input type="text" class="form-control cargo-desc" id="cargoDescription" placeholder = "Some notes about the cargo...">
                </div>
              </div>
            </form>
          <button id = "add-flight-button" class="btn btn-primary add-flt-btn">Add Flight</button>
        </div>
      </div>
    </div>
  </body>
</html>