$(document).ready(function () {
    $(".changeStatus").on("click", function () {
        let idButton = $(this).data("id");
        const optionsStatus = $(".optionsStatus");
        optionsStatus.each(function () {
            let idOption = $(this).data("id");
            if (idButton === idOption) {
                $(this).fadeToggle("fast");
                $(this)
                    .find("ul li")
                    .on("click", function () {
                        let status = $(this).data("status");
                        console.log(status);
                        location.reload();
                    });
            } else {
                $(this).hide();
            }
        });
    });

    $("#status").on("changeStatus", function () {
        let status = $(this).val();
        if (status === "complete") {
            $("#endDate").show();
        } else {
            $("#endDate").hide();
        }
    });
});
