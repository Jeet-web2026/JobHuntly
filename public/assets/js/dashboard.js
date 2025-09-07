$(document).ready(function () {
    $(document).on("click", ".add-more-employment", function () {
        let designationField = $(this).closest(".designation-field").clone();
        $(".designation-area").append(designationField);
    });
});
