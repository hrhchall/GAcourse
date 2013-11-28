/**
 * Javascript Exercise: DOM Insertion!
 */

/**
 * Question 1:
 * Let's get inserting! Before the header h1, let's insert a paragrah that has the text "Welcome!"
 */
$('header').prepend('<p>Welcome!</p>');

/**
 * Question 2:
 * Let's jazz up the header a little bit more. Let's place a kitten image afer the header's h1.
 * Use the url http://placekitten.com/600/200 for the image src
 */
$('h1').after("<img src='http://placekitten.com/600/200'/>");

/**
 * Question 3:
 * So that kitten sitting in figure 1 is boring. Let's make him pulse!
 * To do so, use jQuery to wrap the ONLY <img> inside the figure in a 
 * <div> with the class "pulse".
 */
$('figure img').wrap(function(){
	return "<div class='pulse'></div>";
});

/**
 * Question 4:
 * Now, let's append a <figcaption> element with text "Cosmic Cat" to that figure 
 * to explain what's going on. <figcaption> is an element that goes inside a <figure>
 * element to lend caption text.
 * Remeber, we want to place this INSIDE the <figure>
 */
$('figure#fig1').append('<figcaption>Cosmic Cat</figcaption>');

/**
 * Question 5:
 * Finally, let's just add a <span> with an "*" as text at the 
 * beginning of each paragraph in just our "main" section.
 * No real reason for it. 
 */
$('#main p').prepend('<span>*</span>');
