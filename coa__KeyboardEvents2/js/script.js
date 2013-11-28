/**
 * Welcome to Keyboard Events Exercise
 * A couple of thing we want to do:
 * 
 * 1) First, let's display the most recent keyCode the user pressed. This will help you do the second
 *    exercise. 
 */

var displayKeyPress = function() {
	$(document).keypress(function (event) {
		$('#justPressed').append(event.which);
	});
}

var preventVowels = function() {
		$('#noVowels').keypress(function (event) {
			console.log(event.which);
			var keyPressed = event.which;
			var inputTxt = $(this).val();
			console.log(inputTxt);
			switch(keyPressed)
				{
				case 65:
				case 97:
				case 69:
				case 101:
				case 73:
				case 105:
				case 79:
				case 111: 
				case 85:
				case 117:	
					event.preventDefault();
					break;			
				  default:
					break;
				}
			// compare it to the list of vowels
			// if it contains a vowel, remove it?
		});
	}

 /* 2) Now, let's change the behavior of the "noVowels" textbox so that no vowels can
 *    be typed in it. 
 *    Hint, remeber what event.preventDefault() does? 
 */
 /* Vowel key codes: 65, 97, 69, 101,
  73, 105, 79, 111, 85, 117 */

$(document).ready(function () {
	displayKeyPress();
	preventVowels();
});

