$(document).ready(function () {
    $(".search-input").on("keyup", function () {
        var query = $(this).val();
        if (query.length >= 3) {
            $.ajax({
                url: "/searchEnquiriesRes",
                data: {
                    query: query,
                },
                dataType: "json",
                beforeSend: function () {
                    $("#search-res").html("<tr>Loading...</tr>");
                },
                success: function (res) {


                    console.log(res);
                    const uniquePeopleStrings = new Set(
                        res.data.map(JSON.stringify)
                    );
                    const uniquePeopleStringsArray = Array.from(
                        uniquePeopleStrings
                    );
                    const da = uniquePeopleStringsArray.map(JSON.parse);

                    var h = "";
                    $.each(da, function (index, enquiry) {


                    h+='<tr>';
                    h+='<td>'+ enquiry.id +'</td>';
                    h+='<td>' + enquiry.name+'</td>';
                    h+='<td>' + enquiry.mobile +'</td>';
                    h+='<td>' + enquiry.pid+'</td>';
                    h+='<td>' + enquiry.pname +'</td>';
                    h+='<td>' + enquiry['check-in'] +' to '+ enquiry['check-out'] +'</td>';
                    h+='<td>' + enquiry.adults +'A - '+ enquiry.child +'C</td>';
                    h+='<td>';
                    h+='    <div class="row">';
                    h+='      <a href="/viewSingleEnq/'+ enquiry.id +'"';
                    h+='                class="btn btn-primary mx-1 my-1">View</a>';
                    h+='      <a href="/deleteEnquiry/'+ enquiry.id +'"';
                    h+='                class="btn btn-danger mx-1 my-1">Delete</a>';
                    h+='    </div>';
                    h+='</td>';
                    h+='</tr>';


                     
                    });

                    $("#search-res").html(h);
                },
            });
        }
    });
});
