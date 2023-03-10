
$(document).ready(function(){
    if(sessionStorage.getItem('tabToggled')){
        $('.genSetupBtns').each(function(){
            if($(this).text() == sessionStorage.getItem('tabToggled')){
                $(this).trigger('click');
                return;
            }
        })
    }
    
})

$(document).on('click','.genSetupBtns',function(){
    
    sessionStorage.setItem('tabToggled',$(this).text())
    

});