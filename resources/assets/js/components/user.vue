<template>
<div class="container">
  <div class="card-columns d-flex justify-content-center">
    <div class="card m-2 mt-5 justify-content-center">
      <img class="card-img-top" src="https://shopperscritique.com/wp-content/uploads/2015/07/happy-700x335.jpg" alt="Profile">
      <div class="card-block ">
        <h4 class="card-title">Customer</h4>
        <div class="form-row text-center">
            <div class="col-12">
                <a href="/register">
                    <button type="button" class="btn btn-outline-primary mb-3">Register</button>
                </a>
            </div>
        </div>
      </div>
    </div>

    <div class="card m-2 mt-5 justify-content-center">
      <img class="card-img-top" src="https://thumbs.dreamstime.com/b/happy-architect-ok-sign-12495467.jpg" alt="Profile">
      <div class="card-block ">
        <h4 class="card-title">Architect</h4>
        <div class="form-row text-center">
            <div class="col-12">
                <a href="/architect">
                    <button type="button" class="btn btn-outline-primary mb-3">Register</button>
                </a>
            </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
</template>

<script>
    export default {
      
    }
</script>

<style scoped>
h4 {
    text-align: center;
    margin-top: 15px;
}

.card-img-top {
    width: 100%;
    height: 20vw;
    object-fit: cover;
}
</style>
