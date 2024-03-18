const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const closes = document.getElementById('close');

if (bar) {
    bar.addEventListener('click', (e) => {
        e.preventDefault();

        nav.classList.add('active');

    })

}


if (closes) {
    closes.addEventListener('click', (e) => {
        e.preventDefault();

        nav.classList.remove('active');
    })
}


