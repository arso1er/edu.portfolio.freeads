// https://stackoverflow.com/a/35659572
// https://stackoverflow.com/a/38075603
document.addEventListener("DOMContentLoaded", function (event) {
    const inputs = document.querySelectorAll("input[type=range]");
    if (inputs && inputs.length) {
        // Add events listeners to range inputs
        document
            .querySelector("input[name=min_price]")
            .addEventListener("input", function () {
                this.value = Math.min(
                    this.value,
                    this.parentNode.childNodes[5].value - 1
                );
                let value = (this.value / parseInt(this.max)) * 100;
                var children = this.parentNode.childNodes[1].childNodes;
                children[1].style.width = value + "%";
                children[5].style.left = value + "%";
                children[7].style.left = value + "%";
                children[11].style.left = value + "%";
                children[11].childNodes[1].innerHTML = this.value;
                document.querySelector("#price-left").innerHTML = this.value;
            });
        document
            .querySelector("input[name=max_price]")
            .addEventListener("input", function () {
                this.value = Math.max(
                    this.value,
                    this.parentNode.childNodes[3].value - -1
                );
                let value = (this.value / parseInt(this.max)) * 100;
                var children = this.parentNode.childNodes[1].childNodes;
                children[3].style.width = 100 - value + "%";
                children[5].style.right = 100 - value + "%";
                children[9].style.left = value + "%";
                children[13].style.left = value + "%";
                children[13].childNodes[1].innerHTML = this.value;
                document.querySelector("#price-right").innerHTML = this.value;
            });

        // Trigger event on load
        inputs.forEach((input) => {
            input.dispatchEvent(new Event("input", { bubbles: true }));
        });
    }

    // /* Go back */
    // const backBtn = document.querySelector(".go-back");
    // if (backBtn) {
    //   backBtn.addEventListener("click", () => {
    //     history.back();
    //   });
    // }

    /* NOTIF */
    const notif = document.querySelector(".baz-notif");
    if (notif) {
        setTimeout(() => {
            notif && notif.remove();
        }, 10000);
    }
    // const closeNotif = document.querySelector(".notif-close");
    // if (closeNotif) {
    //   closeNotif.addEventListener("click", (e) => {
    //     const toDel = e.target.closest(".notif");
    //     if (toDel) toDel.remove();
    //   });
    // }

    /* MOBILE MENU */
    // const menuToggler = document.querySelector(".menu-toggler");
    // const mobileMenu = document.querySelector(".nav-mobile");
    // if (menuToggler && mobileMenu) {
    //   menuToggler.addEventListener("click", (e) => {
    //     mobileMenu.classList.toggle("open");
    //   });
    // }

    /* PRODUCT HISTORY */
    // function addToLocalStorage(id, name, picture, price) {
    //   const prevHistory = JSON.parse(localStorage.getItem("prodHistory")) || [];
    //   if (!id || !name || !picture || !price) {
    //     return;
    //   }
    //   let exists;
    //   prevHistory.forEach((el) => {
    //     if (el.id === id) exists = true;
    //   });
    //   if (!exists) {
    //     prevHistory.push({
    //       id,
    //       name,
    //       picture,
    //       price,
    //     });
    //   }
    //   if (prevHistory && prevHistory.length > 24) {
    //     prevHistory.shift();
    //   }

    //   localStorage.setItem("prodHistory", JSON.stringify(prevHistory));
    // }
    // const prodEl = document.querySelector("#product-info");
    // if (prodEl) {
    //   const { id, name, picture, price } = prodEl.dataset;
    //   addToLocalStorage(id, name, picture, price);
    // }

    // const prodHist = document.querySelector("#product-history");
    // if (prodHist) {
    //   let outPut = "";
    //   const myHistory = JSON.parse(localStorage.getItem("prodHistory")) || [];
    //   if (myHistory && myHistory.length > 0) {
    //     myHistory.reverse();
    //     myHistory.forEach((el) => {
    //       outPut += `
    //         <a href="/product.php?id=${el.id}" class="product link-unstyled">
    //             <div class="product-img">
    //                 <img src="${el.picture}" alt="${el.name}">
    //             </div>
    //             <div class="product-body">
    //                 <div class="product-body-left">
    //                     <span class="title">${el.name}</span>
    //                 </div>
    //                 <div class="product-body-right">
    //                     <span class="price">$${el.price}</span>
    //                 </div>
    //             </div>
    //         </a>
    //       `;
    //     });
    //   } else {
    //     outPut += `
    //       No product in your history.
    //     `;
    //   }

    //   prodHist.innerHTML = outPut;
    // }
});
