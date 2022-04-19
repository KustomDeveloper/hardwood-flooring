(() => {

    /*
    *  Video Loader 
    */
    jQuery('div[itemprop="video"]').on('click', function(e) {    
        e.preventDefault();
        var iframe = jQuery(this).find('iframe');
        var url = iframe.attr('data-src');
        var srcValue = iframe.attr('src');
    
        if(srcValue == 'about:blank') {
        iframe.attr('src', url);
        iframe.css('pointer-events', 'auto');
        }
    });

    /*
    *  Mobile Menu
    */
    jQuery('.mobile-menu img').on('click', (e) => {
        e.preventDefault();
        jQuery('.mobile-menu').hide();
        jQuery('.mobile-nav').fadeIn();
        jQuery('.close-menu').fadeIn();
    })
    jQuery('.close-menu img').on('click', (e) => {
        e.preventDefault();
        // console.log('clicked');
        jQuery('.close-menu').hide();
        jQuery('.mobile-nav').fadeOut();
        jQuery('.mobile-menu').fadeIn();
    })

    /*
    *  Lazyload img gallery
    */
    jQuery(function() {
        jQuery('.lazy').lazy();
    });

    /*
    *  Btn change
    *  Localized data: businessData.phone
    */
    [...document.querySelectorAll('.cta a button')].forEach((item) => {
        jQuery(item).mouseenter(function() {
            jQuery(this).text(businessData.phone);
       }).mouseleave(function() {
            jQuery(this).text('Call Now For Quote');
       })
    });    

})()