let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.filter-button').forEach(item => {
        item.addEventListener("click", function() {
            document.querySelectorAll('.filter-button').forEach(li => li.classList.remove("active"));
            this.classList.add("active");
        });
    });
});