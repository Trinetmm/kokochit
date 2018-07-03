 <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
    <div class="category-description std">
      <div class="slider-items-products">
        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
            
            <!-- Item -->
            <div class="item"> <a href="#x"><img alt="" src="images/cat-slider-img1.jpg"></a>
              <div class="inner-info">
                <div class="cat-img-title"> <span>Up To 20% Off Decor</span>
                  <h2 class="cat-heading"><strong>Vintage Casual</strong></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <a class="info" href="#">Shop Now</a> </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#x"><img alt="" src="images/cat-slider-img2.jpg"></a> </div>
            
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
    <div class="shop-inner">
      <div class="page-title">
        <h2>Clother</h2>
      </div>
      <div class="toolbar">
        <div class="view-mode">
          <ul>
            <li class="active"> <a href="shop_grid.html"> <i class="fa fa-th"></i> </a> </li>
            <li> <a href="shop_list.html"> <i class="fa fa-th-list"></i> </a> </li>
          </ul>
        </div>
        <div class="sorter">
          <div class="short-by">
            <label>Sort By:</label>
            <select>
              <option selected="selected">Position</option>
              <option>Name</option>
              <option>Price</option>
              <option>Size</option>
            </select>
          </div>
          <div class="short-by page">
            <label>Show:</label>
            <select>
              <option selected="selected">18</option>
              <option>20</option>
              <option>25</option>
              <option>30</option>
            </select>
          </div>
        </div>
      </div>
      <div class="product-grid-area">
        <ul class="products-grid">
          @foreach($products as $product)
          <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
            <div class="product-item">
              <div class="item-inner">
                <div class="product-thumb has-hover-img">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="icon-new-label new-right"><span>New</span></div>
                  <figure> <a href="single_product.html"><img src="{{asset('images/products').'/'.$product->images[0]->path}}" alt=""></a> <a class="hover-img" href="#"><img src="{{asset('images/products').'/'.$product->images[1]->path}}" alt=""></a></figure>
                  <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">{{$product->name}} </a></h4> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">{{$product->price}}</span> </span> </div>
                      </div>
                      <div class="pro-action">
                        <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="pagination-area ">
        <ul>
          <li><a class="active" href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>