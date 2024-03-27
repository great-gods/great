let menuOpen = document.querySelector('.menuOpen')
let menuClose = document.querySelector('.menuClose')
let menu = document.querySelector('#menu')
let body = document.querySelector('body')
menuOpen.addEventListener('click',function(){
  menu.classList.add('active')
  body.classList.add('bodyScroll')
})
menuClose.addEventListener('click',function(){
  menu.classList.remove('active')
  body.classList.remove('bodyScroll')
})

$(window).on('load', function() {
  let hrefPath = location.pathname.split('/')
  $('.el-list-button li').each(function(){
    let curPath = $(this).children().attr('href').split('/')
    if(hrefPath[1]=='news'){
      $('.el-list-button li')[0].children().classList.add('current')
    }else if( hrefPath[3] == curPath[5]) {
      $(this).children().addClass('current')
    }
  })
})