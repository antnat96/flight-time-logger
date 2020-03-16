$(document).ready(function() {
    
    function populateTable() {
        // Add the information to the table
        // var row = document.getElementById("flights_table").insertRow(1);
        // var idCell = row.insertCell(0);
        // var firstNameCell = row.insertCell(1);
        // var lastNameCell = row.insertCell(2);
        // var garlicCell = row.insertCell(3);
        // var shadowCell = row.insertCell(4);
        // var complexionCell = row.insertCell(5);
        // var accentCell = row.insertCell(6);
        // var vampireOrHuman = row.insertCell(7);
        // var deleteCell = row.insertCell(8);
        // idCell.innerHTML = "";
        // firstNameCell.innerHTML = firstName;
        // lastNameCell.innerHTML = lastName;
        // garlicCell.innerHTML = (garlic === true) ? "Yes" : "No";
        // shadowCell.innerHTML = (shadow === true) ? "Yes" : "No";
        // complexionCell.innerHTML = (complexion === true) ? "Yes" : "No";
        // accentCell.innerHTML = (accent === true) ? "Yes" : "No";
        // deleteCell.innerHTML = "<button class= 'remove-student-button btn btn-primary'>Delete</button>";
    }; populateTable();
    
    // Handler for the "Add Flight" button
    $("#add-flight-button").on("click", function() {
        var elements = document.querySelectorAll("#flight-info input");
        var flightInfo = [];
        for (var i = 0, element; element = elements[i++];) {
            flightInfo.push(element.value);
        }
        let testInfo = {"test":flightInfo[0],"test1":flightInfo[1],"test2":flightInfo[2],"test3":flightInfo[3]};
        $.ajax({
            url: "https://jsonbox.io/box_1e95d6414ad059792d45",
            data: JSON.stringify(testInfo),
            type: "POST",
            dataType: "json",
            contentType: "application/json"
        }).done(function(result){
            console.log(result);
        }).fail(function(result) {
            console.log(result);
        });
    })

    $("#get-data-button").on("click", function() {
        $.ajax({
            url: "https://jsonbox.io/box_1e95d6414ad059792d45",
            type: "GET",
            dataType: "json",
            contentType: "application/json"
        }).done(function(result){
            console.log(result[0]);
        }).fail(function(result) {
            console.log(result);
        });
    }) 

    // Handle the "Delete" button
    $(document).on('click', '.remove-student-button', function(){
        // Get the closest row element's index and delete it
        var table = document.getElementById("flights_table");
        let row = $(this).closest('tr').index();
        var vampireOrHuamnCell = table.rows[row].cells[7].innerHTML;
        if(vampireOrHuamnCell == "Human"){humans-=1}
        else{vampires-=1}
        //console.log(document.getElementById("flights_table").rows[1].innerHTML);
        (row !== null && row !== undefined) ? document.getElementById("flights_table").deleteRow(row) : window.alert("Oops! Having issues removing that student.");
    });

    // Handle the view mode change
    $("#select_view > a").on("click", function() {
        // Get the selected type of chart
        let typeOfChart = $(this).attr("id");
        // If table, show it, otherwise hide it and draw the appropriate chart
        (typeOfChart === "table_select") ? showTable() : drawChart(typeOfChart);
    })

    // Handle type of model used
    $("#select_model > a").on("click", function(){
        modelOption = $(this).attr("id");
    })

    function showTable() {
        $("#chart_div").addClass("d-none");
        $("#table_div").removeClass("d-none");
    }

});