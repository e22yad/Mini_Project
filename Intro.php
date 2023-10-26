

<html>

<head>
<link rel="stylesheet" href="Intro.css">
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('car10.jpg')no-repeat;
    background-size: cover;
    background-position: center;
    background-color:black;   
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
</head>
<body>
    <div class="frame">
        <h1 style="color:white; text-align:center;"> Welcome Dear Coustomer</h1>
        <p style=" color:white; text-align:center;">Get Ready to Hit the Road  Welcome to our company for intel cars!.</p>
        <div class="centered-link">
        <a href="carR.html">Main Page</a>
        
        </div>
        
    </div>
    <div class="frame2">
    <section class="container2" >
        <form action="RentEla.html">
        <div class="Card">
            <div class="Card-imge car-1"></div>
              <h1>Elantra</h1>
              <br><br> &#160;
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
           <form action="RentGtr.html">
        <div class="Card">
            <div class="Card-imge car-2"></div>
              <h1>GTR</h1>
              <br><br> &#160;
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
               <form action="RentSo.html">
        <div class="Card">
            <div class="Card-imge car-3"></div>
              <h1>Subaru</h1>
              <br><br> &#160;
              <button action="carR.html">
    <span class="circle1"></span>
    <span class="circle2"></span>
    <span class="circle3"></span>
    <span class="circle4"></span>
    <span class="circle5"></span>
    <span class="text">Rent</span>
</button>
        </div>
    </form>
        
    </section>

</body>
</html>

