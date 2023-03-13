
$(document).ready(function(){
    try{
        let sideBarNames = [];
        let pageName;
        $('.forPageName').each(function(){
            sideBarNames.push($(this).text());
        });
        sideBarNames.map((s)=>{
            const comaprison = s.toLowerCase().replaceAll(' ','-');
            if(window.location.pathname.includes(comaprison))
            {
                return pageName = s;
            }
        })

        if(sessionStorage.getItem('tabToggled')){
            $('.insideNavs').each(function(){
                if($(this).text() == sessionStorage.getItem('tabToggled')){
                    $(this).trigger('click');
                    return;
                }
            })
        }
        
       
        $('#pageName').text(pageName);
    }catch(error){
        console.log(error);
    }
}); 


$(document).on('click','.insideNavs',function(){
    
    sessionStorage.setItem('tabToggled',$(this).text())
    

});