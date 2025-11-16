  
const toppingsContainer = document.getElementById('toppings-container');
const priceSpan = document.getElementById('price');
const addToCartBtn = document.getElementById('add-to-cart');

const toppingImages = {
  tomato: './images/customize/tomato.png',
  mushrooms: './images/customize/mushrooms.png',
  onion: './images/customize/onion.png',
  Artichoke_hearts: './images/customize/Artichoke_hearts.png',
  Bell_peppers: './images/customize/Bell_peppers.png',
  Broccoli: './images/customize/Broccoli.png',
  Eggplant: './images/customize/Eggplant.png',
  Jalapenos: './images/customize/Jalapenos.png',
  Pineapple: './images/customize/Pineapple.png',
  Roasted_red_peppers: './images/customize/Roasted_red_peppers.png',
  Spinach: './images/customize/Spinach.png',
  Sun_dried_tomatoes: './images/customize/Sun-dried_tomatoes.png',
  Zucchini: './images/customize/Zucchini.png',
  Mozzarella: './images/customize/Zucchini.png',
  Goat_cheese: './images/customize/Zucchini.png',
  Feta: './images/customize/Zucchini.png',
  Pesto: './images/customize/Zucchini.png',
  Walnuts: './images/customize/Zucchini.png',
  Pine_nuts: './images/customize/Zucchini.png',
  Caramelized_onions: './images/customize/Zucchini.png',
  Garlic: './images/customize/Zucchini.png',
  Basil: './images/customize/Zucchini.png',
};

const toppingPrices = {
  tomato: 49,
  mushrooms: 65,
  onion: 30,
  Artichoke_hearts: 88,
  Bell_peppers: 57,
  Broccoli: 69,
  Eggplant: 67,
  Jalapenos: 93,
  Pineapple: 65,
  Roasted_red_peppers: 67,
  Spinach: 55,
  Sun_dried_tomatoes: 98,
  Zucchini: 83,
  Mozzarella: 110,
  Goat_cheese: 160,
  Feta: 175,
  Pesto: 189,
  Walnuts: 140,
  Pine_nuts: 161,
  Caramelized_onions: 120,
  Garlic: 80,
  Basil: 118
};

let selectedToppings = [];
let basePrice = 89;

function getRandomCircularPosition(radius = 140) {
  const angle = Math.random() * 2 * Math.PI;
  return {
    x: radius * Math.cos(angle),
    y: radius * Math.sin(angle),
  };
}

function renderToppings() {
  toppingsContainer.innerHTML = '';
  selectedToppings.forEach(type => {
    for (let i = 0; i < 5; i++) {
      const { x, y } = getRandomCircularPosition();
      const img = document.createElement('img');
      img.src = toppingImages[type] || './images/Zucchini.png';
      img.className = 'topping';
      img.style.left = `calc(50% + ${x}px - 30px)`;
      img.style.top = `calc(50% + ${y}px - 30px)`;
      toppingsContainer.appendChild(img);
    }
  });
}

function calculateTotalPrice() {
  let total = basePrice;
  selectedToppings.forEach(topping => {
    total += toppingPrices[topping] || 0;
  });
  priceSpan.textContent = total;
}

document.querySelectorAll('.card').forEach(card => {
  const topping = card.dataset.topping;
  const button = card.querySelector('.toggle-btn');

  button.addEventListener('click', () => {
    if (selectedToppings.includes(topping)) {
      selectedToppings = selectedToppings.filter(t => t !== topping);
      button.textContent = 'Add';
      button.classList.remove('remove');
    } else {
      selectedToppings.push(topping);
      button.textContent = 'Remove';
      button.classList.add('remove');
    }
    renderToppings();
    calculateTotalPrice();
  });
});

addToCartBtn.addEventListener('click', () => {
  if (selectedToppings.length === 0) {
    alert('Please select at least one topping!');
    return;
  }
  alert(`Your Pizza:\nToppings: ${selectedToppings.join(', ')}\nTotal: ₹${priceSpan.textContent}`);
});

function goBack() {
  window.history.back();
}

let cartCount = 0;
const cartCounter = document.getElementById('cartCount');

addToCartBtn.addEventListener('click', () => {
  if (selectedToppings.length === 0) {
    alert('Please select at least one topping!');
    return;
  }
  cartCount++;
  cartCounter.textContent = cartCount;
});

document.getElementById('checkoutButton').addEventListener('click', () => {
  if (cartCount === 0) {
    alert("Your cart is empty!");
  } else {
    alert(`You have ${cartCount} pizza(s) in your cart! Proceeding to checkout...`);
    window.location.href = 'payment.php';
  }
});


let toppingCount = 0;
const toppingCounter = document.getElementById("toppingCount");

// Select all Add To Topping buttons
document.querySelectorAll(".add-topping-btn").forEach(button => {
    button.addEventListener("click", function(e) {
        e.preventDefault();
        toppingCount++;
        toppingCounter.textContent = toppingCount;
    });
});
