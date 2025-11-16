<?php 
session_start();
include("./php/r_header.php");
include("connect.php");

// If pizza base details are in GET, save to session
if(isset($_GET['c_cat_id'], $_GET['c_cat_name'], $_GET['c_cat_price'])) {
    $_SESSION['pizza_base'] = [
        'c_cat_id' => $_GET['c_cat_id'],
        'c_cat_name' => $_GET['c_cat_name'],
        'c_cat_price' => $_GET['c_cat_price'],
        'image' => $_GET['c_cat_photo'] ?? '',
        'description' => $_GET['c_cat_description'] ?? '',
        'toppings' => [],
        'total_price' => $_GET['c_cat_price']
    ];
}

// Base price for JS
$basePrice = isset($_SESSION['pizza_base']['c_cat_price']) ? floatval($_SESSION['pizza_base']['c_cat_price']) : 0;
?>

<section class="ftco-section" style="padding:4px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4"><strong>Select Your Toppings</strong></h2>
        <p>“Good friends, great times, and even better pizza — happiness in every slice.”</p>
      </div>
    </div>
    <div class="row d-flex">
      <?php
      $q = "SELECT * FROM customize_sub_cat_tbl";
      $res1 = mysqli_query($cn, $q);
      while($row = mysqli_fetch_assoc($res1)) {
      ?>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <div style="background-image: url('<?php echo $row['c_sub_cat_photo']; ?>'); width:300px; height:300px; background-size:cover;"></div>
          <div class="text py-4 d-block">
            <h3 class="heading mt-2"><?php echo $row['c_sub_cat_name']; ?></h3>
            <h2 class="heading mt-2">Price: ₹<?php echo $row['c_sub_cat_price']; ?></h2>
            <p><?php echo $row['c_sub_cat_discription']; ?></p>
            <p>
              <a href="#" 
                 class="btn btn-primary p-3 px-xl-4 py-xl-3 add-topping-btn"
                 data-id="<?php echo $row['c_sub_cat_id']; ?>"
                 data-name="<?php echo $row['c_sub_cat_name']; ?>"
                 data-price="<?php echo $row['c_sub_cat_price']; ?>">
                 Add To Topping
              </a> 
            </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Floating Cart -->
<div id="floatingAddBtn" style="position:fixed; bottom:20px; right:20px; background:#fff; padding:15px; border:1px solid #ccc; border-radius:10px; width:250px; z-index:999;">
   <h5>Toppings (<span id="toppingCount">0</span>)</h5>
   <ul id="toppingList"></ul>
   <p id="totalPrice" style="font-weight:bold;">Total Price: ₹<?php echo number_format($basePrice,2); ?></p>
   <button id="nextBtn" class="btn btn-success w-100 mt-2">Next ➡</button>
</div>

<script>
let selectedToppings = [];
const toppingCounter = document.getElementById("toppingCount");
const toppingList = document.getElementById("toppingList");
const nextBtn = document.getElementById("nextBtn");
let basePrice = <?php echo $basePrice; ?>;

document.querySelectorAll(".add-topping-btn").forEach(button => {
    button.addEventListener("click", function(e) {
        e.preventDefault();
        let id = this.dataset.id;
        let name = this.dataset.name;
        let price = parseFloat(this.dataset.price);
        if (!selectedToppings.find(t => t.id === id)) selectedToppings.push({id,name,price});
        updateFloatingButton();
    });
});

function removeTopping(index){
    selectedToppings.splice(index,1);
    updateFloatingButton();
}

function updateFloatingButton(){
    toppingCounter.textContent = selectedToppings.length;
    toppingList.innerHTML = '';
    let toppingsTotal = 0;
    selectedToppings.forEach((t,i)=>{
        toppingsTotal += t.price;
        toppingList.innerHTML += `<li>${t.name} (₹${t.price}) <button onclick="removeTopping(${i})" style="color:red;border:none;background:none;">x</button></li>`;
    });
    document.getElementById("totalPrice").textContent = "Total Price: ₹" + (basePrice + toppingsTotal).toFixed(2);
}

nextBtn.addEventListener("click", function(){
    fetch("save_toppings.php", {
        method:"POST",
        headers: {"Content-Type":"application/json"},
        body: JSON.stringify(selectedToppings)
    })
    .then(res=>res.json())
    .then(data=>{
        if(data.status==="success"){
            window.location.href="customize.php";
        } else {
            alert("Error saving toppings");
        }
    });
});

updateFloatingButton();
</script>

<?php include("./php/footer.php"); ?>
