$(function(){

$('a[href*=#]').click(function() {

if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
 && location.hostname == this.hostname) {

     var $target = $(this.hash);

     $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

     if ($target.length) {

         var targetOffset = $target.offset().top;

         $('html,body').animate({scrollTop: targetOffset}, 1000);

         return false;

    }

}

});

});

var words = ['Web Developer', 'Estudiante','Freelance'];
    wordWrapper = document.getElementById('word');
    wordWrapperContent = document.getElementById('word').innerHTML;
    addingWord = false;
    counter = 1;

setInterval(function(){

  if(wordWrapperContent.length > 0 && !addingWord ) {
    wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
    wordWrapperContent = wordWrapper.innerHTML;
  } else {
    addingWord = true;
  }

  if( addingWord ){
    if( wordWrapperContent.length < words[counter].length  ) {
      wordWrapper.innerHTML = words[counter].slice(0, wordWrapperContent.length + 1);
      wordWrapperContent = wordWrapper.innerHTML;
    } else {
      if( counter < words.length) {
        counter ++
      }
      addingWord = false;
    }
  }

  if( counter == words.length) {
    counter = 0;
}
},100);
function cambioHeader(){
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    document.getElementById("header").className="header2" }else {
      document.getElementById("header").className="header1";  }
  if (window.innerWidth < 1000) {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("header").className="header2" }else {
        document.getElementById("header").className="header1";  }
    }
  }

window.onscroll=function(){cambioHeader();}

function twitter(){
  return "@AleArda";
}
function insta(){
  return "ale_ardanaz";
}
function agrandar(){
  document.getElementsByClassName('logos').width="70px;"
}
