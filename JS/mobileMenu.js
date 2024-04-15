const handleMobileMenu = () => {
    getNavData();
    
    $('.mobileMenuContent').css({
        'transform': 'translateX(-30%)',
    });
    
}

const handleCloseNav = () => {
    $('.mobileMenuContent').css({
        'transform': 'translateX(-100%)'
    });
}

$(document).on('scroll', function(){
    scrollPos = $(window).scrollTop();
    if(scrollPos>148){
        $('.logBgMobile.mobile').css({
            'background':'#fff',
            'zIndex':9
        });

        $('.navbarCustom+a.donateBtn.mobile').css({
            'position':'fixed',
            'right':'21px',
            'zIndex':9,
            'top':'6px',
            'padding':'5px 12px'
        })
    }else{
        $('.logBgMobile.mobile').css({
            'background':'transparent'
        });

        $('.navbarCustom+a.donateBtn.mobile').css({
            'position':'',
            'right':'',
            'zIndex':9,
            'top':'',
            'padding':''
        })
    }
});

const getNavData = ()=>{
    const navUl = $('.navbarCustom').html();
    $('.mobileMenuContent #bindDrpdowndata').html(navUl);
}

$(document).ready(function(){
    getNavData();
});