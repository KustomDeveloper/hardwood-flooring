(() => {
    /*
    *  Magnific Popup 
    */
    jQuery('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small></small>Kitchen Remodeling</small>';
            }
        },
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it
        
            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function
        
            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
              // openerElement is the element on which popup was initialized, in this case its <a> tag
              // you don't need to add "opener" option if this code matches your needs, it's defailt one.
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          }
    });

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