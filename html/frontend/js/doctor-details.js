const bar = document.querySelector(".about-cate-bar");
const each_bar = bar.querySelectorAll("div");

const about_dr = document.querySelectorAll(".about-dr")

const initialClear = () => {
    each_bar.forEach((q) => {
        q.classList.remove('active');
    });

    about_dr.forEach((q) => {
        q.style.display = "none";
    })
}

const activeBar = (w) => {

    initialClear();

    // adding the active class to the clicked section
    w.classList.add("active");

    const block_active = w.getAttribute('block_active');
    const block = document.getElementById(block_active)
    block.style.display = "block";
};

// for loop in all the classes of the bar
each_bar.forEach((q) => {
    q.addEventListener("click", () => activeBar(q))
});