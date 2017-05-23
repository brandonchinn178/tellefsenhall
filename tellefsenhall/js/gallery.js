(function($) {
    $(function() {
        $(document).on("click", ".gallery-photo img", function(e) {
            let info = $(this).parent().data();
            $(".popup img").attr("src", $(this).attr("src"));
            $(".popup .title").text(info.title);
            $(".popup .caption").text(info.caption);
            $(".popup").show();
            $("body").addClass("no-scroll");
        });

        $(".popup").click(function(e) {
            if ($(e.target).is(".popup")) {
                $(".popup").hide();
                $("body").removeClass("no-scroll");
            }
        });
    });
}(jQuery));
