<template>
<div>
<div class="split left">
    <img src="/image/register.jpg" class="imagecover">
    <h1 class="lead tagline">Select, Negotiate & Build </h1>
</div>

<div class="split right container">
  <div class="centered card col-8 borderless">
    <form class="form-signin"> 
        <img src="/image/logo2.png" width="200px" class="mb-4 img-fluid">
        <input type="text" class="form-control mb-2" name="email" placeholder="Email Address" required="" autofocus=""/>
        <input type="password" class="form-control mb-2" name="password" placeholder="Password" required=""/>
    <button class="btn btn-lg btn-primary btn-block mb-4 lead" type="submit">Login</button> 
    <small>By clicking "Log In" I agree to 
        <span class="footmodal">Senebu Privacy Policy</span>
    </small>  
    </form>
  </div>
</div>

</div>



</template>
    

<style scoped>
.tagline {
    top: 50% !important;
    left: 45% !important;
    position: absolute;
    color: #ddd;
    text-shadow: 1px 1px 4px #444;
    font-size: 180% !important;   
}
.footmodal {
    color: #3b5998;
}
.btn-primary {
    background-color: #3b5998;
    border: #3b5998;
    box-shadow: 1px 1px 8px #444;
}
.btn-primary:hover {
    background-color: #5c75aa;
}
h1 {
    font-size: 1.8em;
}
h1, p {
    color: #ddd;     
}
.imagecover {
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}

.split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    overflow-y: auto;
}

.left {
    left: 0;
    background-color: #fff;
}

.right {
    right: 0;
    background-color: #fff;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.borderless {
    border: #fff !important;
}

</style>
