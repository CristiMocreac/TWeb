document.addEventListener("DOMContentLoaded", function () {
    fetch("navbar.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("navbar-container").innerHTML = data;
            setupSearch();
        })
        .catch(error => console.error("Error loading navbar:", error));
});

function filterResults() {
    const query = document.getElementById("search-input").value.toLowerCase();
    const resultsContainer = document.getElementById("search-results");

    if (query === "") {
        resultsContainer.style.display = "none";
        return;
    }

    const pages = [
        { url: "gustari.html", name: "Gustări", items: ["chips", "nachos"] },
        { url: "patiserie.html", name: "Patiserie", items: ["croissant", "ecler", "tartă"] },
        { url: "meniu-vegetarian.html", name: "Meniu Vegetarian", items: ["salată", "humus"] },
        { url: "cafele.html", name: "Cafele", items: ["espresso", "latte", "cappuccino", "ciocolată caldă", "ceai"] },
        { url: "bauturi-de-sezon.html", name: "Băuturi de Sezon", items: ["bibi", "bubu"] }
    ];

    let matches = [];

    pages.forEach(page => {
        if (page.name.toLowerCase().includes(query)) {
            matches.push({ url: page.url, name: page.name });
        }
        page.items.forEach(item => {
            if (item.toLowerCase().includes(query)) {
                matches.push({ url: `${page.url}#${item}`, name: item });
            }
        });
    });

    if (matches.length === 0) {
        resultsContainer.innerHTML = "<div class='search-item'>Niciun rezultat găsit</div>";
    } else {
        resultsContainer.innerHTML = matches
            .map(match => `<div class="search-item" onclick="location.href='${match.url}'">${match.name}</div>`)
            .join("");
    }

    resultsContainer.style.display = "block";
}

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => { 
        const images = document.querySelectorAll(".menu-item");

        images.forEach((img, index) => {
            setTimeout(() => {
                img.classList.add("show"); 
            }, index * 500); 
        });
    }, 1000); 
});

