<div class="col-md-3">
    <a href="{{ url('productdetail/'.$product->ProductID) }}" style="text-decoration: none; color: black;">
        <div class="card">
            <img src="{{ asset('storage/assets/'.$product->productimage) }}" class="card-img-top" style="height: 300px">
            <div class="card-body">
            <h5 class="card-title">{{ $product->productname }}</h5>
            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5" disabled/>
                <label for="star5"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" disabled/>
                <label for="star4half" class="half"></label>
                <input type="radio" id="star4" name="rating" value="4" disabled/>
                <label for="star4"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" disabled/>
                <label for="star3half" class="half"></label>
                <input type="radio" id="star3" name="rating" value="3" disabled/>
                <label for="star3"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" disabled/>
                <label for="star2half" class="half"></label>
                <input type="radio" id="star2" name="rating" value="2" disabled/>
                <label for="star2"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" disabled/>
                <label for="star1half" class="half"></label>
                <input type="radio" id="star1" name="rating" value="1" disabled/>
                <label for="star1"></label>
              </div>
            <p class="card-text">${{ $product->productprice }} USD</p>
            </div>
        </div>
    </a>
</div>
