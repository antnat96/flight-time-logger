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
  </head>

  <body>
    <div class = "main-container">
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
                  <th scope="col">Aircraft Type</th>
                  <th scope="col">Tail Number</th>
                </tr>
              </thead>
              <tbody id = "flight-table-tbody">
              </tbody>
            </table>
          </div>            
        </div>
      </div>
      <div class = "row">
        <div class = "col-md-12">
          <button id = "delete-all-button" class="btn btn-primary del-flt-btn">Delete All Flights</button>
        </div>
      </div>
    </div>
    <script type = "text/javascript">
      $(document).ready(function() {

        // Get the flights
        $.ajax({
          url: "https://jsonbox.io/box_1aa2eecea9560cd80c48",
          type: "GET",
          dataType: "json",
          contentType: "application/json"
        }).done(function(result){
          populateTable(result);

          $("td").hover(function() {
            let nearestRow = $(this).closest("tr");
            nearestRow.attr("style", "background-color: white")
          },function() {
            let nearestRow = $(this).closest("tr");
            nearestRow.attr("style", "")
          });

        }).fail(function(result) {
          window.alert("There was a problem getting the flights, try again later!");
        });

        // Populate the flights table
        function populateTable(info) {

          // if the info array has content
          if (info != undefined && info != null && info[0] != []) {

            // Initialize relevant info array for filling out content in cells
            let relevantInfo = [];

            // Set the table element
            let table = document.getElementById("flights_table");
            
            // For each flight
            for (let i = 0; i < info.length; i++) {

              // Push relevant info from that flight to the relevantInfo array
              relevantInfo.push(info[i].id,info[i].departure.date,info[i].departure.location,info[i].arrival.date,info[i].arrival.location,info[i].time,info[i].cargo.weight_lbs,info[i].aircraft.type,info[i].aircraft.tail_num);

              // Add a row
              let newRow = table.insertRow(1);

              // Initialize the cell variable
              let cell;

              // For each piece of relevant info
              for (let j = 0; j < relevantInfo.length; j++) {

                // Add a cell
                cell = newRow.insertCell(j);

                // And fill it
                cell.innerHTML = relevantInfo[j];
              }

              // Unset the relevantInfo array so it can be refilled on next loop
              relevantInfo = [];

            }
          }
          else {
            return window.alert("No flight records");
          }
        }

        // Delete flights from the JSON box
        $(".del-flt-btn").on("click", function() {
          let id = "deyk6";

          $.ajax({
            url: "https://jsonbox.io/box_1aa2eecea9560cd80c48?q=id:" + id,
            type: "DELETE",
            dataType: "json",
            contentType: "application/json"
          }).done(function(result){
            console.log(result);
          }).fail(function(result) {
            console.log(result);
          });

        })
        // Handle the "Delete" button
        // $(document).on('click', '.remove-student-button', function(){
        //     // Get the closest row element's index and delete it
        //     var table = document.getElementById("flights_table");
        //     let row = $(this).closest('tr').index();
        //     var vampireOrHuamnCell = table.rows[row].cells[7].innerHTML;
        //     if(vampireOrHuamnCell == "Human"){humans-=1}
        //     else{vampires-=1}
        //     //console.log(document.getElementById("flights_table").rows[1].innerHTML);
        //     (row !== null && row !== undefined) ? document.getElementById("flights_table").deleteRow(row) : window.alert("Oops! Having issues removing that student.");
        // });
      });
    </script>
  </body>
</html>