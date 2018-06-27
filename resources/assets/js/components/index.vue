<template>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h6 >Market</h6>
          <div class="list-group">
            <a href="/building" class="list-group-item">Building Designs</a>
            <a href="/hardwares" class="list-group-item">Hardwares</a>
            <a href="/furnitures" class="list-group-item">Furnitures</a>
            <a href="/sliding" class="list-group-item">Sliding Door Designs</a>
            <a href="/garden" class="list-group-item">Home & Garden Landscaping</a>
            <a href="/decoration" class="list-group-item">Decoration Design</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" 
                src="http://wcgadlogic.com/wp-content/uploads/2014/07/bogner-900x350.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" 
                src="https://www.bluehorizonprints.com.au/wp-content/uploads/ads%20-%202/banner%20(1).jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" 
                src="https://www.stmichaelshotel.co.uk/wp-content/uploads/2017/06/St-Michaels-Web-Landing-Banner-1-900x350.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="#">Item One</a>
                  </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

</template>

<script>
export default {
  data() {
    return {
      
        linkS: [
          '/building',
          '/hardwares',
          '/furnitures',
          '/slidingdoordesigns',
          '/homegardenlandscaping',
          '/decorationdesign'
        ],
        titleS: [
          'Building Designs',
          'Hardwares',
          'Furnitures',
          'Sliding Door Designs',
          'Home & Garden Landscaping',
          'Decoration Design'
        ]
      
    }
  }
}
</script>

<style scoped>
body {
  padding-top: 54px;
}

@media (min-width: 992px) {
  body {
    padding-top: 56px;
  }
}
</style>
