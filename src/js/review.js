document.addEventListener("DOMContentLoaded", function () {
    const users = [
        { img: "../images/boy.png", name: "User1", desc: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum" },
        { img: "../images/boy.png", name: "User2", desc: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum" },
        { img: "../images/boy.png", name: "User3", desc: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum" },
        { img: "../images/boy.png", name: "User4", desc: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum" },
        { img: "../images/boy.png", name: "User5", desc: "lorem ipsum lorem ipsum lorem ipsum lorem ipsum" }
    ];

    const scrollContainer = document.createElement("div");
    scrollContainer.className = "scroll-container";
    document.body.appendChild(scrollContainer);

    users.forEach(user => {
        const card = document.createElement("div");
        card.className = "card";

        card.innerHTML = `
            <div class="profile">
                <img src="${user.img}" alt="${user.name}" class="profile-img">
                <div class="info">
                    <h2>${user.name}</h2>
                </div>
            </div>
            <div class="stars">
                <span class="star"><i class="fa-solid fa-star"></i></span>
                <span class="star"><i class="fa-solid fa-star"></i></span>
                <span class="star"><i class="fa-solid fa-star"></i></span>
                <span class="star"><i class="fa-solid fa-star"></i></span>
                <span class="star"><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="description">
                <p><i class="fa-solid fa-quote-left"></i><br>${user.desc}<br><i class="fa-solid fa-quote-right"></i></p>
            </div>`;

        scrollContainer.appendChild(card);
    });

    // Optional: Add event listeners for star rating functionality
    document.querySelectorAll(".card").forEach(card => {
        const stars = card.querySelectorAll(".star");
        stars.forEach((star, index) => {
            star.addEventListener("click", () => {
                stars.forEach((s, i) => {
                    s.classList.toggle("active", i <= index);
                });
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const scrollContainer = document.querySelector(".scroll-container");

    let isDown = false;
    let startX;
    let scrollLeft;

    scrollContainer.addEventListener("mousedown", (e) => {
        isDown = true;
        scrollContainer.classList.add("active");
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener("mouseleave", () => {
        isDown = false;
        scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mouseup", () => {
        isDown = false;
        scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 2; // Adjust scrolling speed
        scrollContainer.scrollLeft = scrollLeft - walk;
    });

    // Enable scrolling with arrow keys
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") {
            scrollContainer.scrollBy({ left: -200, behavior: "smooth" });
        } else if (e.key === "ArrowRight") {
            scrollContainer.scrollBy({ left: 200, behavior: "smooth" });
        }
    });
});

