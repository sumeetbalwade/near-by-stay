$(document).ready(function () {
    $("#location").on("keyup", function () {
        var query = $(this).val();
        if (query.length > 0) {
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
                        h += "<a ";
                        h += "href='#'";
                        h += "class=";
                        h += "'list-group-item list-group-item-action ser-opt'";
                        h += ">" + property.location + "</a>";
                    });

                    $(".search-list").html(h);
                },
            });
        } else {
            $(".search-list").html("");
        }
    });

    $(document).on("click", ".ser-opt", function () {
        $("#location").val($(this).text());
        $(".search-list").html("");
    });
});
