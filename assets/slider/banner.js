const bannerImg = ["./assets/img/logo-banner/ip11-banner.png","./assets/apple/img/banner-product.png" ,"./assets/img/logo-banner/banner.png", "./assets/img/logo-banner/The PS logo (1).png","./assets/img/logo-banner/s23-banner.png"]
const bannerEle = document.getElementById("banner-img")
const slider = document.getElementById("banner")
let index = 0
const idInterval = setInterval(() => {
    bannerEle.style.transform = "translateX(-100%)"
    setTimeout(() => {
      bannerEle.src = bannerImg[index]
      bannerEle.style.transform = "translateX(0%)"
      index += 1
      if (index == bannerImg.length) {
          index = 0;
      }
    }, 500)
}, 4000)






