<template>
<div class="container">
  <div class="card-columns d-flex justify-content-center">
    <div class="card m-2 mt-5 justify-content-center">
      <img class="card-img-top" src="https://shopperscritique.com/wp-content/uploads/2015/07/happy-700x335.jpg" alt="Profile">
      <div class="card-block ">
        <h4 class="card-title">Customer
            <br /><span class="description">I want building designs and materials.</span>
        </h4>
        
        <div class="form-row text-center">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary mb-3"
                data-toggle="modal" data-target="#customer">Register</button>
            </div>
        </div>
      </div>
    </div>

    <!-- Customer Modal -->
    <div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <img :src="image_src" width="45px">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form class="form-signin"> 
                        <h5 class="modal-title form-signin-heading" id="exampleModalCenterTitle">Register to Senebu</h5>
                    <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register Now</button>   
                    </form>
            </div>
            <div class="modal-footer ">
                <small>By clicking "Register Now" I agree to 
                    <span class="footmodal">Senebu Privacy Policy</span>
                </small>
            </div>
            </div>
        </div>
    </div>

    <div class="card m-2 mt-5 justify-content-center">
      <img class="card-img-top" src="https://thumbs.dreamstime.com/b/happy-architect-ok-sign-12495467.jpg" alt="Profile">
      <div class="card-block ">
        <h4 class="card-title">Architect
            <br /><span class="description">I want to sell my building designs.</span>
        </h4>
        <div class="form-row text-center">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary mb-3"
                data-toggle="modal" data-target="#architect">Register</button>
            </div>
        </div>
      </div>
    </div>

    <!-- Architect Modal -->
    <div class="modal fade" id="architect" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <img :src="image_src" width="45px">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form class="form-signin"> 
                        <h5 class="modal-title form-signin-heading" id="exampleModalCenterTitle">Register to Senebu</h5>
                    <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register Now</button>   
                    </form>
            </div>
            <div class="modal-footer ">
                <small>By clicking "Register Now" I agree to 
                    <span class="footmodal">Senebu Privacy Policy</span>
                </small>
            </div>
            </div>
        </div>
    </div>
    
  </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                image_src: '/image/logo4.png'
            }
        }
         
    }
</script>

<style scoped>
.footmodal {
    color: teal !important;
}

h4 {
    text-align: center;
    margin-top: 15px;
}

.card-img-top {
    width: 100%;
    height: 20vw;
    object-fit: cover;
}

.description {
    font-size: 0.7em;
}

body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
