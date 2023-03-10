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

// $(document).on('click', '.arrow', function(){
//   $(this)
// });


// For the sidebar sub menu arrow
// $(document).ready(function(){
//   let arrow = document.querySelectorAll(".arrow");
//   for (var i = 0; i < arrow.length; i++) {
//     arrow[i].addEventListener("click", (e)=>{
//    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
//    arrowParent.classList.toggle("showMenu");
//     });
//   }
// });

$(document).on('click','.icon-link',function(){
  try{
    console.log($('.icon-link').index(this))
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
    
  }catch(error){
    console.log(error);
  }
})

$(document).on('click','.forPageName',function(){
  sessionStorage.removeItem('tabToggled');
});


// let sidebar = document.querySelector(".sidebar");
// let sidebarBtn = document.querySelector(".bx-menu");
// // let sidebarBtn = document.getElementsByClassName('bx-menu');
// console.log(document);
// console.log(sidebarBtn);
// sidebarBtn.addEventListener("click", ()=>{
//   sidebar.classList.toggle("close");
// });

