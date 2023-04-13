    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
        <link rel="website icon" type="png" href="img/Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suits</title>
    </head>
    <body>
    <?php include 'nav.php'; ?>
    <section>
          <section>
<aside>
    <h2 id="h2">Filters</h2>
  <br>
  <label>
    <label for="brand">Merk</label>
    <select id="brand" name="brand">
     <option value="alles">All</option>
                    <option value="Thom Browne">Thom Browne</option>
                    <option value="Hugo Boss">Hugo Boss</option>
                    <option value="Suitsupply">Suitsupply</option>
                    <option value="Todd Snyder">Todd Snyder</option>
                    <option value="J. Crew">J. Crew</option>
                    <option value="Paul Smith">Paul Smith</option>
    </select>
  </label>
    <label for="color">Color</label>
    <select id="color" name="color">
                    <option value="all">All</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="Black ">Black </option>
                    <option value="Navy Blue">Navy Blue</option>
                    <option value="Charcoal Gray">Charcoal Gray</option>
                    <option value="Dark Brown">Dark Brown</option>
                    <option value="Tan ">Gray</option>
    </select>
  </label> 
 
  <label for="style">Style</label>
        <select id="style" name="style">
      <option value="">All</option>
      <option value="classic">Classic</option>
      <option value="modern">Modern</option>
      <option value="slim">Slim</option>
    </select>
  </label>
  <br>
  
    
    <label for="material">Material</label>
        <select id="material" name="material">
      <option value="">All</option>
      <option value="wool">Wool</option>
      <option value="cotton">Cotton</option>
      <option value="linen">Linen</option>
    </select>
  </label>
  <br>
  
     <label>
    <input type="checkbox" name="size[]" value="s"> S
  </label>
  <label>
    <input type="checkbox" name="size[]" value="m"> M
  </label>
  <label>
    <input type="checkbox" name="size[]" value="l"> L
  </label>
  <br>
  <label>
   
  <br>
  <label for="price">Price Range</label>
                <input type="range" id="price" name="price" min="99" max="600">
  <br>
      <span id="price-value"></span>
      <button>Apply Filters</button>
  </aside>
