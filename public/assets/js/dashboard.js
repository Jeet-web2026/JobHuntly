$(document).ready(function () {
    $(document).on("click", ".add-more-employment", function () {
        let designationField = $(
            ".designation-area .designation-field:first"
        ).clone();
        designationField.find("textarea, input").val("");
        designationField.find("input:checkbox").prop("checked", false);

        designationField.addClass("mt-4 border-top border-dark pt-4");
        designationField
            .find(".close-employement, .add-more-employment")
            .removeClass("d-none");

        $(".designation-area").append(designationField);
    });

    $(document).on("click", ".close-employement", function () {
        $(this).closest(".designation-field").remove();
    });

    $(document).on("click", ".add-more-projects", function () {
        let projectField = $(".projects-area .project-field:first").clone();
        projectField.find("textarea, input").val("");
        projectField.find("input:checkbox").prop("checked", false);
        projectField.addClass("mt-4 border-top border-dark pt-4");
        projectField
            .find(".remove-projects, .add-more-projects")
            .removeClass("d-none");
        $(".projects-area").append(projectField);
    });

    $(document).on("click", ".remove-projects", function () {
        $(this).closest(".project-field").remove();
    });
});
