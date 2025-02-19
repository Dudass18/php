
var svgPath = document.querySelectorAll("svg")
var count = document.querySelectorAll(".ícon")
var countElem = document.querySelectorAll("p")

gsap.registerPlugin()


gsap.to(svgPath, {
    f: 2,
    l: 38,
    duration: .3,
    delay: .15,
})

gsap.to(svgPath, {
    s: .2,
    y: 16,
    duration: .8, 
    delay: .15,
    ease: Elastic.easeOut.
    config(1, .4)
})

gsap.to(count, {
    number: "100",
    duration: 3.8,
    delay: .8,
    onUpdate() {
        countElem.innerHTML =
        Math.round(count.number)
        + '%';
    }
})
    