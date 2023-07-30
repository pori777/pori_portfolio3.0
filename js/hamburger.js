jQuery( function () {
    let timer = 0;
    jQuery( ".js-hamburger--bt" ).on('click' , function() {
        jQuery( ".js-hamburger--bt" ).toggleClass( "is-open" );
        jQuery( ".js-hamburger" ).toggleClass( "is-open" );
        jQuery( "body" ).toggleClass( "is-open" );
    })
    jQuery( ".p-gnavi__item" ).on('click' , function() {
        jQuery( ".js-hamburger--bt" ).toggleClass( "is-open" );
        jQuery( ".js-hamburger" ).toggleClass( "is-open" );
        jQuery( "body" ).toggleClass( "is-open" );
    })
    jQuery( window ).on( "resize", function() {
        let pcWidth = 769;
        if( timer > 0 ) {
            clearTimeout( timer );
        }
        timer = setTimeout( function() {
            //resizedWidth 今のwindowの幅 innerWidth windowの幅 見ている人のwindowの幅 bodyの幅
            //現在のwindow幅がpcWidthよりも大きくなったら.is-openが外れる操作
            let resizedWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            if( resizedWidth >= pcWidth ) {
                jQuery( ".js-hamburger--bt" ).removeClass( ".is-open" );
                jQuery( ".js-hamburger" ).removeClass( ".is-open" );
                jQuery( "body" ).removeClass( ".is-open" );
            }
        }, 200 );
    })
})
