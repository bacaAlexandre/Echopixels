/* Menu responsive */

(function($) {
    $(".menu_header_responsive").click(function () {
        $( ".menu_header" ).css("display:block");
        $( ".menu_header" ).slideToggle("slow");
    });


      // Source du code ci-dessous : https://stackoverflow.com/questions/4866284/jquery-add-class-active-on-menu

    $(function(){

        var url = window.location.pathname,
            urlRegExp = new RegExp(url == '/' ? window.location.origin + '/?$' : url.replace(/\/$/,'')); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.menu_header a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });

    });
})(jQuery);


