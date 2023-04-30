/**
* popup about crud
*/

let xget, xhide;


xget = document.querySelector('.xget').addEventListener('click', function() {
	if (this.className == this.className) {
		document.querySelector('.wrapper-puppop').style.display = 'block';
		// сделать через точку символ и будет подставлятся не текущий а тот блок который мы хотим изменить
		// exp - get - current - get-c - нужный блок (${this.className}+'-c') 
		document.querySelector('.' + `${this.className}`).style.display = 'block';
	}
}, false);

xhide = document.querySelector('.clsd').addEventListener('click', function() {
    document.querySelector('.wrapper-puppop').style.display = 'none';
}, false);



