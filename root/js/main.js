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
* получаем текущий класс - устанавливаем его к
*  кнопке выключения и выключаем стили по ней (display none);
*/
xget = document.querySelector('.mob-i p').addEventListener('click', function(e) {
    const root = e.target.classList[1];

	if (root == root) {
		document.querySelector('.wrapper-puppop').style.display = 'block';
		setTimeout(function() {
			document.querySelector('.wrapper-puppop').style.opacity = '1';
		}, 400);
		let m = document.querySelector('.'+`${root}`+'-c').style.display = 'block';
		// a currnet class will be added to the button
		let c = document.querySelector('.clsd p').className = root;
	}
}, false);

xhide = document.querySelector('.clsd').addEventListener('click', function(e) {
	const base = document.querySelector('.clsd p');
	const root = e.target.className;
    document.querySelector('.wrapper-puppop').style.opacity = '0';

    setTimeout(function() {
        document.querySelector('.wrapper-puppop').style.display = 'none';
        document.querySelector('.'+`${root}`+'-c').style.display = 'none';
        base.classList.remove(root);
    }, 400);

}, false);



const baseSumArr = [1,2,3,] + [4,5,6];
console.log(baseSumArr);



