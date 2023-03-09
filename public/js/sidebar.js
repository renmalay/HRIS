// For the sidebar burger menu
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

$(document).on('click','.navHeaders',function(){
  try{    
    if($(this).hasClass('showMenu')){
      $('.navHeaders').removeClass('showMenu');
    }else{
      $('.navHeaders').removeClass('showMenu');
      $(this).addClass('showMenu');
    }
    
  }catch(error){
    console.log(error);
  }
})


// let sidebar = document.querySelector(".sidebar");
// let sidebarBtn = document.querySelector(".bx-menu");
// // let sidebarBtn = document.getElementsByClassName('bx-menu');
// console.log(document);
// console.log(sidebarBtn);
// sidebarBtn.addEventListener("click", ()=>{
//   sidebar.classList.toggle("close");
// });

