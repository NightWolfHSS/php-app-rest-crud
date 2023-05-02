/**
* popup about crud
*/

let xget, xhide;
document.querySelector('.wrapper-puppop').style.display = 'none';
document.querySelector('.wrapper-puppop').style.opacity = '0';

// как обойтись без перебора и querySelectorAll:

/*
* get current class
* use current class and set it to the desired selector
* to delete and current class
* class(DOM) 
*/
xget = document.querySelector('.mob-i p').addEventListener('click', function(e) {
    const root = e.target.classList[1];

	if (root == root) {
		document.querySelector('.wrapper-puppop').style.display = 'block';

		setTimeout(function() {
			document.querySelector('.wrapper-puppop').style.opacity = '1';
		}, 400);
        
		// a currnet class will be added to the button
		let c = document.querySelector('.clsd p').className = root;
        console.log(c);
	}

}, false);

xhide = document.querySelector('.clsd').addEventListener('click', function(e) {
	const base = document.querySelector('.clsd p');
	const root = e.target.className;
	console.log(base);
	return false;

	// document.querySelector('.clsd p'). = 'closed';


	console.log(root);
    document.querySelector('.wrapper-puppop').style.opacity = '0';
    setTimeout(function() {
        document.querySelector('.wrapper-puppop').style.display = 'none';
    }, 400);



}, false);




