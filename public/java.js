const toggle = document.getElementById("toggle");

console.log(toggle)

toggle.addEventListener("change", (e) => {
    document.body.classList.toggle("dark", e.target.checked)
})



const p = document.getElementsByTagName('p');
setInterval(function() {
	footer0.style.color = 'red';
	setTimeout(function()
	{
		footer0.style.color = 'black';

	}, 500)
}, 1000 );



const deskripsi = document.querySelector('deskripsi');
setInterval(function() {
	kursus.style.color = '#7C83FD';
	setTimeout(function()
	{
		kursus.style.color = 'white';

		
	}, 500)
}, 1000 );




const online = document.getElementById('online');
setInterval(function() {
	online.style.color = 'white';
	setTimeout(function()
	{
		online.style.color = '#7C83FD';

		
	}, 500)
}, 1000 );








