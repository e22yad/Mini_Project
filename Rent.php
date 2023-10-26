<?php
    
?>
<html>
<head>
    <link rel="stylesheet" href="Rent.css">
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /*background: url('car10.jpg')no-repeat;*/
    background-size: cover;
    background-position: center;
    background-color:cyan;   
}
    .frame {
    width: 50%;
    margin: 100px auto;
    border: 2px solid #000;
    padding: 20px;
    background-color: tranparnt;
    border-radius: 20px;
    backdrop-filter: blur(20px);
    
    }
    .frame2 {
        position: absolute;
    bottom: -550px;
    
    width: 1000;
    margin: 20 ;
   
    padding: 20px 21px;
   
    
    }
    
        
   .card{
    background-color: rgb(74, 78, 159);
    width: 270px;
    height: 300px;
    margin: 10px;
    border-radius: 16px;
}
            .card:hover{
  background-color: rgb(27,27,27);
color: white;
cursor: pointer;
transform: scale(1.03);
transition: all 1s ease;

}
.card:hover::before {
transform: skewX(30deg) translate(150%, -50%);
transition-delay: 0.1s;
}

.card:active {
transform: scale(0.9);
}
    .centered-link {
    text-align: center;
}
 </style>
 <script>
function calculateRent() {
   const selectedCar = document.querySelector('input[name="car"]:checked');
   const daysInput = document.getElementById('rentDays');
   const priceDisplay = document.getElementById('priceDisplay');

            if (selectedCar && daysInput.value !== '') {
                const carName = selectedCar.value;
                const days = parseInt(daysInput.value);
                let price = 0;

                // Define the daily rental prices for each car (you can set your own prices)
                const carPrices = {
                    Elantra: 50,
                    Cressida: 60,
                    Subaru: 70,
                    Caprice: 80
                };

                if (carPrices[carName]) {
                    price = carPrices[carName] * days;
                }

                priceDisplay.textContent = `Total Price: $${price}`;
            }
        }
    </script>
</head>
<body>
    <!-- Your existing HTML content here -->
    <form action="CarR.html">
        <div class="Card">
            <input type="radio" name="car" value="Elantra"> Elantra
            <div class="Card-image car-1"></div>
            <h1>Elantra</h1>
            <br><br>&#160;
            <button>
                <span class="circle1"></span>
                <span class="circle2"></span>
                <span class="circle3"></span>
                <span class="circle4"></span>
                <span class="circle5"></span>
                <span class="text">Rent</span>
            </button>
        </div>
    </form>
    
    <!-- Add similar forms for other cars -->
    
    <label for="rentDays">Number of Days: </label>
    <input type="number" id="rentDays" onchange="calculateRent()">
    <p id="priceDisplay">Total Price: $0</p>
</body>
</html>
