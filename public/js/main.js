
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
        
       
        $('#pageName').text(pageName);
    }catch(error){
        console.log(error);
    }
}); 