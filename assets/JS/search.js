$(document).ready(function () {
    var input = $("#inputSearch");
    var div = $("#noResults");
    var malasPalabras = [
        "tonto",
        "feo",
        "idiota",
        "aguado",
        "argüendero",
        "baboso",
        "bocachancla",
        "cabron",
        "cabron",
        "calientahielos",
        "caraculo",
        "carajote",
        "chafa",
        "chairo",
        "chingaquedito",
        "chingar",
        "chingon",
        "chupacables",
        "coscolino",
        "cuate",
        "culero",
        "fodongo",
        "fresa",
        "fufurufo",
        "güey",
        "wey",
        "huevon",
        "guevon",
        "wevon",
        "joto",
        "goto",
        "madrazo",
        "mamon",
        "malacopa",
        "malandro",
        "mecate",
        "mexicanada",
        "naco",
        "ñero",
        "pedo",
        "pendejo",
        "pinche",
        "pintear",
        "pisto",
        "putazo",
        "puta",
        "puto",
        "putita",
        "ruco",
        "sacaton",
        "simon",
        "soplagaitas",
        "taco",
        "teibolera",
        "traqueteado",
        "verga",
        "wey",
        "zape",
        "zopenco",
    ];

    function filtertable() {
        var value = input.val().toLowerCase();
        $("#searchValue").text(value);

        var result = $("#myTable .table_custom-row").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            return $(this).is(":visible");
        }).length;

        if (result <= 0) {
            div.addClass("active");

            // if (malasPalabras.some((palabra) => value.includes(palabra))) {
            //     div.html("Que persona tan grosera eres <br> 😲😲😲");
            //     div.addClass("active");
            // }
        } else {
            div.removeClass("active");
        }
    }

    input.on("input", filtertable);

    function toggleSearch() {
        $(".table-c2_btn-search").toggleClass("active");
        $(".table-c2_search").toggleClass("active");
        input.val("");
    }

    $(".table-c2_btn-search").click(toggleSearch);

    $(".table-c2_btn-close").click(function () {
        toggleSearch();
        filtertable();
    });
});

// $(document).ready(function () {
//     $("#inputSearch").on("input", function () {
//         var value = $(this).val().toLowerCase();
//         $("#myTable .table_custom-row").filter(function () {
//             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
//         });
//     });
// });
