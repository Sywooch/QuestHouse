jQuery(document).ready(function($) {

    $('#fillTimeLine').click(function(){
        var from = $('#timeFrom').val();
        var to = $('#timeTo').val();
        var interval = $('#timeInterval').val();
        var price = $('#timePrice').val();

        var timeLine = "",priceLine = "";
        var dateStart = new Date();
        dateStart.setHours(from.split('.')[0]);
        dateStart.setMinutes(from.split('.')[1]);

        var dateEnd = new Date();
        dateEnd.setHours(to.split('.')[0]);
        dateEnd.setMinutes(to.split('.')[1]);


        timeLine += dateStart.getHours()+'.'+(dateStart.getMinutes()<10?'0':'') + dateStart.getMinutes();
        priceLine += price;


        while(dateStart<dateEnd){

            if (interval.indexOf('.') > -1){
                dateStart.setHours(dateStart.getHours() + parseInt(interval.split('.')[0]));
                dateStart.setMinutes(dateStart.getMinutes() + parseInt(interval.split('.')[1]));
            } else dateStart.setMinutes(dateStart.getMinutes() + parseInt(interval));

            timeLine += ";" + dateStart.getHours()+'.'+(dateStart.getMinutes()<10?'0':'') + dateStart.getMinutes();
            priceLine += ";" + price;
        }

        $('#timeLine').val(timeLine);
        $('#priceLine').val(priceLine);

    });

});