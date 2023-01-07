// Effet écriture
let target = document.querySelector('#target');

let texts = ["Développeur web", "Recherche d'un poste de développeur web", "Alternance"];
let i = 0;

function typeText() {
    target.textContent = '';
    let j = 0;
    const typing = setInterval(() => {
        if (j > texts[i].length) {
            clearInterval(typing);
            setTimeout(() => {
                eraseText();
            }, 1500);
        } else {
            target.textContent += texts[i].charAt(j);
            j++;
        }
    }, 100);
}

function eraseText() {
    target.textContent = texts[i];
    let j = texts[i].length;
    const erasing = setInterval(() => {
        if (j <= 0) {
            clearInterval(erasing);
            i++;
            if (i >= texts.length) {
                i = 0;
            }
            setTimeout(() => {
                typeText();
            }, 1000);
        } else {
            target.textContent = target.textContent.slice(0, -1);
            j--;
        }
    }, 100);
}

typeText();

//mettre la classe active pour le li et section
let btns = document.querySelectorAll('.top-menu ul li');
let sections = document.querySelectorAll('section');

btns.forEach((btn) => {
    let current = '';
    btn.addEventListener('click', () => {
        btns.forEach((btn) => {
            btn.classList.remove('active');
        });
        btn.classList.add('active');
        current = btn.dataset.menu;
        sections.forEach((sec) => {
            sec.classList.remove('active');
        });
        document.querySelector('#' + current).classList.add('active');
    });
});

//btn contact
let contactMe = document.querySelector('#contact-me');

contactMe.addEventListener('click', () => {
    sections.forEach((section) => {
        section.classList.remove('active');
    });

    btns.forEach((btn) => {
        btn.classList.remove('active');
        document.querySelector('[data-menu~="contact"]').classList.add('active');
    });
    document.querySelector('#contact').classList.add('active');
});

//Progress Bar
const spans = document.querySelectorAll('.skill-box .progress span');

spans.forEach((span) => {
    span.style.width = span.dataset.progress;
});

//ScrollSpy
window.addEventListener('scroll', ScrollSpy);

function ScrollSpy() {
    let currentSection = '';
    sections.forEach(section => {
        let sectionTop = section.offsetTop;
        if (scrollY >= sectionTop - 65) {
            currentSection = section.getAttribute('id');
        }
    });
    if (currentSection != "") {
        btns.forEach(li => {
            li.classList.remove('active');
            document.querySelector(`[data-menu~="${currentSection}"]`).classList.add('active');
        });
    }
}
//loader
setTimeout(() => {
    document.querySelector('.preloader').style.display = "none"
}, 2240)


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("top-btn").style.display = "block";
    } else {
        document.getElementById("top-btn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

document.getElementById("top-btn").addEventListener("click", topFunction);
