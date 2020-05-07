/* Function that gets called when an item is added to the cart */

const added = () => {
  let timerInterval;
  Swal.fire({
    title: "Item added to the Cart",
    imageUrl: "../assets/img/shopping-bag.gif",
    imageWidth: 90,
    imageHeight: 90,
    timer: 1200,
    showConfirmButton: false,
    onBeforeOpen: () => {
      timerInterval = setInterval(() => {
        const content = Swal.getContent();
        if (content) {
          const b = content.querySelector("b");
          if (b) {
            b.textContent = Swal.getTimerLeft();
          }
        }
      }, 100);
    },
    onClose: () => {
      clearInterval(timerInterval);
    },
  }).then((result) => {
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log("I was closed by the timer");
    }
  });
};
