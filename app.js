// const observer = new IntersectionObserver((entries) => {
//     entries.array.forEach((entry) => {
//         console.log(entry)
//         if(entry.isIntersecting){
//             entry.target.classList.add('show');
//         } else {
//             entry.target.classList.remove('show')
//         }
//     });
// });

// const hiddenElements = document.querySelectorAll('.hidden');
// hiddenElements.forEach((el) => observer.observe(el));

// const lenis = new Lenis({
//     duration: 1.2,
//     easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
// });

// function raf(time) {
//     lenis.raf(time);
//     ScrollTrigger.update();
//     requestAnimationFrame(raf);
// }

// requestAnimationFrame(raf);


// const lenis = new Lenis({
//     duration: 1.2,
//     easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
//   });

const pertanyaan = document.getElementById("pertanyaan")
const jawaban = document.getElementById("jawaban")
const loaders = document.getElementById("loaders")
const container = document.getElementsByClassName("container")
let init = 0

const botSay = (data) => {
    return [
        "Halo saya adalah Ibot, nama kamu siapa?",
        `Halo ${data?.nama}, berapa usia kamu?`,
        `Ohh kamu ${data?.usia} tahun, hobi kamu apa?`,
        `Wahh sama dong aku juga hobi ${data?.hobi}, btw kamu punya pacar ga?`,
        `ohh ${data?.pacar}, oke kalau gitu. Udahan ya??`,
    ]
}
pertanyaan.innerHTML = botSay() [0]

let usersData = []

function botStart () {
    if(jawaban.value.length < 1) return alert("silahkan isi jawaban dahulu")
    init++
    if (init === 1) {
        botDelayed({nama : jawaban.value})

    } else if (init === 2) {

        botDelayed({usia : jawaban.value})
    } else if (init === 3 ) {

        botDelayed({hobi : jawaban.value})
    } else if (init === 4 ) {

        botDelayed({pacar : jawaban.value})
    } else if (init === 5 ) {
       finishing()
    } else {
        botEnd()
    }
}

function botDelayed(jawabanUser) {
    loaders.style.display = "block";
    container[0].style.filter = "blur(8px)";
    setTimeout(() => {
      pertanyaan.innerHTML = botSay(jawabanUser)[init];
      container[0].style.filter = "none";
      loaders.style.display = "none";
      lenis.scrollTo(pertanyaan.offsetTop, 500); // Add this line
    }, 1000);
    usersData.push(jawaban.value);
    jawaban.value = "";
  }


function finishing () {
    pertanyaan.innerHTML = `Makasih ya ${usersData[0]} udah main ke Ibot. Kapan kapan kita kita ${usersData[2]} bareng ya!`
    jawaban.value = `Iya sama sama!`
}

function botEnd () {
    alert(`Terimakasih ${usersData[0]}, sudah berkunjung`)
    window.location.reload()
}


