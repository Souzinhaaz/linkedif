function darkTheme() {
    let body = document.querySelector("body");
    body.classList.toggle("dark-theme");

    let nav = document.querySelector("nav");
    nav.classList.toggle("dark-theme");

    let sectionTitle = document.querySelectorAll(".section-title");
    sectionTitle.forEach(function (element) {
        element.classList.toggle("dark-theme");
    });

    let title = document.querySelectorAll(".title");
    title.forEach(function (element) {
        element.classList.toggle("text-white");
    });

    let description = document.querySelectorAll(".description");
    description.forEach(function (element) {
        element.classList.toggle("text-white");
    });

    let serviceItem = document.querySelectorAll(".service-item");
    serviceItem.forEach(function (element) {
        element.classList.toggle("dark-theme")
    })

    let students = document.querySelectorAll(".student");
    students.forEach(function(element) {
        element.classList.toggle("bg-light");
        element.classList.toggle("dark-theme");
    })
}

document.addEventListener("DOMContentLoaded", function() {
    const theme = document.querySelector("#switchTheme");

    theme.addEventListener("click", function() {
        if (theme.classList.contains("bi-moon-fill")) {
            // Se o ícone atual for lua, trocar para sol
            theme.classList.remove("bi-moon-fill");
            theme.classList.add("bi-sun-fill");
            darkTheme();
        } else if (theme.classList.contains("bi-sun-fill")) {
            // Se o ícone atual for sol, trocar para lua
            theme.classList.remove("bi-sun-fill");
            theme.classList.add("bi-moon-fill");
            darkTheme();
            // Atualizar cor do ícone se desejar
            theme.classList.remove("text-warning");
            theme.classList.add("text-success");
        }
    });
});
