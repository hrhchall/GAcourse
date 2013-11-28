/**
 * Welcome to Keyboard Events Exercise
 * A couple of thing we want to do:
 * 
 * 1) First, let's display the most recent keyCode the user pressed. This will help you do the second
 *    exercise. 
 *
 * 2) Now, let's change the behavior of the "noVowels" textbox so that no vowels can
 *    be typed in it. 
 *    Hint, remeber what event.preventDefault() does? 
 */

 
$(document).ready(function(){
	$('input').keypress(function(event){
		$('#justPressed').append(event.which);

			if(isVowel(event.which)){
				event.preventDefault();
}
});
});



	function isVowel(vowel) {
	var vowels=[65,97,69,101,73,105,79,111,85,117];
	if($.inArray(vowel,vowels)!== -1) {
		return true; }
		else{
			return false;
		}
	};
	

