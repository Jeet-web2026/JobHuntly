$(document).ready(function () {
    $(document).on("click", ".add-more-employment", function () {
        let designationField = $(
            ".designation-area .designation-field:first"
        ).clone();
        designationField.find("textarea, input").val("");
        designationField.find("input:checkbox").prop("checked", false);

        designationField.addClass("mt-4 border-top border-dark pt-4");
        designationField.find(".close-employement, .add-more-employment").removeClass("d-none");

        $(".designation-area").append(designationField);
    });

    $(document).on('click', '.close-employement', function(){
        $(this).closest('.designation-field').remove();
    });
});
