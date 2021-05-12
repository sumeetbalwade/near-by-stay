$(document).ready(function () {
    $("#location").on("keyup", function () {
        var query = $(this).val();
        console.log(query);
        if (query.length >= 3) {
            $.ajax({
                url: "/getsearch",
                data: {
                    query: query,
                },
                dataType: "json",
                success: function (res) {
                    const uniquePeopleStrings = new Set(
                        res.data.map(JSON.stringify)
                    );
                    const uniquePeopleStringsArray =
                        Array.from(uniquePeopleStrings);
                    const da = uniquePeopleStringsArray.map(JSON.parse);

                    var h = "";
                    $.each(da, function (index, property) {
                        console.log(property);

                        h += "<a ";
                        h += "href='#'";
                        h += "class=";
                        h += "'list-group-item list-group-item-action'";
                        h += ">";
                        h += property.location;
                        h += "      </a>";
                    });

                    $(".search-list").html(h);
                },
            });
        }
    });
});
