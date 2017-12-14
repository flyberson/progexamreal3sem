$(document).ready(function () {



        getpoke();


})

function getpoke(){


    var Json= "http://localhost/PhpstormProjects/progexamreal3sem/explore_california_api.php/tours";

    $.getJSON(Json,function (data) {
        for (var i = 0; i < data.length; i++) {
            var tourname = data[i].tourName;
            var price = data[i].price;
            var description = data[i].description;
            var keywords = data[i].keywords;
            var image = '<img src="../../images/'+ data[i].graphic+'"';


            $("#tablebody").append("<tr>"+ "<td>"+tourname+"</td>"+ "<td>"+price+"</td>"+"<td>"+description+"</td>"+ "<td>"+keywords+"</td>"+ "<td>"+image+"</td>"+"</tr>");
        }
    });


}