</section>
<main class="producten_main">
                <div class="products">
                    <div class="section_suits">
                        <a href="shop1.php"><img src="img/pak1.jpg" class="producten"></a>
                        <h3 id="h3">Classic Thom Browne Charcoal Gray Suit </h3>
                        <p></p>
                        <span>€189,99</span>
                    </div>
                        <div class="section_suits">
                            <a href="shop1.php"><img src="img/pak2.jpg" class="producten"></a>
                            <h3 id="h3">Classic Hugo Boss Blue Suit</h3>
                            <p></p>
                            <span>€289,99</span>
                        </div>

                            <div class="section_suits">
                                <a href="shop1.php"><img src="img/pak3.webp" class="producten"></a>
                                <h3 id="h3">Slim Paul Smith Red Suit </h3>
                                <p></p>
                                <span>€200,99</span>
                            </div>

                                <div class="section_suits">
                                    <a href="shop1.php"><img src="img/20.webp" class="producten"></a>
                                    <h3 id="h3">Modern Suitsupply Gray Suit</h3>
                                    <p></p>
                                    <span>€198,00</span>
                                </div>

                                    <div class="section_suits">
                                        <a href="shop1.php"><img src="img/pak7.webp" class="producten"></a>
                                        <h3 id="h3">Classic J. Crew Gray Suit</h3>
                                        <p></p>
                                        <span>€200,00</span>
                                    </div>
                                            <div class="section_suits">
                                                <a href="shop1.php"><img src="img/pak6.webp" class="producten"></a>
                                                <h3 id="h3">Classic Hugo Boss Black Suit</h3>
                                                <p></p>
                                                <span>€289,99</span>
                                            </div>
                                                        <div class="section_suits">
                                                            <a href="shop1.php"><img src="img/pak5.webp" class="producten"></a>
                                                            <h3 id="h3">Modern Paul Smith  Dark Brown Suit  </h3>
                                                            <p></p>
                                                            <span>€489,99</span>
                                                        </div>
                                                            <div class="section_suits">
                                                                <a href="shop1.php"><img src="img/pak8.jpg" class="producten"></a>
                                                                <h3 id="h3">Modern Suitsupply Black Suit</h3>
                                                                <p></p>
                                                                <span>€200,00</span>
                                                            </div>
                                                                <div class="section_suits">
                                                                    <a href="shop1.php"><img src="img/9.webp" class="producten"></a>
                                                                    <h3 id="h3">Classic J. Crew Blue Suit</h3>
                                                                    <p></p>
                                                                    <span>€389,99</span>
                                                                </div>
                                                                   <div class="section_suits">
                                                                        <a href="shop1.php"><img src="img/10.webp" class="producten"></a>
                                                                        <h3 id="h3">Slim Thom Browne Gray Suit </h3>
                                                                        <p></p>
                                                                        <span>€189,99</span>
                                                                    </div>
                                                                        <div class="section_suits">
                                                                            <a href="shop1.php"><img src="img/11.jpg" class="producten"></a>
                                                                            <h3 id="h3">Classic Paul Smith Light Blue Suit </h3>
                                                                            <p></p>
                                                                            <span>€189,99</span>
                                                                        </div>
                                                                            <div class="section_suits">
                                                                                <a href="shop1.php"><img src="img/12.jpg" class="producten"></a>
                                                                                <h3 id="h3"> Modern Suitsupply Black Suit</h3>
                                                                                <p></p>
                                                                                <span>€289,99</span>
                                                                            </div>
                                                                                <div class="section_suits">
                                                                                    <a href="shop1.php"><img src="img/13.jpg" class="producten"></a>
                                                                                    <h3 id="h3">Silm Hugo Boss Red Suit</h3>
                                                                                    <p></p>
                                                                                    <span>€389,99</span>
                                                                                </div>
                                                                                    <div class="section_suits">
                                                                                        <a href="shop1.php"><img src="img/14.jpg" class="producten"></a>
                                                                                        <h3 id="h3">Slim Todd Snyder Blue  Suit</h3>
                                                                                        <p></p>
                                                                                        <span>€489,99</span>
                                                                                    </div>
                                                        
                                                                                        <div class="section_suits">
                                                                                            <a href="shop1.php"><img src="img/15.webp" class="producten"></a>
                                                                                            <h3 id="h3">Modern J. Crew Blue Suit</h3>
                                                                                            <p></p>
                                                                                            <span>€299,99</span>
                                                                                        </div>
                                                                                            <div class="section_suits">
                                                                                                <a href="shop1.php"><img src="img/16.webp" class="producten"></a>
                                                                                                <h3 id="h3">Modern Paul Smith Green Suit</h3>
                                                                                                <p></p>
                                                                                                <span>€399,99</span>
                                                                                            </div>
                                                                                                <div class="section_suits">
                                                                                                    <a href="shop1.php"><img src="img/17.webp" class="producten"></a>
                                                                                                    <h3 id="h3">Silm Thom Browne Blue Suit</h3>
                                                                                                    <p></p>
                                                                                                    <span>€300,00</span>
                                                                                                </div>
                                                        
                                                                                                    <div class="section_suits">
                                                                                                        <a href="shop1.php"><img src="img/18.webp" class="producten"></a>
                                                                                                        <h3 id="h3">Silm Suitsupply Green Suit</h3>
                                                                                                        <p></p>
                                                                                                        <span>€189,99</span>
                                                                                                    </div>
                                                                                                        <div class="section_suits">
                                                                                                            <a href="shop1.php"><img src="img/19.webp" class="producten"></a>
                                                                                                            <h3 id="h3">Silm Todd Snyder Gray Suit</h3>
                                                                                                            <p></p>
                                                                                                            <span>€289,99</span>
                                                                                                        </div>
                                                        
                                                                                                            <div class="section_suits">
                                                                                                                <a href="shop1.php"><img src="img/pak4.jpg" class="producten"></a>
                                                                                                                <h3 id="h3"> Hugo Boss Lichtblue Suit</h3>
                                                                                                                <p></p>
                                                                                                                <span>€189,99</span>
                                                                                                            </div>
                                                        
                                                                                                                <div class="section_suits">
                                                                                                                    <a href="shop1.php"><img src="img/21.webp" class="producten"></a>
                                                                                                                    <h3 id="h3">Classic J. Crew Green Suit</h3>
                                                                                                                    <p></p>
                                                                                                                    <span>€189,99</span>
                                                                                                                </div>
                                                                                                                    <div class="section_suits">
                                                                                                                        <a href="shop1.php"><img src="img/22.jpg" class="producten"></a>
                                                                                                                        <h3 id="h3">Classic Paul Smith Black Suit</h3>
                                                                                                                        <p></p>
                                                                                                                        <span>€189,99</span>
                                                                                                                    </div>
                                                                                                                <div class="section_suits">
                                                                                                                    <a href="shop1.php"><img src="img/23.jpg" class="producten"></a>
                                                                                                                    <h3 id="h3">Classic Suitsupply Lichtblue Suit</h3>
                                                                                                                    <p></p>
                                                                                                                    <span>€289,99</span>
                                                                                                                </div>
                                                                                                            <div class="section_suits">
                                                                                                                <a href="shop1.php"><img src="img/24.jpg" class="producten"></a>
                                                                                                                <h3 id="h3">Modern Thom Browne Gray Suit</h3>
                                                                                                                <p></p>
                                                                                                                <span>€289,99</span>    
                                                                                                            </div> 
                                                                                                        <div class="section_suits">
                                                                                                            <a href="shop1.php"><img src="img/25.jpg" class="producten"></a>
                                                                                                                <h3 id="h3">Classic  Todd Snyder Black Suit</h3>
                                                                                                                <p></p>
                                                                                                                 <span>€389,99</span>
                                                                                                        </div>   
                                                                                                    <div class="section_suits">
                                                                                                        <a href="shop1.php"><img src="img/29.webp" class="producten"></a>
                                                                                                        <h3 id="h3">Modern Paul Smith Gray Suit</h3>
                                                                                                        <p></p>
                                                                                                        <span>€89,99</span>
                                                                                                    </div>
                                                                                                <div class="section_suits">
                                                                                                    <a href="shop1.php"><img src="img/19206-6654b-scaled.jpg" class="producten"></a>
                                                                                                    <h3 id="h3">Slim J. Crew Red - Lichtblue Suit</h3>
                                                                                                    <p></p>
                                                                                                    <span>€789,99</span>
                                                                                                </div>
                                                                                                <div class="section_suits">
                                                                                                        <a href="shop1.php"><img src="img/28.webp" class="producten"></a>
                                                                                                        <h3 id="h3">Classic Todd Snyder Green - Gray Suit</h3>
                                                                                                        <p></p>
                                                                                                        <span>€889,99</span>
                                                                                                    </div>

                </div>    
            </main>
        </section>
        <?php include 'footer.php'; ?>