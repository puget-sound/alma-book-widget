/*var mq = window.matchMedia('@media all and (max-width: 700px)');
if(mq.matches) {console.log('large')
    // the width of browser is more then 700px
    
} else {console.log('small')
    //document.getElementById('ebookframe').src = "https://mypsapps.pugetsound.edu/alma-book-widget/books-display/display.php?filter=type&query=electronic&template=subjectguides";
	//document.getElementById('ebookframe').height = "200px";
}*/

if (window.matchMedia("(max-width: 1024px)").matches) {
document.getElementById('ebookframe').src = "https://mypsapps.pugetsound.edu/alma-book-widget/books-display/display.php?filter=type&query=electronic&template=subjectguides";
	document.getElementById('ebookframe').height = "200px";
}