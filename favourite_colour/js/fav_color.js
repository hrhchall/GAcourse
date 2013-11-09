$(

  function(event) {

  	var background_colour = prompt('What is your favourite colour?');

  	if(
      background_colour==='blue'||
      background_colour==='red'||
      background_colour==='yellow'||
      background_colour==='green'
      )
    {$('body').css('background-color', background_colour);
  	} 
    else {
  		$('body').css('background-color', background_colour);
		  $('h2').text("We dont have that colour");
  		}
}
);
  		

  	


  	//Start to type below here. Make sure not to delete any "{}" braces. 




