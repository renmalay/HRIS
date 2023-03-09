
$(document).ready(function(){
    try{
        const lastPath = window.location.pathname.split('/').pop();
        const sliced = lastPath.split('-');
        const tempName = sliced.map((s)=>{
            return s.charAt(0).toUpperCase() + s.slice(1);
        })
        const pageName = tempName.toString().replaceAll(',',' ');
        $('#pageName').text(pageName);
    }catch(error){
        console.log(error);
    }
}); 