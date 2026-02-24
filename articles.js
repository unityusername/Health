const articles = [
    {
        title: "Asthma Advice",
        slug: "asthma",
        publisher: "NHS",
        date: "5 Feb 2025",
        overview: "How weather conditions can affect asthma symptoms."
    },
    {
        title: "Weight Loss Tips",
        slug: "weight",
        publisher: "Healthline",
        date: "12 Feb 2025",
        overview: "Healthy and sustainable ways to lose weight."
    },
    {
        title: "Hay Fever Guide",
        slug: "hayfever",
        publisher: "NHS",
        date: "18 Feb 2025",
        overview: "Managing hay fever during high pollen seasons."
    },
    {
        title: "Cold Weather Health",
        slug: "cold-weather",
        publisher: "WHO",
        date: "22 Feb 2025",
        overview: "Staying healthy during colder months."
    },
    {
        title: "Heatwave Safety",
        slug: "heatwave",
        publisher: "NHS",
        date: "28 Feb 2025",
        overview: "How to stay safe during extreme heat."
    }
];

let currentPage = 1;
const articlesPerPage = 4;

/* RENDER ARTICLES */
function renderArticles() {
    const grid = document.getElementById("articlesGrid");
    const search = document.getElementById("searchInput").value.toLowerCase();

    grid.innerHTML = "";

    const filtered = articles.filter(article =>
        article.title.toLowerCase().includes(search) ||
        article.overview.toLowerCase().includes(search)
    );

    const start = (currentPage - 1) * articlesPerPage;
    const end = start + articlesPerPage;

    filtered.slice(start, end).forEach(article => {
        grid.innerHTML += `
            <div class="article-card">
                <div class="article-top">
                    <span>${article.title}</span>
                    <small>${article.publisher}<br>${article.date}</small>
                </div>

                <p>${article.overview}</p>

                <a href="${article.slug}.php" class="read-more">
                    Read more →
                </a>
            </div>
        `;
    });

    renderPageNumbers(filtered.length);
}

/* PAGE NUMBERS */
function renderPageNumbers(totalArticles) {
    const totalPages = Math.ceil(totalArticles / articlesPerPage);
    const pageNumbers = document.getElementById("pageNumbers");

    pageNumbers.innerHTML = "";
    for (let i = 1; i <= totalPages; i++) {
        pageNumbers.innerHTML += `<span>${i}</span> `;
    }
}

/* CHANGE PAGE */
function changePage(direction) {
    const totalPages = Math.ceil(articles.length / articlesPerPage);
    currentPage += direction;

    if (currentPage < 1) currentPage = 1;
    if (currentPage > totalPages) currentPage = totalPages;

    renderArticles();
}

/* SEARCH */
document.getElementById("searchInput").addEventListener("input", () => {
    currentPage = 1;
    renderArticles();
});

/* INIT */
renderArticles();