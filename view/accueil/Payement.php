<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<style>
    @font-face {
        font-family: 'Cera-Pro' ;
        src: url("../../resources/font/Cera-Pro.otf");
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body{
        width: 100%;
        height: 100vh;
        /*display: flex;
        justify-content: center;
        align-items: center;*/
        background-color: whitesmoke;
        font-family:"Cera-Pro",Serif;
    }

    .container{
        width: 750px;
        height: 500px;
        border-radius: 20px;
        background-color: white;
        display: flex;
        flex-direction: column;
        padding: 40px;
        justify-content:space-around;
        box-shadow: 10px 10px 10px darkgray;
    }

    .container h1{
        text-align: center;
    }

    .first-row{
        display: flex;
    }

    .owner{
        width: 100%;
        margin-right: 40px;
    }

    .input-field{
        border: 1px solid #999;
    }

    .input-field input{
        width: 100%;
        border:none;
        outline: none;
        padding: 10px;
    }

    .selection{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .selection select{
        padding: 10px 20px;
    }

    a{
        background-color: #E85852FF;
        color: white;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        padding: 10px;
        font-size: 18px;
        transition: 0.5s;
    }

    a:hover{
        background-color: #E85852FF;
    }

    .cards img{
        width: 100px;
    }
    .logo{
        text-align: center;
    }
    .logo img{
        width: 500px;
        margin-left: 25%;
        margin-top: 30%;


    }
    .logo p{
        font-weight: bold;
        font-size: 2vh;
        position: absolute;
        top:38%;
        left:45%;
    }

</style>
<div>
<div class="logo d-flex flex-column">
    <img src="../../resources/logo/intro.png" /><br/>
     <p>Saf<i style="color:#E85852FF ">E</i>at</p>
</div>
<div class="container">
    <h1>Confirm Your Payment</h1>
    <div class="first-row">
        <div class="owner">
            <h3>Owner</h3>
            <div class="input-field">
                <input type="text" placeholder="Name">
            </div>
        </div>
        <div class="cvv">
            <h3>CVV</h3>
            <div class="input-field">
                <input type="password" placeholder="***">
            </div>
        </div>
    </div>
    <div class="second-row">
        <div class="card-number">
            <h3>Card Number</h3>
            <div class="input-field">
                <input type="text" placeholder="** **** ****** ****">
            </div>
        </div>
    </div>
    <div class="third-row">
        <h3>Card Number</h3>
        <div class="selection">
            <div class="date">
                <select name="months" id="months">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select name="years" id="years">
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                </select>
            </div>
            <div class="cards">
                <img src="../../resources/assets/img/mc.png" alt="">
                <img src="../../resources/assets/img/vi.png" alt="">
                <img src="../../resources/assets/img/pp.png" alt="">
            </div>
        </div>
    </div>
    <a href="">Confirm</a>
</div>
</div>
</body>
</html>