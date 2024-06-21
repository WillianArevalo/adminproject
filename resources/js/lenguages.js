$(document).ready(function () {
    var $addLanguage = $("#addLanguage");
    var $selectLanguage = $("#selectLenguages");
    var $modalAddLanguage = $("#modalAddLanguage");
    var $modalSelectLanguage = $("#modalSelectLanguage");
    var $closeModal = $(".closeModal");

    $addLanguage.on("click", function () {
        showModal($modalAddLanguage);
    });

    $selectLanguage.on("click", function () {
        showModal($modalSelectLanguage);
    });

    $closeModal.on("click", function () {
        closeModal($modalAddLanguage);
        closeModal($modalSelectLanguage);
    });

    $("#formAddLanguage").on("submit", function (e) {
        e.preventDefault();
        var $nameLanguage = $("#name_language");
        var $form = $("#formAddLanguage");
        if ($nameLanguage.val() === "") {
            $nameLanguage.parent().addClass("is-invalid");
            $nameLanguage.next().removeClass("hidden");
            $nameLanguage.parent().next().removeClass("hidden");
            return;
        } else {
            $.ajax({
                url: $form.attr("action"),
                type: $form.attr("method"),
                data: $form.serialize(),
                success: function (response) {
                    $form.trigger("reset");
                    closeModal($modalAddLanguage);
                    Toastify({
                        text: response.message,
                        close: true,
                        backgroundColor: "#16a34a",
                        newWindow: true,
                        stopOnFocus: true,
                        className: "toast successToast",
                        duration: 4000,
                    }).showToast();
                    $("#listLanguages").html(response.view);
                },
                error: function (response) {
                    console.log(response);
                },
            });
        }
    });

    $("#name_language").on("keyup", function () {
        var $nameLanguage = $(this);
        if ($nameLanguage.val() === "") {
            $nameLanguage.parent().addClass("is-invalid");
            $nameLanguage.next().removeClass("hidden");
            $nameLanguage.parent().next().removeClass("hidden");
            return;
        } else {
            $nameLanguage.parent().removeClass("is-invalid");
            $nameLanguage.next().addClass("hidden");
            $nameLanguage.parent().next().addClass("hidden");
        }
    });

    function showModal(modal) {
        modal.removeClass("hidden").addClass("flex");
    }

    function closeModal(modal) {
        modal.removeClass("flex").addClass("hidden");
    }
});
