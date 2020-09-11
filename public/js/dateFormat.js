//class to format date
$("#from, #to").on("change", function (evt) {
    let $target = $(evt.target);

    var value = $target.val();

    if(value != null || value.length != 0) {
        //xample: 09/02/2020 -> day: 02 month: 09 year:2020
        //get day
        let day = value.substring(3, 5);
        let month = value.substring(0, 2);
        let year = value.substring(6);
        let formattedDate = day + "/" + month + "/" + year;
        //set value for input
        // $target.val(formattedDate);
    }

})
