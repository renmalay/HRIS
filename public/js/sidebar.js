// For the sidebar burger menu

$(document).ready(function(){
  try{
   $('.navHeaders').each(function(){
    const parent = $(this);
    $('.forPageName a',this).each(function(){
      if($(this).attr('href') == window.location.pathname){
        parent.addClass('showMenu');
        parent.addClass('navHeadersBg');
        $(this).addClass('forPageNameBg');
      }
    })
   })
  }catch(error){
    console.log(error);
  }
});

$(document).on('click', '.bx-menu', function(){
  // console.log('hello');
  if($('.sidebar').hasClass('close')){
    $('.sidebar').removeClass('close');
  }
  else{
    $('.sidebar').addClass('close');
  }
});

$(document).on('click','.icon-link',function(){
  try{
    if($($('.navHeaders')[$('.icon-link').index(this)]).hasClass('showMenu')){
      $($('.navHeaders')[$('.icon-link').index(this)]).removeClass('showMenu');
    }else{
      $('.navHeaders').removeClass('showMenu');
      $($('.navHeaders')[$('.icon-link').index(this)]).addClass('showMenu');
    }
    
  }catch(error){
    console.log(error);
  }
})

$(document).on('click','.forPageName',function(){
  try{
    sessionStorage.removeItem('tabToggled');
  }catch(error){
    console.log(error);
  }
});


