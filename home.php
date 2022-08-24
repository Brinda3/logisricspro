<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript">
      (function (I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = { host: c, settings: s, clientId: k, cdn: L, queue: [] };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + "/client/inject-v2.min.js";
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function (a, b) {
          I.iticks.queue.push([a, b]);
        };
      })(
        window,
        "https://cdn-v1.intelliticks.com/prod/common",
        document,
        "script",
        "https://app.intelliticks.com",
        "WTzuhK56aRDWH8T4z_c",
        {}
      );
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logistics</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./Home/css/style.css" />
  </head>
  <body>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <div
      class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl"
    >
      <h3
        class="text-lg font-medium leading-6 text-gray-900"
        id="headlessui-dialog-title-30"
      >
        Please make a payment
      </h3>
      <div class="mt-2">
        <p class="text-sm text-gray-500">
          Click the below button to proceed with the payment.
        </p>
      </div>
    </div>
    <!-- header section starts  -->
    <header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>

      <a href="#" ><img href="logo.jpg"></a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">Services</a>
        <a href="#transportation">transportation</a>
        <a href="#contact">Book Now</a>
      </nav>

      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
      </div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Best Logistics</h3>
        <font color="orange"><h5>Efficient & Reliable Delivery</h5></font>
        <p><b>We Provide:-</b></p>
        <ul>
          <li>Managing your Fleet Appropriately</li>
          <li>Warehouse Management</li>
          <li>Convenient Cargo Tracking 24/7</li>
          <li>Elimination of Paperwork</li>
        </ul>
        <div class="pad_bottom">
          <a href="#products" class="btn">Services we offer</a>
        </div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading"><span> about </span> us</h1>

      <div class="row">
        <div class="video-container">
          <video src="./Home/images/about-vid.mp4" loop autoplay muted></video>
          <h3>Best Logistics</h3>
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>
            We help in increasing the demand for online deliveries, shorter
            delivery cycles, growing competition, shrinking margins and ensuring
            better & efficient customer service.
          </p>
          <p>
            We work based on the convenience of the customers by :- Reducing
            Delivery Time and Сosts, Giving Real-Time Updates on Effective
            Warehouse Management & Monitor the Location of Vehicle, Speeding Up
            the Whole Process, Smart Order & Entry Checking Of Vehicles.
          </p>
          <a href="#transportation" class="btn">learn more</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">
      <div class="icons">
        <img src="./Home/images/icon-1.png" alt="" />
        <div class="info">
          <h3>fast delivery</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="./Home/images/icon-2.png" alt="" />
        <div class="info">
          <h3>10 days returns</h3>
          <span>moneyback guarantee</span>
        </div>
      </div>

      <div class="icons">
        <img src="./Home/images/icon-3.png" alt="" />
        <div class="info">
          <h3>Exciting Coupons</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="./Home/images/icon-4.png" alt="" />
        <div class="info">
          <h3>secure payments</h3>
          <span>protected by paypal</span>
        </div>
      </div>
    </section>

    <!-- icons section ends -->

    <!-- prodcuts section starts  -->

    <section class="products" id="products">
      <h1 class="heading">Services<span> We Offer</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="./Home/images/freightManagement.jpg" alt="" />
          </div>
          <div class="content">
            <h3>
              we are committed to offering you reliable import-export of goods
              in an expeditious manner. We have a solid track record of
              fulfilling the shipping and logistical needs of international more
            </h3>
            <div class="price">Freight Management</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="./Home/images/projectLogistics.jpg" alt="" />
          </div>
          <div class="content">
            <h3>
              Project specialists in Atlas Logistics offer solutions for
              professional handling of oversized and heavy cargo. This coupled
              with all the necessary equipment and experts to handle the most
            </h3>
            <div class="price">Project Logistics</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="./Home/images/customBrokerage.jpg" alt="" />
          </div>
          <div class="content">
            <h3>
              Our customs clearance agents are experts in local specifications,
              conditions and regulations. This on-the-ground knowledge allows
              them to handle complete administration tasks for you more
            </h3>
            <div class="price">Custom Brokerage</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="./Home/images/warehousingAndDistribution.jpg" alt="" />
          </div>
          <div class="content">
            <h3>
              Atlas expertise can carry the warehouse from the initial planning
              stages through the implementation process, using proven
              warehousing and distribution solutions. Atlas Logistics
            </h3>
            <div class="price">Warehousing & Distribution</div>
          </div>
        </div>

        <!-- <div class="box">
          <span class="discount">-5%</span>
          <div class="image">
            <img src="./Home/images/img-3.jpg" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
              <a href="#transportation">Buy</a>
            </div>
          </div>
          <div class="content">
            <h3>Rolling Chair</h3>
            <div class="price">₹13,999 <span>₹14,000</span></div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- prodcuts section ends -->

    <!-- transportation section starts  -->

    <section class="transportation" id="transportation">
      <h1 class="heading">Mode Of <span>Transport</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            Economical. Rivers are a self-contained roadway that requires no
            building or maintenance. Large Storage Capacity. Useful During
            Natural Calamities, Helpful in Defence, Less Maintenance Cost,
            Useful for Bulky Goods, Sluggish and Time-Consuming & Increased
            Product Diversity and Transportable Materials.
          </p>
          <div class="user">
            <img src="./Home/images/pic-1.png" alt="" />
            <div class="user-info">
              <!-- <div class="icons MOT_btn">
                //mY cOdE rA dEi
                <a href="./index1.html">Pay Now</a>
              </div> -->
              <h3>Waterways</h3>
              <span>Cost:₹245/Kg</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            High Speed. Air transport is one of the fastest modes of public
            transport which connects international boundaries. Air is the type
            of freight capable of traveling long distances in short periods of
            time. Send almost everywhere your freight. Easy transport of costly
            and light goods.
          </p>
          <div class="user">
            <img src="./Home/images/pic-2.png" alt="" />
            <div class="user-info">
              <!-- <div class="icons MOT_btn">
                <a href="./index1.html">Pay Now</a>
              </div> -->
              <h3>Airways</h3>
              <span>Cost:₹315/Kg</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
            Less investment:Less packaging cost, Door-to-door service: Suitable
            for short distances, Accessibility to rural areas Roads can traverse
            comparatively more dissected and undulating topography... Roads
            provided door-to-door service, thus the cost of loading and
            unloading is much lower.
          </p>
          <div class="user">
            <img src="./Home/images/pic-3.png" alt="" />
            <div class="user-info">
              <!-- <div class="icons MOT_btn">
                <a href="./index1.html">Pay Now</a>
              </div> -->
              <h3>Roadways</h3>
              <span>Cost:₹84/Kg</span>
            </div>
          </div>
          <small> <i class="fas fa-search"></i> </small>
          <span class="fas fa-quote-right"></span>
        </div>
      </div>
    </section>

    <!-- transportation section ends -->
    <!-- No snitching  -->
    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading"><span> Book </span> Now</h1>
      <div class="row">
        <form
          action="https://formsubmit.co/0d9ef5f56a1dc24e38639f4ff9aacbba"
          method="POST"
        >
          <input type="text" name="name" placeholder="Name" class="box" />
          <input type="email" name="email" placeholder="Email" class="box" />
          <input
            type="number"
            name="number"
            placeholder="Phone Number"
            class="box"
          />
          <input
            type="text"
            name="number"
            placeholder="Product Name"
            class="box"
          />
          <input
            type="number"
            name="number"
            placeholder="Product Weight"
            class="box"
          />
          <input
            type="text"
            name="number"
            placeholder="Delivery Address"
            class="box"
          />
          <input
            type="text"
            name="number"
            placeholder="GST Number"
            class="box"
          />
          <input
            type="text"
            name="number"
            placeholder="IEC Number"
            class="box"
          />
          <!-- <input type="text" name="message" class="box text_area" placeholder="Delivery Address" id="" cols="30" rows="10"/> -->
          <input type="hidden" name="_captcha" value="false" />
          <button type="submit" class="submitButton">Submit</button>
          <a class="form_btn" href="./index1.html">Book Now</a>

          <!-- <a href="#transportation" type="submit" class="form_btn">Book Now</a> -->
          <!-- <a
            href="https://trackie-logistics.vercel.app/"
            type="submit"
            class="form_btn"
            >Track Order</a
          > -->
        </form>

        <div class="image">
          <img src="./Home/images/contact-img.jpg" alt="" />
        </div>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">about</a>
          <a href="#">products</a>
          <a href="#">transportation</a>
          <a href="#">contact</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#">my account</a>
          <a href="#">my order</a>
          <a href="#">my favorite</a>
        </div>

        <div class="box">
          <h3>locations</h3>
          <a href="#">India</a>
          <a href="#">USA</a>
          <a href="#">Korea</a>
          <a href="#">Singapore</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#">+123-456-7890</a>
          <a href="#">logistics@gmail.com</a>
          <a href="#">Chennai, india - 600120</a>
          <img src="./Home/images/payment.png" alt="" />
        </div>
      </div>

      <div class="credit">
        <i
          >created by
          <span
            ><a href="https://www.linkedin.com/in/y-shobikka-a1bb97235/"
              >Shobikka & Brinda</a
            ></span
          >
          | all rights reserved.</i
        >
        <!-- Do not modify the copyrights or claim it your's without the owner's permission like a cheater!!! Haha NVM-->
      </div>
    </section>
  </body>
</html>
