boxA = document . querySelector ('.box_A') ;
boxB = document . querySelector ('.box_B') ;
boxC = document . querySelector ('.box_C') ;

attributeImg1 = document . querySelector ('.img_1') . src ;
attributeImg2 = document . querySelector ('.img_2') . src ;
attributeImg3 = document . querySelector ('.img_3') . src ;
imgBig = document . querySelector ('.img_big') ;
imgBigg = document . querySelector ('.img_bigg') ;

loadEventsClick () ;

function loadEventsClick () {
	objectImg1 = document . querySelector ('.img_1') ;
	objectImg2 = document . querySelector ('.img_2') ;
	objectImg3 = document . querySelector ('.img_3') ;

	window . addEventListener ('load', change1 ) ;

	objectImg1 . addEventListener ('click', change1 ) ;
	objectImg2 . addEventListener ('click', change2 ) ;
	objectImg3 . addEventListener ('click', change3 ) ;
}

function change1 () {
	imgBig . innerHTML = '<img src= " ' + attributeImg1 + ' " class="img_bigs img_1">' ;
	imgBigg . innerHTML = '<img src= " ' + attributeImg1 + ' " class="img_bigs img_1">' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<img src= " ' + attributeImg1 + ' " height="140" class="images_small img_1">' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<img src= " ' + attributeImg2 + ' " height="140" class="images_small img_2">' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<img src= " ' + attributeImg3 + ' " height="140" class="images_small img_3">' ;
	loadEventsClick () ;
}

function change2 () {
	imgBig . innerHTML = '<img src= " ' + attributeImg2 + ' " height="520" class="img_bigs img_2">' ;
	imgBigg . innerHTML = '<img src= " ' + attributeImg2 + ' " height="520" class="img_bigs img_2">' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<img src= " ' + attributeImg2 + ' " height="140" class="images_small img_2">' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<img src= " ' + attributeImg3 + ' " height="140" class="images_small img_3">' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<img src= " ' + attributeImg1 + ' " height="140" class="images_small img_1">' ;
	loadEventsClick () ;
}

function change3 () {
	imgBig . innerHTML = '<img src= " ' + attributeImg3 + ' " height="520" class="img_bigs img_3">' ;
	imgBigg . innerHTML = '<img src= " ' + attributeImg3 + ' " height="520" class="img_bigs img_3">' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<img src= " ' + attributeImg3 + ' " height="140" class="images_small img_3">' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<img src= " ' + attributeImg1 + ' " height="140" class="images_small img_1">' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<img src= " ' + attributeImg2 + ' " height="140" class="images_small img_2">' ;
	loadEventsClick () ;
}


/*
boxA = document . querySelector ('.box_A') ;
boxB = document . querySelector ('.box_B') ;
boxC = document . querySelector ('.box_C') ;
attributeImg1 = document . querySelector ('.img_1') . style . backgroundColor ;
attributeImg2 = document . querySelector ('.img_2') . style . backgroundColor ;
attributeImg3 = document . querySelector ('.img_3') . style . backgroundColor ;
imgBig = document . querySelector ('.img_big') ;

loadEventsClick () ;

function loadEventsClick () {
	objectImg1 = document . querySelector ('.img_1') ;
	objectImg2 = document . querySelector ('.img_2') ;
	objectImg3 = document . querySelector ('.img_3') ;

	window . addEventListener ('load', change1 ) ;
	objectImg1 . addEventListener ('click', change1 ) ;
	objectImg2 . addEventListener ('click', change2 ) ;
	objectImg3 . addEventListener ('click', change3 ) ;
}

function change1 () {
	imgBig . innerHTML = '<div class="img_1 py-5 border" style="background-color: ' + attributeImg1 + ' ;"></div>' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<div class="img_1 py-5 border" style="background-color: ' + attributeImg1 + ' ;"></div>' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<div class="img_2 py-5 border" style="background-color: ' + attributeImg2 + ' ;"></div>' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<div class="img_3 py-5 border" style="background-color: ' + attributeImg3 + ' ;"></div>' ;
	loadEventsClick () ;
}

function change2 () {
	imgBig . innerHTML = '<div class="img_2 py-5 border" style="background-color: ' + attributeImg2 + ' ;"></div>' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<div class="img_2 py-5 border" style="background-color: ' + attributeImg2 + ' ;"></div>' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<div class="img_3 py-5 border" style="background-color: ' + attributeImg3 + ' ;"></div>' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<div class="img_1 py-5 border" style="background-color: ' + attributeImg1 + ' ;"></div>' ;
	loadEventsClick () ;
}

function change3 () {
	imgBig . innerHTML = '<div class="img_2 py-5 border" style="background-color: ' + attributeImg3 + ' ;"></div>' ;
	objectImg1 . remove () ;
	boxA . innerHTML = '<div class="img_3 py-5 border" style="background-color: ' + attributeImg3 + ' ;"></div>' ;
	objectImg2 . remove () ;
	boxB . innerHTML = '<div class="img_1 py-5 border" style="background-color: ' + attributeImg1 + ' ;"></div>' ;
	objectImg3 . remove () ;
	boxC . innerHTML = '<div class="img_2 py-5 border" style="background-color: ' + attributeImg2 + ' ;"></div>' ;
	loadEventsClick () ;
}
*/