@extends('layouts.master')

@section('content')

      <!-- Page Title (Light)-->
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Categories</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Shop categories</h1>
          </div>
        </div>
      </div>
      <div class="container pb-4 pb-sm-5">
        <!-- Categories grid-->
        <div class="row pt-5">
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/01.jpg" alt="Clothing"></a>
              <div class="card-body">
                <h2 class="h5">Clothing</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Blazers &amp; Suits</a><span class="fs-ms text-muted">235</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Blouse</a><span class="fs-ms text-muted">410</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cardigans &amp; Jumpers</a><span class="fs-ms text-muted">107</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Dresses</a><span class="fs-ms text-muted">93</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Hoodie &amp; Sweatshirts</a><span class="fs-ms text-muted">93</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sportswear</a><span class="fs-ms text-muted">65</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">2,548</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/02.jpg" alt="Shoes"></a>
              <div class="card-body">
                <h2 class="h5">Shoes</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Pumps &amp; High Heels</a><span class="fs-ms text-muted">247</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Ballerinas &amp; Flats</a><span class="fs-ms text-muted">156</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sandals</a><span class="fs-ms text-muted">310</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sneakers</a><span class="fs-ms text-muted">402</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Boots</a><span class="fs-ms text-muted">393</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Flip Flops</a><span class="fs-ms text-muted">116</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,953</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/03.jpg" alt="Gadgets"></a>
              <div class="card-body">
                <h2 class="h5">Gadgets</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Smartphones &amp; Tablets</a><span class="fs-ms text-muted">436</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Headphones</a><span class="fs-ms text-muted">308</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Wearable Electronics</a><span class="fs-ms text-muted">195</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Home IoT Gadgets</a><span class="fs-ms text-muted">82</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Computers &amp; Accessories</a><span class="fs-ms text-muted">264</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cameras, Photo &amp; Video</a><span class="fs-ms text-muted">57</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,240</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/04.jpg" alt="Furniture"></a>
              <div class="card-body">
                <h2 class="h5">Furniture &amp; Decor</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Lounge Seating</a><span class="fs-ms text-muted">374</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>File Cabinets</a><span class="fs-ms text-muted">83</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Tables</a><span class="fs-ms text-muted">125</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Indoor Lighting</a><span class="fs-ms text-muted">291</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Office Chairs</a><span class="fs-ms text-muted">118</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Adjustable Height Desks</a><span class="fs-ms text-muted">46</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">960</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/05.jpg" alt="Accessories"></a>
              <div class="card-body">
                <h2 class="h5">Accessories</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Bags</a><span class="fs-ms text-muted">417</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sunglasses</a><span class="fs-ms text-muted">382</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Watches</a><span class="fs-ms text-muted">122</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Hats</a><span class="fs-ms text-muted">204</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Jewelry</a><span class="fs-ms text-muted">149</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cosmetics</a><span class="fs-ms text-muted">90</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,532</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html"><img class="d-block w-100" src="img/shop/categories/06.jpg" alt="Entertainment"></a>
              <div class="card-body">
                <h2 class="h5">Entertainment</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Video Games, VR</a><span class="fs-ms text-muted">306</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Kid's Toys</a><span class="fs-ms text-muted">231</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Table Games</a><span class="fs-ms text-muted">114</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Outdoor / Camping</a><span class="fs-ms text-muted">92</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Gifts</a><span class="fs-ms text-muted">27</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Music, CDs &amp; Vinyl</a><span class="fs-ms text-muted">41</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">879</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Popular brands-->
        <h2 class="h3 text-center py-4 mt-md-3">Popular brands</h2>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/01.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/02.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/03.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/04.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/05.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/06.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/07.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/08.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/09.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/10.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/11.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/12.png" width="150" alt="Brand"></a></div>
        </div>
      </div>

    
@endsection