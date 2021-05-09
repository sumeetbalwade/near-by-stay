$(document).ready(function () {
    $(".search-input").on("keyup", function () {
        var query = $(this).val();
        if (query.length >= 3) {
            $.ajax({
                url: "/searchProperty",
                data: {
                    query: query,
                },
                dataType: "json",
                beforeSend: function () {
                    $("#search-res").html("<tr>Loading...</tr>");
                },
                success: function (res) {
                    const uniquePeopleStrings = new Set(
                        res.data.map(JSON.stringify)
                    );
                    const uniquePeopleStringsArray = Array.from(
                        uniquePeopleStrings
                    );
                    const da = uniquePeopleStringsArray.map(JSON.parse);

                    var h = "";
                    $.each(da, function (index, property) {
                        console.log(property);
                        h += "<tr>";
                        h += "<td>" + property.id + "</td>";
                        h += "<td>" + property.name + "</td>";
                        h += "<td>" + property.location + "</td>";
                        h += "<td>Rs <strong>" + property.price + "</strong>";
                        h += "</td>";
                        h += "<td>";
                        h += '<div class="row">';
                        h += '<a href="/more-info/' + property.id + '"';
                        h += 'class="btn btn-primary mx-1 my-1">View</a>';
                        h += '<a href="/editProperty/' + property.id + '"';
                        h += 'class="btn btn-success mx-1 my-1">Edit</a>';
                        h += '<a href="/deleteProperty/' + property.id + '"';
                        h += 'class="btn btn-danger mx-1 my-1">Delete</a>';
                        h += "</div>";
                        h += "</td>";
                        h += "</tr>";
                    });

                    $("#search-res").html(h);
                },
            });
        }
    });
});
