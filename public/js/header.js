$(function (){
    const $navbarTop = $("div.navbar-top")
    const $navbarMenu = $("div.navbar-menu");
    $(document).on("scroll", function () {
        const scrollPosition = $(window).scrollTop();
        if(scrollPosition > 10) {
            $navbarTop.slideUp("fast");
            $navbarMenu.css({
                "backgroundColor": "rgba(0, 0, 0, .8)",
            });
        } else {
            $navbarTop.slideDown("fast");
            $navbarMenu.css({
                "backgroundColor": "transparent",
                "border" : "none"
            });
        }
    })
})
