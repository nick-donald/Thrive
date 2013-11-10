<?php
// Template Name: Institutional Page

get_header( 'institutional' );
?>
<div id="overlay">
  <div id="inst-contact-container">
    <div id="inst-form-title">Get More Info on Thrive!</div>
    <div id="inst-form">
      <div id="inst-form-exit-container"><i id="inst-form-exit" class="icon-remove-circle icon-2x"></i></div>
      <form name="form10" action="/wordpress/coupons/" method="post" id="form10" enctype="multipart/form-data">
        <label for="1_element10">Name: </label>
        <input type="hidden" id="counter10" value="5" name="counter10">
        <input type="hidden" value="type_text" name="1_type10" id="1_type10">
        <input type="hidden" value="no" name="1_required10" id="1_required10">
        <input type="hidden" value="no" name="1_unique10" id="1_unique10">
        <input type="text" class="input_deactive" id="1_element10" name="1_element10" value="" title="" onfocus="delete_value('1_element10')" onblur="return_value('1_element10')" onchange="change_value('1_element10')" style="width: 200px;">
        <label for="2_element10">Email Address: </label>
        <input type="hidden" value="type_text" name="2_type10" id="2_type10">
        <input type="hidden" value="no" name="2_required10" id="2_required10">
        <input type="hidden" value="no" name="2_unique10" id="2_unique10">
        <input type="text" class="input_deactive" id="2_element10" name="2_element10" value="" title="" onfocus="delete_value('2_element10')" onblur="return_value('2_element10')" onchange="change_value('2_element10')" style="width: 200px;">
        <span class="warning"><i class="icon-remove" style="display:none;color:red;"></i></span>
        <label for="3_element10">Institution Type: </label>
        <input type="hidden" value="type_text" name="3_type10" id="3_type10">
        <input type="hidden" value="no" name="3_required10" id="3_required10">
        <input type="hidden" value="no" name="3_unique10" id="3_unique10">
        <input type="text" class="input_deactive" id="3_element10" name="3_element10" value="" title="" onfocus="delete_value(&quot;3_element10&quot;)" onblur="return_value(&quot;3_element10&quot;)" onchange="change_value(&quot;3_element10&quot;)" style="width: 200px;">
        <button type="submit" id="4_element_submit10" value="Submit">Submit</button>
      </form>  
      <div id="form-sending">
        <img src="/wp-content/themes/Thrive/Images/484.GIF" height="70"/>
      </div>
    </div>
  </div>
</div>
<style type="text/css">

  #overlay {
    position: fixed;
    /*background-color: rgba(255,255,255,0.8);*/
    /*background: url(//localhost/wordpress/wp-content/themes/Thrive/images/noisy_grid.png) repeat;*/
    z-index: 1000;
    width: 100%;
    height: 100%;
    top: 0;
    display: none;
  }

  #overlay:after {
    content: "";
    background: url(/wp-content/themes/Thrive/Images/lined_paper.png) repeat;
    position: absolute;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    opacity: 0.8;
  }

  #inst-marquee-container {
    width: 100%;
    overflow: hidden;
    position: relative;
  }
  #inst-marquee {
    width: 100%;
    height: 600px;

    -webkit-transition: all 2s;
    -moz-transition:    all 2s;
    transition:         all 2s;
  }

  #inst-marquee:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 600px;
    z-index: 1;
    box-shadow: inset 0px 0px 10px 0px black;
    pointer-events: none;
  }

  .marquee-content {
    height: 600px;
    /*float: left;*/
    display: inline-block;
    vertical-align: top;
    position: absolute;
    border-right: solid;
  }

  .one {
    background: url(/wp-content/themes/Thrive/Images/hospital.jpg) no-repeat center center fixed;
    -webkit-background-size: 100%;
    -moz-background-size:    100%;
    -o-background-size:      100%;
    background-size:         100%;
  }

  .two {
    background: url(/wp-content/themes/Thrive/Images/school.jpg)  no-repeat center center fixed;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    background-size: 100%;
    
  }

  .three {
    background: url(/wp-content/themes/Thrive/Images/kids.jpg)  no-repeat center center fixed;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    background-size: 100%;
  }

  .transition {
    -webkit-transition: all 0.8s;
    -moz-transition:    all 0.8s;
    transition:         all 0.8s;
  }

  .no-transition {
    -webkit-transition: none;
    -moz-transition:    none;
    transition:         none;
  }

  .active {
    left: 0;
  }
  .waiting {
    left: 2300px;
  }
  .marquee-content span {
    font-family: 'Helvetica';
    font-size: 3em;
    margin-left: 100px;
    margin-top: 200px;
    display: block;
  }

  .marquee-inner {
    width: 50%;
    background-color: rgba(255,255,255,0.6);
    margin-top: 15%;
    margin-left: 10%;
    font-family: 'PT Sans';
    padding: 20px;
  }

  .marquee-inner p {
    padding: 0;
    margin: 0;
  }

  .marquee-title {
    font-size: 3.2em;
  }
  #scroll-carrot {
    color: white;
    background-color: rgba(0,0,0,0.5);
    padding: 0px 10px;
    border-radius: 50%;
    position: absolute;
    top: 500px;
    left: 50%;
    margin-left: -15px;
  }

  #inst-map-title {
    width: 100%;
    text-align: center;
  }

  #inst-map-title h2 {
    margin-bottom: 0;
  }

  #inst-map {
    border-top: solid thin;
    border-bottom: solid thin;
    z-index: 1;
  }

  .cali {
    fill: black !important;
  }

  #map-tooltip {
    /*display: none;*/
    position: absolute;
  }

  #region-info-container {
    position: relative;
  }

  #region-info {
    width: 55%;
    margin: 20px auto;
    border-bottom: solid;
    border-top: solid;
    text-align: center;
  }

  .region-info-title {
    padding: 0;
    margin: 0;
    font-family: 'Merriweather Sans', sans-serif;
    font-size: 2em;
  }

  .region-info-item {
    margin-left: 10px;
    font-family: 'Helvetica';
  }

  .marquee-controls {
    position: absolute;
    background-color: rgba(0,0,0,0.5);
    border-radius: 50%;
    color: white;
    top: 250px;
  }

  #marquee-left {
    left: 30px;
    padding: 0 18px 0 15px;
  }

  #marquee-right {
    right: 30px;
    padding: 0 15px 0 18px;
  }

  svg {
    width: 60%;
    display: block;
    margin: 0 auto;
  }

  #inst-form {  
    width: 230px;
    margin: 0 auto;
    padding: 20px;
    border: solid thin;
    background-color: orange;
    box-shadow: 0 0 10px black;
    padding-top: 50px;
    position: relative;
    -webkit-transition: all 0.5s;
  }

  #form10 input {
    width: 200px !important;
    font-size: 1em;
    font-family: 'Helvetica';
    /*display: block;*/
  }

  form[id="2_element10"]:after {
    content: "stuff";
  }

  #inst-opt-in {
    width: 100%;
    text-align: center;
    font-family: 'Merriweather Sans', sans-serif;
    font-size: 1em;
    margin-top: 15px;
  }

  #inst-opt-in a {  
    /*background-color: #3498db;*/
    background: linear-gradient(to bottom, #FFCF2E, #D9B027);
    color: white;
    padding: 10px;
    border-radius: 10px;
  }

  #inst-opt-in a:hover {
    background: linear-gradient(to bottom, #D9B027, #B39120);
  }

  #inst-contact-container {
    position: relative;
    top: 30%;
    margin-top: -80px;
  }

  #form10 {
    font-family: 'Merriweather Sans';
  }

#form10 button {
  font-family: 'Merriweather Sans';
  background-image: linear-gradient(to bottom, #FFF, #FFF8DC);
  outline: none;
  border: none;
  font-size: 1em;
  position: relative;
  margin: 0 auto;
  padding: 10px;
  border-radius: 5px;
  margin-top: 5px;
  cursor: pointer;
}

  #form-sending {
    display: none;
    width: 100%;
    text-align: center;
    padding: 0;
    position: relative;
    left: 0;
    margin-left: 0;
  }

  #inst-form-title {
    width: 270px;
    margin: 0 auto;
    text-align: center;
    /* margin-bottom: -35px; */
    background-color: white;
    /* color: white; */
    /* border: solid; */
    top: 49px;
    position: relative;
    font-size: 1.4em;
    font-family: 'Merriweather Sans';
    padding: 10px 0;
    z-index: 1;
  }

  #inst-about-container {
    overflow: auto;
  }

  #inst-about-container p {
    font-size: 1em;
    font-family: 'PT Sans', sans-serif;
  }

  .inst-about-header {
    font-size: 2em;
    text-align: center;
  }

  .inst-about-header h2 {
    border-bottom: solid thin;
  }

  .inst-about-title {
    font-size: 1.5em;
  }

  #inst-form-exit-container {
    position: absolute;
    z-index: 1;
    top: -30px;
    left: -25px;
  }

  #inst-nutrition-table-container {
    font-family: 'PT Sans';
    float: right;
    border: solid thin;
    padding: 10px;
    border-radius: 5px;
    position: relative;
    background-color: #5dade2;
    color: white;
  }

  #inst-nutrition-table {
    border-collapse: collapse;
  }

  #inst-nutrition-table th {
    font-size: 2em;
  }

  #inst-nutrition-table tr td:nth-child(even) {
    text-align: right;
  }

  .content-left {
    float: left;
    width: 65%;
  }

  .table-link:before {
    content: attr(data-tooltip);
    position: absolute;
    left: -225px;
    width: 200px;
    color: white;
    background-color: orange;
    padding: 5px;
    margin-top: -5px;
    opacity: 0;
    z-index: -1;
    -webkit-transition: all 0.3s;
  }

  .table-link:after {
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 10px solid orange;
    left: -15px;
    margin-top: -5px;
    opacity: 0;
    z-index: -1;
    -webkit-transition: all 0.3s;
  }

  tr:hover .table-link:before, tr:hover .table-link:after  {
    z-index: 1;
    opacity: 1 !important;
  }

  tr:hover .table-link:before {
    left: -215px;
  }

  tr:hover .table-link:after {
    left: -5px;
  }

  .scalable-container {
    width: 1000px !important;
  }

  #inst-cup-container {
    text-align: center;
    margin-top: 40px;
    padding: 20px;
    background-image: linear-gradient(to bottom, #FFCFAF, #D9B027);
    border-radius: 15px;
    float: right;
    width: 240px;
    height: 190px;
    position: relative;
  }

  .inst-cup {
    width: 240px;
    display: inline-block;
    position: absolute;
    left: 50%;
    margin-left: -100px;
    opacity: 0;
    -webkit-transition: all 0.5s;
  }

  .top-cup {
    opacity: 1;
    margin-left: -120px;
  }

</style>

<div id="inst-marquee-container">
  <div id="inst-marquee">
    <div class="marquee-content three last pre">
      <div class="marquee-inner">
        <p class="marquee-title">Thrive for Kids</p>
        <p class="marquee-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate pretium dictum. Vivamus blandit eu metus nec laoreet. Quisque justo lacus, hendrerit a metus in, ullamcorper tempus tortor.</p>
      </div>
    </div>
    <div class="marquee-content one first active">
      <div class="marquee-inner">
        <p class="marquee-title">Thrive for Health Care</p>
        <p class="marquee-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate pretium dictum. Vivamus blandit eu metus nec laoreet. Quisque justo lacus, hendrerit a metus in, ullamcorper tempus tortor.</p>
      </div>
    </div>
    <div class="marquee-content two next">
       <div class="marquee-inner">
        <p class="marquee-title">Thrive for Schools</p>
        <p class="marquee-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate pretium dictum. Vivamus blandit eu metus nec laoreet. Quisque justo lacus, hendrerit a metus in, ullamcorper tempus tortor.</p>
      </div>
    </div>
    <div class="marquee-content three next post">
      <div class="marquee-inner">
        <p class="marquee-title">Thrive for Kids</p>
        <p class="marquee-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate pretium dictum. Vivamus blandit eu metus nec laoreet. Quisque justo lacus, hendrerit a metus in, ullamcorper tempus tortor.</p>
      </div>
    </div>
    <div class="marquee-content one next dup">
      <div class="marquee-inner">
        <p class="marquee-title">Thrive for Health Care</p>
        <p class="marquee-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate pretium dictum. Vivamus blandit eu metus nec laoreet. Quisque justo lacus, hendrerit a metus in, ullamcorper tempus tortor.</p>
      </div>
    </div>
  </div>
  <div id="scroll-carrot">
    <i class="icon-angle-down icon-3x"></i>
  </div>
  <div id="marquee-left" class="marquee-controls">
    <i class="icon-angle-left icon-3x"></i>
  </div>
  <div id="marquee-right" class="marquee-controls">
    <i class="icon-angle-right icon-3x"></i>
  </div>
</div>
<section>
  <div id="inst-about-container">
    <div class="scalable-container">
      <div class="inst-about-header">
        <h2>The Thrive Story</h2>
      </div>
      <div class="inst-about-content">
        <p>The Thrive Premium Ice Cream concept began almost a decade ago, with the idea of providing a premium ice cream product that would “pack” nutrition into a great tasting form.</p>
        <p>A favorite food of most Americans ice cream is a natural carrier of great tasting nutrition such as proteins, calcium, vitamins and minerals.</p>
        <p>Thrive was developed over the last several years to not only taste good, but to also provide a source of complete and balanced nutrition.</p>
      </div>
      <div class="inst-about-title">
        <h2>Why is Thrive Unique?</h2>
      </div>
      <div class="inst-about-content content-left">
        <p>Thrive Premium Ice Cream is formulated with 25% of the Recommended Daily Intake of<strong> 24 vitamins and minerals</strong> along with <strong>three grams of fiber</strong> and <strong>nine grams of protein</strong>. This product also provides four strains of live and active <strong>probiotic cultures</strong> that have been shown to aid in digestive health. Thrive also remains suitable for lactose intolerant consumers, because the dairy proteins used are low in lactose.</p>
        <h3>Protein</h3>
        <p>Thrive Premium Ice Cream contains all the nutrition and benefits of the typical liquid nutrition shakes in a form proven to be more enjoyable to eat. Because Thrive is designed with such a unique objective of combining great taste with an increased level of nutrition, many studies have been conducted to ensure flavor acceptance as well as the intended nutrition density. Over 1500 consumers have tasted Thrive products and 75% of them rated the flavor as better than liquid nutrition drinks.</p>
        <h3>Fiber</h3>
        <p>The source of fiber in Thrive Premium Ice Cream is in the form of digestive resistant maltodextrin. Fiber is the food necessary for growth of the natural micro-flora in the human gut. The combination of fiber and added probiotics found in Thrive® have been shown to aid in good digestive health.</p>
        <h3>Probiotics</h3>
        <p>The strains of probiotic cultures found in Thrive Premium Ice Cream are <em>L.acidophilus</em> and <em>Bifidobacteria</em> combined with yogurt cultures of <em>S.thermophilus</em> and <em>L. bulgaricus</em>. Cultures have been shown to provide many added benefits in the body to include lessening of diarrhea and treating other gastrointestinal conditions, such as Irritable Bowel Syndrome, ulcers and colitis. After years of research and development, Thrive Premium Ice Cream is now available in 4 delicious flavors that will not only delight your taste buds, but also nourish your body, allowing you to Thrive as never before.</p>
      </div>
        <div id="inst-nutrition-table-container">
          <table id="inst-nutrition-table">
            <thead>
              <tr>
                <th colspan="2" style="border-bottom: solid 4px;">Nutritional Info</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Serving Size</td>
                <td>6 fl oz</td>
              </tr>
              <tr>
                <td>Calories</td>
                <td>250</td>
              </tr>
              <tr style="border-bottom: solid 4px;">
                <td>Calories from fat</td>
                <td>80</td>
              </tr>
              <tr style="border-bottom: solid 2px;">
                <td></td>
                <td>% daily value</td>
              </tr>
              <tr>
                <td><strong>Total Fat</strong> 9g</td>
                <td>14%</td>
              </tr>
              <tr>
                <td class="indented-row">Saturated fat 6 mg</td>
                <td>30%</td>
              </tr>
              <tr>
                <td class="indented-row">Trans fat 0g</td>
                <td></td>
              </tr>
              <tr>
                <td><strong>Cholesterol</strong> 30mg</td>
                <td>10%</td>
              </tr>
              <tr>
                <td><strong>Sodium</strong> 115mg</td>
                <td>5%</td>
              </tr>
              <tr>
                <td><strong><a href="#" class="original-link table-link" data-tooltip="50% more than a banana!">Potassium</a></strong> 660mg</td>
                <td>19%</td>
              </tr>
              <tr>
                <td><strong>Total Carbohydrate</strong> 34g</td>
                <td>11%</td>
              </tr>
              <tr>
                <td class="indented-row"><a href="#" class="original-link table-link" data-tooltip="12% DV of fiber!">Dietary Fiber 3g</a></td>
                <td>12%</td>
              </tr>
              <tr>
                <td class="indented-row">Sugars 22g</td>
                <td></td>
              </tr>
              <tr>
                <td><strong><a href="#" class="original-link table-link" data-tooltip="More protein than an egg!">Protein</a></strong> 9g</td>
                <td>18%</td>
              </tr>
            </tbody>
          </table>
        </div>
      <div id="inst-cup-container">
        <img class="inst-cup" src="/wp-content/themes/Thrive/Images/ChocFudgeDrop_small.png">
        <img class="inst-cup" src="/wp-content/themes/Thrive/Images/MChocDrop_small.png">
        <img class="inst-cup" src="/wp-content/themes/Thrive/Images/VanDrop_small.png">
        <img class="inst-cup top-cup" src="/wp-content/themes/Thrive/Images/Strawdrop_small.png">
      </div>
    </div>
  </div>
</section>
<section>
<div id="inst-map-title">
  <h2>Find your regional Thrive Sales Rep</h2>
</div>
<div id="inst-map">
<div id="inst-opt-in">
    <a href="#"><i class="icon-envelope"></i>&nbsp;Click here to opt-in for more information on Thrive</a>
  </div>
<div id="region-info-container">
  <div id="region-info">
    <h3 class="region-info-title">Hover your mouse over your region</h2>
    <div class="region-info-desc">
    </div>
  </div>
</div>
<style type="text/css">
    g#southeast path {
      -webkit-transition: all 0.3s;
      -moz-transition:    all 0.3s;
      transition:         all 0.3s;
    }

    path {
      stroke: black;
      stroke-width: 0.3;
      fill: white;
    }

    #midwest path {
      fill: green;
    }

    #south path {
      fill: blue;
    }

    #northeast path {
      fill: red;
    }

    #southeast path {
      fill: orange;
    }

    #florida path {
      fill: teal;
    }

    .region {
      opacity: 1;
      -webkit-transition: all 0.5s;
      -moz-transition:    all 0.5s;
      transition:         all 0.5s;
    }

    .region path {
      /*-webkit-transition: all 0.5s;*/
    }

    .region:hover {
      opacity: 0.6;
    }

    #inst-map {
      -webkit-transition: all 0.5s;
      -moz-transition:    all 0.5s;
      transition:         all 0.5s;
    }

    .zoomed-south {
      height: 890px !important;
      position: relative;
      margin-top: -290px;
    }
   
  </style>
  <svg version="1.1" id="us-map" xmlns="&amp;ns_svg;" xmlns:xlink="&amp;ns_xlink;" viewBox="0 0 600 400">
    <g id="south" class="region">
      <g id="tx" class="state">
            <path d="M335.837,298.38 c0.008,0.071,0.668,5.862-0.71,7.392c-1.391,1.517-1.469,2.25-1.469,2.25c-0.142,0.828,0.139,1.791,0.139,1.791 c-4.799,0.033-6.762,3.503-10.505,2.722c-2.972-4.846-1.703,2.432-2.736,3.909c-2.897,4.146-12.534,9.639-12.806,9.639 s-0.256-0.329-1.044-0.694c-0.789-0.365-5.581,0.199-3.214,2.519c-5.352,2.712-6.124,3.862-9.982,8.943 c-2.583-1.003-1.593,3.1-2.779,6.859c-0.819,2.588-1.532,3.758-1.652,6.077c-0.12,2.318,3.541,9.756,2.519,14.5 c-2.225-0.722-3.896-3.019-6.513-2.908c-3.567,0.147-6.809-3.221-9.505-2.734c-5.836,1.051-7.167-7.728-9.946-11.201 c-0.866-1.089-0.829-4.255-0.738-5.256c0.347-3.811-3.953-3.18-4.643-6.64c-0.796-3.981-5.71-8.202-7.296-12.156 c-3.923-9.801-12.297-19.227-22.748-16.106c-3.692,1.1-8.097,6.455-9.336,10.158c-0.864,2.596-12.525-6.889-13.848-7.813 c-5.803-4.061-5.012-13.7-10.161-19.061c-4.911-5.111-9.809-12.05-14.935-16.238l-0.082-0.271c-0.177-0.589-0.515-1.267-0.438-1.896 l9.028,0.953l11.637,0.955l10.333,0.871l11.566,0.76l1.025-15.609l1.127-12.852l2.17-35.199l0.521,0.033l15.371,0.869l11.547,0.52 l6.704,0.105l-0.798,25.771l-0.087,1.563c2.205,0.325,5.498,5.336,7.38,1.822c1.263,0.813,1.488,1.788,1.868,3.17 c0.157,0.578,3.084,0.91,3.815,1.155c1.718,0.573,2.62,0.021,3.956,1.188c0.572,0.498,3.738-0.672,4.949-0.564 c-0.025,1.531,2.077,4.874,3.75,3.199c1.666-1.668,1.616-0.188,3.198,0.188c1.203,0.287,1.53,0.835,3.558,0.434 c-0.456,3.938,2.348-0.596,3.387-0.868c1.039-0.273,2.732,0.294,3.39,0.608c0.657,0.315,2.354,2.021,3.298,2.604 c2.91-2.894,7.821-3.295,11.723-2.778c1.197,0.159,0.689-1.308,2.935,0.098c1.228,0.768,2.431,1.529,3.623,2.291 c1.012,0.646,2.047,0.783,2.985,1.215c0.313,0.146,0.574,0.324,0.877,0.564c0.537,0.43,3.076-0.189,4.254,0.26l0.263,7.642 l0.433,14.327c2.613,1.748,2.987,5.06,4.168,7.469c1.231,2.513,1.885,3.803,1.996,6.25 C337.467,293.584,335.512,296.195,335.837,298.38z"></path>
            
        </g><g id="tn" class="state">
            <path d="M374.813,228.104 c0,0-0.16-1.352,0.629-2.404c0,0,1.602-3.521,2.644-7.547c1.638-3.611,1.724-6.332,1.724-6.332c0.426-0.631,1.139-0.965,1.139-0.965 l15.37-1.303l-0.124-2.227c19.963-1.463,36.651-3.359,48.828-4.979c14.176-1.882,22.237-3.01,22.237-3.01l-0.141,0.021 c-0.143,3.812-3.792,6.99-3.792,6.99c-1.409,0.452-3.265,1.757-3.265,1.757c-1.586,1.584-3.018,1.057-3.018,1.057 c-0.839,0.037-1.811,1.507-1.811,1.507c-1.758,2.413-4.493,4.203-4.493,4.203c-1.731,1.731-3.946,2.133-3.946,2.133 c-3.114,0.806-3.346,3.021-3.346,3.021c-1.005,1.803-1.892,2.219-1.892,2.219c-1.215,1.773-0.869,3.676-0.869,3.676l-14.763,1.865 l-27.826,2.885l-9.858,0.939l-15.717,1.215c0,0,0.545-1.746,1.478-2.678C374.001,230.146,374.762,229.371,374.813,228.104z"></path>
            
        </g><g id="ok" class="state">
            <path id="ok_2_" d="M325.201,229.611l0.164,25.073 v-0.022c-0.938-0.432-1.974-0.568-2.984-1.215c-1.193-0.762-2.396-1.523-3.623-2.291c-2.244-1.404-1.736,0.063-2.934-0.098 c-3.901-0.517-8.813-0.113-11.723,2.778c-0.945-0.583-2.642-2.289-3.299-2.604c-0.658-0.314-2.351-0.883-3.39-0.608 c-1.039,0.274-3.843,4.808-3.387,0.868c-2.028,0.401-2.355-0.146-3.558-0.434c-1.582-0.376-1.532-1.854-3.198-0.188 c-1.673,1.675-3.774-1.668-3.75-3.199c-1.21-0.105-4.377,1.063-4.949,0.564c-1.335-1.168-2.237-0.615-3.956-1.188 c-0.731-0.245-3.658-0.577-3.815-1.155c-0.38-1.382-0.605-2.357-1.868-3.17c-1.882,3.514-5.176-1.497-7.38-1.822l0.087-1.563 l0.798-25.771l-6.704-0.105l-11.547-0.52l-15.371-0.869l0.435-7.121l10.942,0.695l17.799,0.782l25.269,0.606h25.441l13.893-0.262 l0.174,7.034c0,0-0.019,1.649,0.647,4.046C323.417,217.855,324.986,224.658,325.201,229.611z"></path>
            
        </g><g id="nm" class="state">
            <path d="M202.075,274.068l-11.637-0.955 l-9.028-0.953c-0.077,0.631,0.261,1.309,0.438,1.896l0.082,0.271c0.431,0.353,0.859,0.724,1.288,1.111l0.006,0.006l-20.426-2.195 l-0.719,6.281l-10.02-1.207l0,0l10.073-79.625l18.407,2.172l16.412,1.648l19.798,1.65l12.503,0.779l-0.435,7.121l-0.521-0.033 l-2.17,35.199l-1.127,12.852l-1.025,15.609l-11.566-0.76L202.075,274.068z"></path>
            
        </g><g id="ms" class="state">
            <path d="M371.021,235.917 c0,0,1.403-2.919,1.504-3.095l15.715-1.215l9.859-0.938l-0.827,44.007l2.865,21.359c0,0-1.937,0.92-4.299,0.459 c0,0-1.33-0.324-3.743,0.352c0,0-2.453,0.516-3.398,1.604c0,0-0.463,1.363-1.844,1.58c0,0-3.634-4.238-4.469-6.731 c0,0,0.133-1.415,0.846-2.979c0,0,0.321-0.959,0.234-1.574l-23.098,1.563c1.41-10.714,5.324-13.861,5.324-13.861 c2.977-4.271,0.701-8.188,0.701-8.188c-1.857-2.063-2.031-6.688-2.031-6.688c0.53-3.121,0.176-5.56,0.176-5.56 c-1.508-1.946-0.525-4.86-0.525-4.86s0.862-1.496,1.354-2.195c0,0,0.844-1.932,1.011-3.034c0,0,0.188-1.461,1.262-2.345 c0,0,2.192-2.811,2.924-5.607C370.561,237.965,370.709,236.73,371.021,235.917z"></path>
            
        </g><g id="la" class="state">
            <path d="M386.854,300.029 c-3.119,0.971-5.767-3.23-8.943-1.908c-3.195,1.326-1.828,3.843,0.605,4.166c2.273,0.306,2.852-0.956,4.523-1.155 c0.451,0,0.717,0.036,1.205,0.524c-0.422,1.022-0.026,0.885-1.125,1.242c3.349,2.612,2.953-0.017,4.31-0.432 c1.021,0.15,1.681,0.952,1.333,3.035c-1.465-0.196-2.488,0.969-1.043,2.343c-0.693-0.284-1.172-0.575-1.822-0.263 c-1.961,2.802,5.245,2.329,7.655,5.905c-0.158,1.521-0.384,1.405-0.979,2.339c-0.838-0.364-1.604-0.691-2.75-1.431 c-1.93-1.148-2.299-1.019-4.638-2.486c-2.563-1.965-4.146-2.039-5.715-2.676c0.724,1.377,3.179,2.649,1.304,3.993 c0.649,0.95,0.141,2.938-1.475,2.78c-1.285-0.128,0.641-3.438-2.172-2.173c-0.117-0.317-0.232-0.636-0.348-0.953 c-2.791,0.313-2.797,4.807-5.836,2.834c-2.285-1.487-1.884-0.044-2.894-2.269c-0.726-1.604-3.272-2.157-4.647-3.048 c-1.647-1.063-1.723-1.619-4.069-2.373c-1.472-0.678-4.938-0.678-3.134,2.425c-5.16,1.521-10.359-1.444-15.752-2.313 c-3.33,0.283-4.828,1.688-5.498,1.201c-1.03-0.75,0.654-1.256,0.177-3.568c1.378-1.529,0.718-7.32,0.71-7.393 c-0.325-2.186,1.63-4.796,1.52-7.207c-0.111-2.447-0.765-3.737-1.996-6.25c-1.181-2.409-1.555-5.721-4.168-7.469l-0.433-14.327 l14.5-0.521l19.103-1.039c0,0,0.174,4.625,2.031,6.688c0,0,2.273,3.918-0.701,8.189c0,0-3.914,3.146-5.324,13.86l23.098-1.563 c0.087,0.617-0.235,1.574-0.235,1.574c-0.712,1.565-0.845,2.98-0.845,2.98C383.22,295.79,386.854,300.029,386.854,300.029"></path>
            
        </g><g id="co" class="state">
            
            
        </g><path id="co" d="M162.132,198.699 180.539,200.871 196.951,202.521 216.749,204.171 229.253,204.951 240.195,205.646 242.277,163.012 243.013,148.808 231.684,148.251 222.046,147.555 205.548,146.254 196.43,145.386 179.324,143.563 169.252,142.346 162.132,198.699"></path><g id="az" class="state">
            <path d="M162.132,198.699l-15.196-1.997 l-14.674-2.169l-15.023-2.435l-10.158-1.822c-0.62,3.42-0.501,8.78-2.431,11.679c-2.81,4.219-3.006-2.435-6.425-0.826 c-2.25,1.061-1.122,5.029-1.303,7.209c-0.095,1.146,0.092,2.955-0.086,3.994c-0.332,1.914-1.21,2.011-1.303,4.861 c0,3.603,0.756,3.233,1.216,4.948c0.185,0.693,0.448,1.646,0.39,2.345c-0.097,1.176,1.344,1.356,1.693,2.347 c0.818,2.3-1.586,1.942-3.212,3.387c-1.641,1.455-1.243,2.817-1.822,4.772c-0.592,1.996-2.716,3.05-3.388,4.604 c-0.305,0.703-0.785,3.846-0.433,4.604c0.318,0.688,3.934,1.926,1.432,3.517c-1.271,0.808-1.118,1.043-2.823,0.912 c0,0-1.763,1.269-1.65,2.776l2.779,1.651l23.357,13.461l15.284,8.595l17.798,2.517l5.905,0.696l0,0L162.132,198.699"></path>
            
        </g>
      </g>
    <g id="midwest" class="region">
      <g id="wi" class="state">
            <path d="M357.894,124.069 c-1.081-0.493-1.696-3.112-1.821-4.24c-0.188-1.716,0.406-3.006,0.041-4.486c-0.166-0.679-0.724-0.927-1.215-2.258 c-0.598-2.14-0.387-4.558-2.084-6.252c-1.603-1.601-3.826-1.672-5.179-3.794c-0.913-1.436-4.086-4.06-5.676-4.324 c-3.593-0.597-3.147-2.475-3.56-4.992c-0.488-2.988,0.69-6.39,0.692-6.947s-2.521-2.397-2.521-3.344 c0-0.948,1.104-1.634,1.306-2.648c0.583-2.944,4.468-0.915,4.272-5.857c-0.123-3.086-0.951-5.494,1.371-7.341 c1.654,2.614,6.993-0.733,8.944-1.736c0.808-0.416,3.263-2.76,3.907-1.042c0.26,0.699-0.621,1.288-0.782,1.824 c-0.253,0.843-0.049,1.539-0.606,2.344c1.026,0.192,1.537-0.572,2.527-0.392c0.953,0.172,1.633,0.629,2.68,0.653 c0.866,0.433,2.006,1.054,2.53,1.926c1.142,1.898,2.722,1.658,4.897,2.073c2.869,0.548,8.416,3.292,11.154,2.469 c0.879-0.263,3.404,0.279,4.168,0.739c0.891,0.534,0.03,1.852,1.043,1.953c0.864,0.087,1.66,0.329,2.301,0.913 c1.59,1.447-1.432,5.992,2.301,4.687c-0.881,1.535-0.646,3.013,0.957,3.647c-0.03,1.893-1.947,2.554-2.691,4.255 c-1.041,2.371-1.013,5.607,1.387,2.344c0.896-1.212,2.627-5.693,4.125-2.388c0.744,1.641-1.254,4.762-1.344,6.643 c-0.057,1.154,1.305,1.7,0.174,2.604c-0.942,0.755-1.304,2.389-1.304,3.56c0,2.349,0.399,4.271-0.334,6.574 c-0.872,2.749-0.185,4.643,0.509,6.973c0.619,2.084,0.59,3.989,0.955,6.338l-12.854,1.128l-16.409,0.954c0,0-0.41-0.749-0.584-1.13 c-0.175-0.381-0.379-0.366-0.731-0.569c0,0-0.201-0.086-0.974-0.274C359.469,124.656,358.427,124.428,357.894,124.069z"></path>
            
        </g><g id="ne" class="state">
            <path d="M309.224,155.804 c0-0.762-0.802-1.448-0.964-2.427c-0.65-3.93,0.706-9.995-2.594-10.943c-0.258-3.158-0.669-4.457-1.912-7.293 c-0.588-1.344-1.396-5.223-1.941-6.203c-1.357-0.578-2.952-1.903-3.962-2.916c-0.851-0.849-2.591-0.578-3.598-1.465 c-1.835-1.62-4.095-0.39-6.437-0.723c-0.944-0.135-1.061,1.249-2.123,1.146c-1.141-0.109-2.795-1.524-3.82-2.083l-1.13-1.128 l-11.373-0.174l-17.107-0.607l-17.714-0.955l-10.593-0.782l-1.909,28.306l9.638,0.696l11.329,0.557l-0.737,14.204l13.634,0.695 l26.396,0.695l13.805,0.087l17.975-0.174c-1.394-0.93-0.949-2.861-2.257-3.778C310.58,159.661,309.292,157.48,309.224,155.804z"></path>
            
        </g><g id="mi" class="state">
            <path id="mi_upper" d="M360.193,69.236 c0,0,3.479-1.568,4.59-2.873c0,0,1.182-1.604,3.856-1.511c0,0,2.302,0.225,7.446-5.776c0,0,1.688,0.944,2.463,3.265 c0.775,2.323,0.004,0.08,0.004,0.08s0.257,0.885,0.257,2.439c0,0,1.402-2.484,4.759-2.311c0,0,1.805-0.584,4.707,3.035 c0,0,2.688,3.947,9.956,0.805c0,0,3.684-3.003,8.058-3.003c0,0,1.633-0.347,2.635-0.9c0,0,2.249-1.162,3.372-1.067 c0,0-0.252,2.922,0.51,3.977c0,0,2.455,0.377,4.755-0.226c0,0,2.035-1.658,3.504,2.412c0,0,0.641,1.545,2.396,2.393 c0,0,0.819,0.294,1.078,1.081c0,0,0.068,0.598-1.926,0.598c0,0-0.755,0.338-3.619,0c0,0-3.387-0.751-2.615,2.357 c0,0-1.473-0.694-2.268-1.492c0,0-1.635-1.835-5.667-0.973c0,0-1.468,2.633-6.011,2.481c0,0-1.133,0.022-2.818,2.819 c0,0-1.021-3.043-4.352,1.611c0,0-1.008-0.911-0.736-2.765c0,0-2.961,6.647-4.98,11.95c-1.604-0.635-1.838-2.112-0.957-3.647 c-3.732,1.305-0.711-3.24-2.3-4.687c-0.642-0.584-1.437-0.826-2.302-0.913c-1.012-0.101-0.152-1.418-1.043-1.953 c-0.764-0.459-3.289-1.002-4.168-0.739c-2.737,0.822-8.285-1.921-11.153-2.469c-2.179-0.416-3.759-0.175-4.897-2.073 C362.197,70.29,361.06,69.669,360.193,69.236"></path>
            <path id="mi_lower" d="M423.322,132.275 l9.463-1.563l4.254-0.869c0.85-3.398,2.706-6.591,3.905-9.464c0.344-0.82,2.878-7.774,2.868-3.213 c3.937-2.241-1.483-19.644-5.298-20.492c-4.659-1.036-4.81,7.324-8.16,7.033c-2.013-0.174-3.298-3.395-1.521-4.688 c2.195-1.597,1.704-2.091,2.647-4.602c0.303-0.8,1.834-0.608,1.686-1.836c-0.154-1.296-0.291-2.47-0.229-3.769 c0.117-2.466-2.02-2.844-2.324-4.641c-0.374-2.22,1.957-0.781,0-3.387c-1.159-1.546-2.409-1.738-4.452-2.296 c-3.093-0.843-5.4-2.23-8.396-3.13c-3.938-1.18-4.707,3.014-3.041,5.599c-3.734-0.314-8.153,6.392-9.812,8.423 c-1.712,2.1-0.761,3.884-1.042,6.599c-0.264,2.499-1.466,4.169-1.479,6.338c-0.016,2.93-0.271,5.034,1.174,7.771 c1.421,2.694,2.724,4.998,3.161,8.051c0.647,4.51-0.688,12.754-4.683,15.699l5.558-0.522l15.599-1.888"></path>
            
        </g><g id="ks" class="state">
            <path d="M314.087,164.315 c1.597,1.768,3.579,0.773,4.384,2.04c1.458,2.294-2.074,2.314-1.82,3.817c0.416,2.449,0.791,1.211,1.947,3.001 c1.088,1.685,0.643,1.8,3.307,3.47l0.691,30.131l-13.893,0.262h-25.441l-25.269-0.606l-17.799-0.782l2.082-42.635l13.634,0.695 l26.396,0.695l13.805,0.087L314.087,164.315"></path>
            
        </g><g id="ia" class="state">
            <path d="M301.669,114.821l10.508-0.086 l17.539-0.435l14.587-0.607l10.596-0.607c0.491,1.331,1.049,1.579,1.215,2.258c0.365,1.48-0.229,2.77-0.041,4.486 c0.125,1.128,0.74,3.748,1.821,4.24c0.533,0.359,1.575,0.587,1.575,0.587c0.771,0.188,0.973,0.274,0.973,0.274 c0.354,0.203,0.56,0.187,0.732,0.569c0.173,0.382,0.584,1.13,0.584,1.13s0.383,1.027,1.273,1.589 c0.89,0.562,3.508,2.571,4.195,4.447c1.275,3.475-2.313,8.412-5.648,9.095c-2.579,0.528-3.361,0.524-3.469,3.365 c-0.022,0.645,1.643,1.648,1.736,2.69c0.141,1.521-0.92,1.662-1.302,2.997c-0.875,3.042-1.849,3.582-3.302,6.556 c-1.092-0.968-2.733-1.992-3.385-3.387l-7.035,0.782l-16.322,0.953l-7.467,0.174l-11.812-0.087 c-2.579-3.017,0.563-12.186-3.558-13.371c-0.258-3.158-0.67-4.457-1.912-7.293c-0.588-1.344-1.396-5.223-1.941-6.203 c-1.041-2.792-2.018-5.402-0.49-7.951c0.641-1.068-0.876-4.618-1.214-6.165H301.669"></path>
            
        </g>
      </g>
    <g id="northeast" class="region">
      <g id="vt" class="state">
            <path d="M547.229,59.944 c0,0-0.236,0.669,0.138,1.286c0,0,0.212,0.814-0.089,1.946c0,0-0.45,0.752,0.492,1.958c0,0,1.544,1.96-1.697,4.636 c0,0-1.809,1.013-0.756,4.068c0,0,0.028,1.174-0.52,4.261c0,0-0.309,0.83-0.722,3.316c0,0-0.074,2.262,0.338,4.071 c0,0,0.336,2.689,0.732,4.416c0,0-1.581,1.881,0.954,3.821l-7.904,1.65l-0.521-1.476l-1.972-9.005c0,0-1.173-2.438-1.774-0.47 c0,0-0.55-0.412-0.442-2.444c0,0-0.382-1.58-0.906-3.049c0,0-0.641-1.885-0.453-3.73c0,0,0.037-1.734-0.489-3.279 c0,0-0.592-0.761-1.217-3.241c0,0-0.375-2.788-0.993-3.956L547.229,59.944"></path>
            
            
        </g><g id="ri" class="state">
            <path d="M557.474,111.349 c0,0,2.583-1.45,3.43-2.171c0,0,0.319-0.497-0.075-2.325c0,0-0.148-0.941-0.507-1.602c0,0-0.152-0.347,0.166-0.87 c0,0,0.416-0.5,0.898-0.5c-0.803-0.711-1.393-1.997-1.393-1.997c-0.305-0.692-1.126-1.129-1.126-1.129l-3.478,1.042l2.262,7.986 C557.653,109.783,557.301,110.303,557.474,111.349"></path>
            
            
        </g><g id="ny" class="state">
            <path d="M538.196,95.372l-0.255,9.636 l0.345,0.522l1.823,10.159c0,0,0.687,0.559,0.499,1.911c0,0-0.063,0.175-1.073,1.182c0,0-0.602,0.335-0.101,0.833l0.762,0.764 l-0.02,0.035c0,0-0.645,1.194-0.851,1.911c0,0-0.123,0.69-0.595,1.16c0,0-0.654,0.511-1.046,1.063c0,0,0.556-3.193-0.42-5.921 c0,0-0.381-0.477-0.723-0.721c0,0-0.479-0.406-0.479-0.952c0,0-0.485,0.682,0.839,2.197c0,0,0.513,0.963,0.687,2.097l-9.378-3.039 c-0.587-0.759-1.367-0.641-2.338-1.049c-1.534-0.646-1.394-1.146-2.179-2.338c-1.456-2.209-2.377-2.407-4.083-3.993l-9.549,2.169 l-14.416,3.039l-12.762,2.518l-8.337,1.477l-0.607-3.299l-0.088-0.347c0,0,5.696-5.698,7.458-8.771c0,0-0.035-3.084-0.638-3.688 c0,0-1.523-0.841-1.875-2.348c0,0-0.609-1.643,6.529-3.535c0,0,4.727-0.586,8.446-0.386c0,0,3.377,0.158,6.35-1.148 c0.02-0.008,0.041-0.018,0.061-0.028c2.984-1.336,6.575-6.273,5.198-8.822c0,0-0.873-2.296-1.61-3.367c0,0-0.465-0.82,0.125-1.635 c0,0,2.339-2.203,3.395-4.304c0,0,3.166-9.679,10.103-10.588l12.032-3.044c0.618,1.168,0.993,3.956,0.993,3.956 c0.625,2.48,1.217,3.241,1.217,3.241c0.526,1.545,0.489,3.279,0.489,3.279c-0.188,1.846,0.453,3.73,0.453,3.73 c0.524,1.47,0.906,3.049,0.906,3.049c-0.106,2.032,0.442,2.444,0.442,2.444c0.602-1.968,1.774,0.47,1.774,0.47l1.972,9.005 L538.196,95.372"></path>
            <path id="long_island" d="M539.502,123.592 c0,0-1.514,0.705-1.854,1.98c0,0-0.301,0.842,0.19,1.125c0,0,0.892,0.182,1.713-0.076c0,0,2.141-0.922,4.595-2.279 c0,0,2.077-1.282,3.169-1.941c0,0,2.131-1.15,3.486-1.64c0,0,1.169-0.491,1.677-1.243c0,0,0.189-0.377,0.727-0.727 c0,0,1.486-0.511,4.234-3.473c0,0-1.034,0.61-1.792,0.802c0,0-1.057-0.071-2,0.777c0,0-0.979,1.795-2.546,2 c0,0,1.152-1.021,1.585-2.603c0,0,0.372-0.926,0.749-1.51c0,0-1.87,2.547-3.561,3.554c0,0-1.665,0.588-2.938,0.914 c0,0-0.848,0.082-1.731,0.833c0,0-0.302,0.354-2.074,1.053c0,0-0.979,0.245-1.621,0.301 C541.512,121.439,540.221,122.239,539.502,123.592z"></path>
            
        </g><g id="nh" class="state">
            <path d="M561.991,87.209 c0,0-1.447,0.085-2.634,1.762c0,0-0.87,1.423-1.709,2.06l-11.548,2.692c-2.535-1.94-0.954-3.821-0.954-3.821 c-0.396-1.726-0.732-4.416-0.732-4.416c-0.412-1.809-0.338-4.071-0.338-4.071c0.413-2.487,0.722-3.316,0.722-3.316 c0.548-3.087,0.52-4.261,0.52-4.261c-1.053-3.055,0.756-4.068,0.756-4.068c3.241-2.676,1.697-4.636,1.697-4.636 c-0.942-1.206-0.491-1.958-0.491-1.958c0.3-1.131,0.088-1.946,0.088-1.946c-0.374-0.617-0.138-1.283-0.138-1.286 c0,0-0.021-1.178,0.162-2.837c0,0,0.125-0.838,0.508-1.224c0,0,0.32-0.429,1.147-0.617c0,0,0.766-0.125,1.133-0.357l6.862,20.752 l1.042,2.692c0,0-0.229,2.586,2.423,4.005c0,0,0.182,1.236,1.484,1.899l0.434,0.259C562.425,84.517,561.837,86.225,561.991,87.209z"></path>
            
            
        </g><g id="ma" class="state">
            <path d="M561.386,103.881 c0,0,0.58,0.547,1.434,0.868c0,0,1.127,0.133,1.218,2.011c0,0,0.64-0.534,1.421-1.137c0,0,0.792-1.143,1.28-1.633 c0,0,0.339-1.073,1.158-1.323c0,0,0.136,1.302,0.694,2.341c0,0,1.918-1.346,3.374-2.074c0,0,2.661-1.256,3.292-1.885 c0,0,1.108-1.638-1.331-3.819c0,0-1.485-0.808-3.042-0.882c0,0,2.918,1.159,3.189,2.893c0,0-0.098,1.506-2.41,2.236 c0,0-1.479,0.335-2.649-0.836c0,0-0.28-0.998-1.543-1.4c0,0-0.884-0.176-0.884-0.905c0,0-0.107-0.578,0.727-0.213 c0,0-0.978-1.57-2.407-2.199c0,0-0.755-0.149-1.71,0.101c0,0-0.999-0.14-1.528-1.226c0,0,0.819,0.003,0.819-0.818c0,0-0.017-0.781,0.328-1.475c0,0,0.663-1.199,2.067-1.955c0,0,0.234-0.443-0.079-0.757c0,0-0.252-0.131-0.751,0.075 c0,0-0.223,0.271-0.979-0.178c0,0-0.821-0.858-1.081-2.482c0,0-1.447,0.085-2.634,1.762c0,0-0.87,1.423-1.709,2.06l-11.548,2.692 l-7.903,1.65l-0.255,9.636l0.344,0.522l8.731-1.767l8.372-1.967l3.478-1.042c0,0,0.822,0.437,1.126,1.129 C559.993,101.884,560.583,103.17,561.386,103.881"></path>
            
            
        </g><g id="me" class="state">
            <path d="M550.18,54.909 c0,0,0.392-0.63,1.563-0.434c0,0,0.992,0.091,0.708-1.164c0,0,0.167-2.766,0.881-3.944c0,0,2.499-2.812,1.548-8.089 c0,0-0.25-2.11,0.553-4.371c0,0,0.336-2.317-0.261-4.174l4.04-11.949c0,0,0.818-0.464,1.649,0c0,0,0.398,2.856,2.509,2.592 c0,0,0.223-0.071,0.528-0.377c0,0,0.697-0.526,1.32-0.772c0,0,0.844-0.506,1.581-1.414c0,0,1.53-2.211,4.31-0.352 c0,0,1.955,1.539,2.952,1.624l5.033,14.935c0,0-0.046,2.335,0.82,3.014c0,0,1.508,0.678,2.487,0.678c0,0,0.979-0.301,1.471,0 c0,0,0.226,0.452,0.11,1.244c0,0-0.057,1.187,0.567,1.809c0,0,0.356,0.743,0.498,1.464c0.143,0.722,0,0.081,0,0.081 s0.367,0.943,1.875,0.566c0,0,1.186-0.433,2.222,0.602c0,0,0.604,0.529,0.416,1.471c0,0-0.789,0.897-0.243,1.598 c0,0,1.04,0.535,1.149-0.457c0,0,2.504,0.843-2.951,4.862c0,0-1.472,0.589-2.966,2.085c0,0-0.493,1.709-4.072,2.349 c0,0-2.108,0.415-1.845,3.468c0,0-1.205-0.527-2.486-0.377c0,0,0.941-1.054-0.87-2.863c0,0-1.009,1.136-0.983,2.792 c0,0-0.602,2.974-0.147,4.406c0,0,0.771,0.587-0.336,1.697c-0.058,0.055-0.581,0.474-1.313,0.164c0,0-1.006-0.315-1.439,0.721 c0,0-0.169,0.791,0,1.206c0,0,0.113,0.83-0.603,1.225c0,0-1.092,1.077-3.502,1.858c0,0-0.663-0.104-1.021-0.689 c0,0-1.13,0.942-1.205,2.45c0,0,0.226,0.627-0.503,2.085c0,0-0.284,0.943-0.477,2.412c-0.173,1.311-0.303,1.232-0.757,2.085 c0,0-0.174,0.83-0.123,1.81c0,0,0.092,0.752-0.444,1.682l-0.435-0.259c-1.303-0.663-1.483-1.899-1.483-1.899 c-2.652-1.419-2.423-4.005-2.423-4.005l-1.042-2.692L550.18,54.909"></path>
            
        </g><g id="ct" class="state">
            <path d="M555.391,101.798l-8.372,1.967 l-8.731,1.767l1.823,10.159c0,0,0.687,0.559,0.499,1.911c0,0-0.063,0.175-1.073,1.182c0,0-0.602,0.335-0.101,0.833l0.762,0.764 l0.869-0.348c0,0,3.161-3.341,5.231-4.661c0,0,2.658-1.262,5.843-2.034c0,0,0.624-0.16,1.169-0.425 c0.545-0.265,3.691-1.203,4.164-1.563c-0.173-1.046,0.18-1.565,0.18-1.565L555.391,101.798"></path>
            
            
        </g>
      </g>
    <g id="southeast" class="region">
      <g id="sc" class="state">
            <path d="M486.534,261.568 c0,0-2.724-0.731-3.737-3.138c0,0-0.092-1.563-1.619-3.091c0,0-1.739-0.508-2.284-2.893c0,0-0.155-2.074-3.968-4.489 c0,0-0.938-0.069-3.81-4.146c0,0-0.749-1.136-4.785-4.263c0,0-6.173-3.303-7.329-7.173c0,0-0.533-1.314-2.427-1.314 c0,0-3.277-0.805-4.165-2.929c0,0,0.732-2.729,2.17-4.167c0,0,1.558-1.29,3.619-1.689c0,0,0.704-0.203,1.812-1.056 c0,0,1.905-1.508,4.972-1.961c0,0,10.904-1.157,13.166-0.501c0,0,2.861,0.982,3.09,3.557l12.592-1.996l14.845,10.592 c0,0-4.813,4.025-5.401,9.557c0,0-0.854,3.086-4.421,7.186c0,0-5.477,6.69-9.896,6.783c0,0,3.024,0.858,1.661,2.439 c0,0-1.285,2.119-4.212-1.393c0,0,0.25,2.174,2.129,3.303C488.532,258.787,486.997,259.658,486.534,261.568"></path>
            
        </g><g id="nc" class="state">
            <path d="M529.342,187.933 c0,0,0.297,0.816,1.578,2.098c0,0,1.792,1.35,1.886,3.482c0,0-0.652-1.159-2.6-0.281c0,0-1.896,1.119-3.508,2.294 c0,0-1.216,1.852-3.94,0.042c0,0,0.213,2.352,5.186,1.482c0,0,1.435-0.728,3.695-0.728c0,0,1.312,0.211,1.912-0.634 c0,0,2.081,1.69,1.329,4.328c0,0-0.339,2.901-3.241,4.523c0,0-0.834,0.943-9.537,0.244l6.286,2.076c0,0-0.281,1.828-1.049,2.873 c0,0-0.448,1.892-2.938,1.892c0,0,2.031,0.754,4.944-1.466c0,0,1.932-0.978,1.932,0.545c0,0-0.017,1.521-2.054,3.183 c0,0-3.051,1.583-5.217,2.146c0,0-3.56,2.178-6.405,6.008c0,0-1.631,2.324-1.631,4.734c0,0,0.667,0.676-1.441,2.412 c0,0-3.191,0.512-5.855,1.725l-14.845-10.59l-12.593,1.996c-0.228-2.574-3.089-3.558-3.089-3.558 c-2.262-0.655-13.166,0.501-13.166,0.501c-3.065,0.453-4.972,1.961-4.972,1.961c-1.106,0.854-1.812,1.057-1.812,1.057 c-2.063,0.398-3.619,1.688-3.619,1.688l-13.893,1.951c0,0-0.346-1.901,0.869-3.677c0,0,0.887-0.414,1.891-2.217 c0,0,0.231-2.217,3.347-3.021c0,0,2.215-0.4,3.946-2.133c0,0,2.735-1.791,4.493-4.203c0,0,0.972-1.471,1.811-1.508 c0,0,1.432,0.527,3.018-1.055c0,0,1.854-1.306,3.265-1.758c0,0,3.649-3.178,3.792-6.99l16.281-2.566l23.186-4.152l22.942-4.707"></path>
            
        </g><g id="ga" class="state">
            <path d="M440.688,225.919l13.893-1.951 c-1.438,1.438-2.17,4.167-2.17,4.167c0.888,2.124,4.165,2.928,4.165,2.928c1.894,0,2.427,1.315,2.427,1.315 c1.156,3.87,7.329,7.173,7.329,7.173c4.036,3.127,4.785,4.262,4.785,4.262c1.82,2.906,3.81,4.146,3.81,4.146 c3.813,2.415,3.968,4.49,3.968,4.49c0.545,2.384,2.284,2.892,2.284,2.892c1.527,1.526,1.619,3.091,1.619,3.091 c1.015,2.405,3.737,3.137,3.737,3.137l0.631,0.217c-2.042,2.672-2.89,6.222-2.89,6.222c-0.178,3.399-1.751,6.826-1.751,6.826 c-0.749,2.245-0.243,6.272-0.243,6.272c-3.383-0.772-5.599-0.222-5.599-0.222c-0.841,0.563-0.451,1.662-0.451,1.662 c1.276,3.538-0.302,4.368-0.302,4.368c-1.508,0.296-2.028-2.479-2.028-2.479l-31.839,2.293c-0.938-1.625-2.068-3.629-2.068-3.629 s-1.203-2.433-1.566-6.402c0,0-0.326-1.859-1.333-4.973c0,0-0.341-1.42,1.688-6.391c0,0,0.415-1.106-2.644-5.025 c0,0-1.271-2.222-1.704-3.779l-8.511-28.744L440.688,225.919"></path>
            
        </g><g id="al" class="state">
            <path d="M425.926,227.785l-27.826,2.884 l-0.827,44.007l2.865,21.359c0,0,1.292-0.223,3.403,0.175c0,0,0.174-3.361,0.764-4.948c0,0,2.104,0.405,1.216,2.951 c0,0,0.44,0.893,1.719,1.325c0,0,0.924,0.874,1.493,1.8c0,0,2.215-0.594,3.13-3.73c0.021-1.293,0.145-2.576-1.218-3.258 c-1.737-0.867-2.355-2.709-0.693-3.863l11.197-1.129l18.847-2.258c0,0-1.203-2.433-1.566-6.402c0,0-0.326-1.859-1.333-4.973 c0,0-0.341-1.42,1.688-6.391c0,0,0.415-1.105-2.644-5.025c0,0-1.271-2.222-1.704-3.779L425.926,227.785"></path>
            
        </g>
      </g>
    <g id="florida" class="region">
      <g id="fl" class="state">
            <path d="M482.281,281.104 c0,0,3.192,11.803,13.084,24.227c0,0,3.394,3.242,3.854,5.042c0,0-0.221,2.783,2.271,6.853c0,0-2.382-2.256-2.886-7.122 c0,0,0.322-0.791-3.221-2.831c0,0,0.563,3.898,6.8,12.578c0,0,2.979,4.712,5.678,9.147c0,0,2.204,4.633,2.204,7.949 c0,0-0.222,1.151,0.35,4.936c0,0,0.35,2.102,0,4.413c0,0-2.296,2.432-1.147,5.888c0,0-0.518,2.854-3.834,4.564 c0,0-2.988,0.735-5.263,0.796c0,0-1.858-0.779-0.696-2.636c0,0-1.491-2.224-2.602-4.074c0,0-1.729-2.576-4-3.132 c0,0-1.863,0.642-3.563-1.877c0,0-1.249-2.097-1.249-3.226c0,0,0.111-0.689-2.363-2.365c0,0-2-2.092-1.804-4.543 c0.014-0.143-0.041-0.354-0.409-0.546c-0.241-0.124-0.6-0.363-1.118-0.815c0,0-0.581,0.739,0.64,2.086c0,0-2.68,0.518-6.86-6.863 c0,0-1.226-1.579-0.65-2.238c0.483-0.55,1.134-1.54,1.906-3.323c0,0,0.897-1.114,0.444-1.565c0,0-0.504-1.156-1.908,0 c0,0-0.62,0.708-0.697,1.587c0,0-0.224,1.071-1.068,1.071c0,0-2.012-0.409-2.012-2.014c0,0,2.206-10.179,0.504-14.277 c0,0-0.941-2.548-6.097-4.382c0,0-1.993-1-4.495-4.062c0,0-1.989-2.69-5.494-5.003c0,0-1.909-0.977-5.119-0.879 c0,0-2.91,0.273-1.803,2.984c0,0-2.194,0.02-3.703,1.525c0,0-3.932,2.354-6.846,2.354c0,0-7.024-12.308-25.427-5.886 c0,0-1.961,1.024-0.956-0.434c0,0,0.733-0.88-0.863-1.406c0.021-1.293,0.145-2.574-1.218-3.257 c-1.737-0.868-2.355-2.709-0.693-3.864l11.197-1.129l18.847-2.257c0,0,1.13,2.005,2.068,3.63l31.839-2.294 c0,0,0.521,2.773,2.028,2.479c0,0,1.578-0.831,0.302-4.369c0,0-0.39-1.1,0.451-1.662 C476.684,280.883,478.899,280.331,482.281,281.104"></path>
            <path id="fl_keys" d="M510.14,352.951 c0,0-0.656,0.15-0.941,1.339c0,0,0.044,1.196-2.248,4.462C506.949,358.752,509.446,356.358,510.14,352.951z"></path>       
      </g>
    </g>
    <g id="remaining">
      <g id="wy" class="state">
          <path d="M225.916,91.08 223.955,119.249 222.046,147.555 205.548,146.254 196.43,145.386 179.324,143.563 169.252,142.346 148.238,139.482 150.322,125.415 155.446,90.422 156.5,83.459 175.416,86.081 193.044,88.164 212.582,90.075 225.922,91.081 "></path>
          
      </g>
      <g id="wv" class="state">
          <path d="M483.321,151.29l1.215,7.294 c1.966-2.765,3.91-4.66,3.91-4.66c1.353-0.139,2.328-1.744,2.328-1.744c-0.103-0.728,0.145-0.777,0.284-0.832 c0.141-0.055,0.521,0.135,0.521,0.135c1.202,0.861,2.648,0.544,2.648,0.544c1.959-3.994,5.026-2.488,5.026-2.488 c2.762,1.183,3.517,3.661,3.517,3.661c0.11,5.835-4.521-1.488-6.772,0.349c-0.763,0.622-0.752,5.675-1.995,7.207 c-2.002,2.464-3.911,2.729-4.518,6.076c-0.847,4.68-4.912-0.84-5.348,1.766c-0.669,4.034-2.838,7.117-3.854,10.826 c-0.306,1.113,0.234,3.704-0.262,4.515c-0.785,1.29-2.845,1.173-3.98,2.135c-1.172,0.998-4.849,2.376-7.524,2.603 c-4.343,0.185-6.138-1.29-6.922-1.713c-1.387-0.9-3.263-1.466-6.494-5.587c0,0-1.675-1.759-1.822-3.368c0,0,0.635-1.181-0.085-2.751 l-0.091-0.087c4.011,0.106,3.317-4.353,3.906-6.687c0.638-2.512,1.178-1.682,2.388-3.082c0.499-0.575,2.824-4.339,2.824-4.558 c0-1.97,3.08-0.898,4.374-2.991c1.352-2.182,1.823-3.041,2.313-5.519c0.771-3.891,0.089-11.461,0.089-11.461 s0.574-0.222,1.044-0.435l2.253,12.851L483.321,151.29"></path>    
      </g>
      
      <g id="wa" class="state">
          <path d="M42.909,42.356 c-1.464-0.476-1.589-1.535-2.949-2.209c-1.755-0.867-3.091-0.904-4.863-1.476c0.376-1.533,0.752-3.068,1.129-4.602 c-0.167,0.747-0.039,1.854-0.173,2.692c0.205,0.128,1.01,0.127,1.39-0.57c0.835-4.522-1.43-4.066-0.522-6.289 c1.042,0.879,0.995,0.284,3.04,0.087c-0.588-0.595-1.827-1.453-2.606-1.912c-0.086,0.29-0.172,0.58-0.26,0.869 c-0.465-3.702,0.916-8.608-0.174-12.591c-1.357-4.962,0.64-4.887,0.174-7.901c2.414,1.629,4.479,4.54,7.294,5.384 c2.307,0.691,6.804,1.422,6.86,3.472c0.446,0.298,0.815,0.479,1.562,1.043c0.307-0.936,0.591-0.862,1.042-1.65 c0.083,2.296,0.328,2.528,1.043,3.734c0.64,1.999,0.299,1.743-1.303,2.171c-0.075,0.421,0.062,1.36,0.088,1.824 c-0.291-0.087-0.216,0.474-0.216,0.792c0.317,1.492,0.869,1.394,0.869,3.053c-0.32-0.202,0.464,0.687,1.084-0.46 c0.529-0.98-0.209-3.116,0-3.732c0.479-1.422,2.691-2.853,2.43-4.95c-0.085-0.694-0.261-4.388-0.261-5.557 c0.072-0.922-0.052-0.565,0.196-1.453c2.353-2.051-2.697-4.275-0.63-6.623l12.59,3.387l14.241,3.56l16.499,3.821l8.854,1.824 l-0.085,0.521L102.48,50.22l-0.349,2.865c-0.81,1.266,0.323,2.974-0.119,4.566l0.119,1.772l-11.373-2.345l-8.859-2.083 c-4.551,0.439-9.908,0.792-14.761,0.694c-4.823-0.096-7.854-2.328-12.677-3.386c-2.305-0.506-4.228,1.64-6.772,0.086 c-4.157-2.538-0.679-4.289-2.606-8.161C44.718,43.497,43.906,42.877,42.909,42.356"></path>
          
      </g>
      
      <g id="va" class="state">
          <path d="M529.647,176.681 c-0.291,1.743-0.875,2.458-1.575,3.458c-1.76-6.431,1.823-9.597,0.393-11.865l0.511-0.442l2.915-0.958 C531.804,169.308,530.458,171.855,529.647,176.681z"></path>
          <path d="M445.021,202.348 c14.176-1.882,22.237-3.01,22.237-3.01l16.142-2.545l23.186-4.152l22.943-4.707h-0.187c0,0-0.563-1.866-2.866-4.083 c0,0-1.528-1.52-1.805-3.354c0,0-1.43-0.47-1.69-2.132c0,0-0.513-0.155,1.298-0.909c0,0,0.197-1.457-0.302-2.112 c0,0-1.758,0.054-1.411-2.292c0,0,0.707-1.978,0.254-3.134c0,0-1.206-0.253-2.711-0.956c0,0-0.607-0.414-1.758-1.66 c0,0-3.169,0.958-5.178-1.958c0,0-0.471-0.167-1.156,0.201c0,0-1.396,1.271-2.141,0.522c0,0-0.955-1.598,0.711-4.616 c0,0,2.698-2.256-0.172-4.256c0,0-2.369-1.288-3.649-1.041c0,0-0.933-0.336-0.782-1.477c0,0-0.722-1.963-3.212-1.477 c0.11,5.835-4.521-1.488-6.772,0.349c-0.762,0.622-0.752,5.675-1.995,7.207c-2.002,2.464-3.911,2.729-4.517,6.076 c-0.848,4.68-4.913-0.84-5.349,1.766c-0.669,4.034-2.838,7.117-3.854,10.826c-0.306,1.113,0.234,3.704-0.262,4.515 c-0.784,1.29-2.845,1.173-3.98,2.135c-1.172,0.998-4.848,2.376-7.524,2.603c-4.343,0.185-6.138-1.29-6.922-1.713 c0,0-3.532,4.375-5.862,5.511c0,0-1.229,1.089-2.008,3.374c0,0-1.313,3.477-8.695,6.499"></path>
          
      </g>
      <g id="ut" class="state">
          <path d="M169.252,142.346 162.132,198.699 146.936,196.703 132.261,194.533 117.238,192.099 107.08,190.277 119.585,120.379 123.579,121.161 138.166,123.592 150.322,125.415 148.238,139.482 169.252,142.346 "></path>
          
      </g>
      
      
      <g id="sd" class="state">
          <path d="M227.169,77.918l-0.908,13.188 l-0.345-0.026l-1.961,28.169l10.593,0.782l17.714,0.955l17.107,0.607l11.373,0.174l1.13,1.128c1.024,0.559,2.679,1.974,3.82,2.083 c1.062,0.103,1.179-1.282,2.123-1.146c2.342,0.333,4.602-0.896,6.437,0.723c1.007,0.887,2.747,0.617,3.598,1.465 c1.01,1.012,2.604,2.337,3.963,2.916c-1.043-2.792-2.019-5.402-0.49-7.951c0.64-1.068-0.877-4.618-1.215-6.165h1.562l-0.175-25.354 c-0.904-1.458-2.299-1.519-2.299-1.519c-0.616-1.316-1.781-2.649-1.781-2.649c0-1.329,1.942-2.424,1.942-2.424 c1.248-0.686,1.098-2.438,1.098-2.438l-18.323-0.087l-18.059-0.435l-19.45-0.868L227.169,77.918z"></path>
          
      </g>
      
      
      
      <g id="pa" class="state">
          <path d="M529.08,137.659 c0,0,1.813-1.82,2.562-3.072c0,0-3.215-2.382-4.224-3.286c0,0-1.985-1.584-1.909-3.543c0,0,1.081-1.879-0.507-3.47 c0,0,1.392-1.273,1.909-3.214c0,0-0.139-1.561,1.303-2.865c-0.587-0.759-1.367-0.641-2.338-1.049 c-1.534-0.646-1.394-1.146-2.178-2.338c-1.456-2.209-2.377-2.407-4.083-3.993l-9.55,2.169l-14.416,3.039l-12.762,2.518l-8.337,1.477 l-0.607-3.299l-0.088-0.347l-3.039,2.431l-2.777,2.17l-1.218,0.695l3.218,18.755l2.253,12.851l11.027-1.997l18.234-3.472 l20.668-4.427c0.656-3.694,3.563-2.085,3.563-2.085s0.896-1.117,2.012-1.588C527.796,139.717,528.145,138.596,529.08,137.659"></path>
          
      </g>
      <g id="or" class="state">
          <path d="M35.879,39.973 c-0.396,1.81-1.002,3.565-1.781,5.124c-0.426,0.852-0.969,3.299-1.259,4.427c-1.844,8.264-6.327,15.694-9.318,23.684 c0.049,1.333-1.708,3.688-2.167,3.979c-0.542,0.333-0.67,0.122-0.932,0.383c-0.969,2.035-1.833,3.773-3.201,5.552 c-1.003,1.303,0.412,3.09,0.032,4.477c-0.769,2.814-3.106,6.518-0.044,8.9l-0.433-0.088l0.433,0.088l22.577,6.251l19.103,4.862 l17.713,4.168l12.591,2.691l5.209-25.006c0.996-1.178,1.51-2.436,1.65-3.995c0.102-1.117,0.847-0.577,0.174-1.823 c-0.292-0.54-1.541-0.505-1.736-0.869c-1.561-2.903,2.55-5.543,4.124-7.293c2.103-2.336,3.104-5.735,5.303-8.206 c2.995-3.372-1.66-4.405-1.787-7.858l-11.373-2.345l-8.859-2.083c-4.551,0.439-9.908,0.792-14.761,0.694 c-4.823-0.096-7.854-2.328-12.677-3.386c-2.305-0.506-4.228,1.64-6.772,0.086c-4.157-2.538-0.679-4.289-2.606-8.161 c-1.086-2.18-6.147-3.371-8.248-3.908c-0.175,0.295-0.089,0.556,0.26,0.781C36.72,40.79,36.347,40.292,35.879,39.973"></path>
          
      </g>
      
      <g id="oh" class="state">
          <path d="M437.039,129.843c0.86,0.604,3.358,0.866,3.358,0.866c1.819,0.344,3.693,1.281,3.693,1.281c4.032,1.47,4.938,0.639,4.938,0.639 c2.206-2.02,4.858-2.034,4.858-2.034c1.716-0.339,3.324-1.65,3.324-1.65c0.951-1.387,2.043-2.479,2.043-2.479 c2.196-1.868,7.565-4.786,7.565-4.786l3.218,18.755c-0.471,0.213-1.044,0.435-1.044,0.435s0.682,7.57-0.089,11.461 c-0.488,2.478-0.962,3.336-2.313,5.519c-1.294,2.093-4.374,1.021-4.374,2.991c0,0.219-2.325,3.983-2.824,4.558 c-1.21,1.4-1.75,0.57-2.388,3.082c-0.589,2.334,0.104,6.792-3.906,6.687l0.09,0.087c-0.907-1.01-4.581-4.233-5.603-3.301 c-2.431,2.213-2.334,0.542-5.166,0.826c-1.313,0.132-6.262,0.56-7.481-1.037c-2.117-2.785-4.099-3.907-7.278-2.742l-4.341-36.728 l9.463-1.563L437.039,129.843"></path>
          
      </g>
      
      <g id="nv" class="state">
          <path d="M96.835,212.333 c-0.332,1.913-1.21,2.011-1.303,4.862l-13.893-20.494l-32.823-47.844l2.346-9.376l7.728-31.868l17.713,4.168l12.591,2.691 l16.499,3.387l13.893,2.519l-12.504,69.898c-0.62,3.42-0.501,8.78-2.431,11.679c-2.81,4.219-3.006-2.435-6.425-0.826 c-2.25,1.06-1.122,5.028-1.303,7.209C96.826,209.486,97.014,211.294,96.835,212.333z"></path>
          
      </g>
      
      <g id="nj" class="state">
          <path d="M529.08,137.659 c-0.354,0.806-0.342,1.117-0.342,1.117c0,0.828-1.309,1.663-1.309,1.663c-1.303,0.533-1.558,1.351-1.558,1.351c-0.44,1.069-0.782,2.381-0.782,2.381c0.418,0.834,0.344,1.65,0.344,1.65c1.937,1.657,5.124,3.383,5.124,3.383 c1.142-0.575,2.692-0.433,2.692-0.433c0.515,0.801,0.007,2.512,0.007,2.512c0.005,1.166,0.947,0.788,0.947,0.788 c1.356-2.154,1.914-5.649,1.914-5.649c0.265-0.946,1.558-2.772,1.558-2.772c0.273-1.474,1.65-4.081,1.65-4.081 c0.865-2.672-0.261-9.986-0.261-9.986c-1.236,0-3.388-0.174-3.388-0.174c-0.178-2.092,0.521-3.559,0.521-3.559 c1.06-0.225,1.045-1.39,1.045-1.39c0.359-1.056,0.348-3.212,0.348-3.212l-9.378-3.039c-1.439,1.304-1.303,2.865-1.303,2.865 c-0.519,1.941-1.909,3.214-1.909,3.214c1.588,1.59,0.507,3.47,0.507,3.47c-0.076,1.959,1.909,3.543,1.909,3.543 c1.009,0.904,4.224,3.286,4.224,3.286C530.894,135.839,529.08,137.659,529.08,137.659"></path>
          
          
      </g>
      
      
      <g id="nd" class="state">
          <path d="M294.028,37.629 c-0.313,1.484,1.113,3.163,1.131,4.689c0.011,0.95-0.549,1.558-0.391,2.561c0.156,1,0.137,2.071,0.086,3.083 c-0.196,3.9,3.333,7.427,2.561,11.288c-0.278,1.395,0.243,3.579,0.437,5.036c0.274,2.107,0.285,4.11,0.342,6.367 c0.046,1.732,1.164,2.771,1.741,4.313c0.631,1.695,0.629,4.002,0.521,5.47l-18.323-0.087l-18.059-0.435l-19.45-0.868l-17.454-1.129 l2.952-42.287v-0.347v0.347v-0.347l14.674,0.956l22.056,0.955l18.842,0.434L294.028,37.629"></path>
          
      </g>
      
      <g id="mt" class="state">
          <path d="M230.12,35.284v0.347l-2.952,42.287 l-0.908,13.188l-0.339-0.026l-13.34-1.006l-19.538-1.911l-17.628-2.083L156.5,83.459l-1.054,6.963c-1.708-1.573-3-6.225-4.341-1.301 c-2.791-0.584-12.583-2.64-13.633,0.347c-0.896-0.956-1.987-2.725-1.607-3.995c0.895-2.975-2.619-2.185-3.125-4.037 c-0.963-3.533-0.669-8.846-2.821-12.113c-10.733,5.878-3.079-8.625-1.477-14.067c-3.563-0.194-3.516-2.31-4.95-4.775 c-1.95-3.353-4.332-5.618-6.253-8.77c0.32-0.057,0.637-0.117,0.956-0.174c-0.1-1.899-2.79-6.377-2.473-7.953 c0.912-4.527,1.825-9.053,2.733-13.581l13.635,2.692l23.964,4.08l21.014,3.04l13.633,1.649l14.5,1.651l18.148,1.65L230.12,35.284"></path>
          
      </g>
      
      <g id="mn" class="state">
          <path d="M297.414,85.3 c0-1.329,1.942-2.424,1.942-2.424c1.248-0.686,1.098-2.438,1.098-2.438c0.109-1.468,0.111-3.775-0.521-5.47 c-0.577-1.542-1.695-2.581-1.741-4.313c-0.057-2.257-0.067-4.26-0.342-6.367c-0.193-1.457-0.715-3.641-0.437-5.036 c0.772-3.861-2.757-7.387-2.561-11.288c0.051-1.013,0.07-2.084-0.086-3.083c-0.158-1.003,0.401-1.611,0.391-2.561 c-0.018-1.526-1.443-3.206-1.131-4.689h12.071l7.313-0.176l-0.106-5.207c1.325,0.585,2.892,0.043,3.229,1.854 c0.303,1.613,0.683,3.116,1.156,4.688c0.334,1.107-0.063,2.662,1.795,2.662c1.586,0,2.559,0.614,4.131,0.79 c0.594,0.066,1.746-0.034,2.279,0.252c0.53,0.287,0.219,1.128,1.215,1.39c1.342,0.353,2.51-1.048,3.388-1.476 c1.433-0.698,4.87-0.378,6.954,1.902c2.084,2.28,1.555,2.322,3.205,2.788c-0.028-1.624,1.252-1.904,2.604-1.303 c0.394,0.174,0.685,1.013,1.375,1.313c1.022,0.444,1.146,0.947,1.751,1.379c3.877,2.768,4.854-2.28,8.249-1.997 c0.224,2.497,3.195,1.553,5.297,1.302c0.462-0.054,1.396-0.326,1.824-0.174c0.423,0.151,0.66,0.993,0.956,1.129 c1.152,0.534,2.604,0,3.99,0c-0.752,1.207-5.555,3.56-5.555,3.56c-5.043,1.151-8.906,6.068-8.906,6.068 c-1.739,3.037-6.521,7.095-6.521,7.095c-1.587,1.502-2.2,2.118-2.2,2.118c-2.32,1.847-1.492,4.255-1.369,7.341 c0.193,4.943-3.69,2.913-4.273,5.857c-0.201,1.014-1.305,1.7-1.305,2.648c0,0.946,2.52,2.787,2.52,3.344s-1.182,3.958-0.693,6.947 c0.412,2.517-0.033,4.395,3.561,4.992c1.59,0.264,4.763,2.889,5.676,4.324c1.352,2.122,3.576,2.193,5.18,3.794 c1.696,1.695,1.485,4.113,2.082,6.252l-10.595,0.607l-14.588,0.606l-17.539,0.435l-10.508,0.086l-0.175-25.354 c-0.904-1.458-2.299-1.519-2.299-1.519C298.579,86.633,297.414,85.3,297.414,85.3z"></path>
          
      </g>
      <g id="mo" class="state">
          <path d="M380.945,210.855 c0,0-0.713,0.334-1.139,0.965c0,0-0.086,2.721-1.724,6.332l-6.513,0.691c-0.377-0.824-0.523-1.107,0.051-1.895 c0.555-0.762,1.289-1.024,1.841-1.711c1.163-1.449-0.041-2.978-1.371-3.775l-20.317,1.303l-17.804,0.782l-11.201,0.261l-0.174-7.035 l-0.692-30.13c-2.664-1.67-2.218-1.785-3.306-3.47c-1.155-1.79-1.532-0.552-1.948-3.001c-0.254-1.503,3.279-1.523,1.821-3.817 c-0.805-1.267-2.787-0.271-4.384-2.04c-1.393-0.93-0.949-2.861-2.258-3.778c-1.25-0.876-2.592-3.296-2.605-4.733l11.811,0.087 l7.468-0.174l16.321-0.953l7.037-0.782c0.649,1.396,2.291,2.419,3.385,3.387c-1.83,3.621,0.369,7.751,2.605,10.331 c1.895,2.184,3.875,2.746,5.077,4.226c1.472,1.817,0.667,3.871,2.043,5.586c0.435,0.542,2.524-0.501,3.647-0.389 c2.688,0.27,2.258,3.136,1.302,4.904c-3.173,5.88,0.549,5.874,3.819,9.726c5.763-1.576,4.636,7.912,6.426,9.898l1.391,1.821 c0.752-0.524,1.486-0.394,2.171,0.263c0.774,1.66-0.176,3.735-0.606,5.904C381.962,209.02,381.021,209.541,380.945,210.855z"></path>
          
      </g>
      
      
      <g id="md" class="state">
          <path d="M510.415,157.195 c0,0,1.852-0.48,1.852,2.779c0,0-2.41,3.712-1.056,4.517c0,0,2.967-1.659,9.8,2.714c0,0,0.149-1.699-2.862-5.975 c0,0-4.518-7.562,1.496-13.448c0.476-0.464,1.016-0.046,0.499,1.863c-0.79,2.927-1.353,7.26,0.867,10.423 c0,0,0.705,0.772,0.454,2.857c0,0,2.008-0.478,4.294,0.97c0,0,1.936,0.797,1.23,3.71l1.475,0.669l0.511-0.442l2.915-0.958 c0,0,1.625-4.796,1.709-7.594l-6.609,1.476l-4.767-17.365l-20.668,4.427l-18.234,3.472l1.216,7.294 c1.966-2.765,3.909-4.66,3.909-4.66c1.354-0.139,2.329-1.744,2.329-1.744c-0.103-0.728,0.145-0.777,0.284-0.832 c0.14-0.055,0.521,0.135,0.521,0.135c1.201,0.861,2.648,0.544,2.648,0.544c1.959-3.994,5.026-2.488,5.026-2.488 c2.762,1.183,3.517,3.661,3.517,3.661c2.49-0.486,3.212,1.477,3.212,1.477c-0.149,1.14,0.782,1.477,0.782,1.477 C508.046,155.906,510.415,157.195,510.415,157.195"></path>
          
          
      </g>
      
      
      <g id="ky" class="state">
          <path d="M380.945,210.855l15.37-1.303 l-0.124-2.227c19.962-1.463,36.651-3.359,48.828-4.979l0.008-0.002c7.383-3.021,8.696-6.499,8.696-6.499 c0.778-2.285,2.008-3.374,2.008-3.374c2.33-1.137,5.862-5.511,5.862-5.511c-1.387-0.9-3.263-1.466-6.494-5.587 c0,0-1.675-1.759-1.823-3.368c0,0,0.636-1.181-0.085-2.751c-0.907-1.01-4.581-4.233-5.603-3.301 c-2.431,2.213-2.334,0.542-5.166,0.826c-1.313,0.132-6.262,0.56-7.481-1.037c-2.117-2.785-4.099-3.907-7.278-2.742 c0,0-0.775,0.507-0.078,1.674c0,0,1.28,2.111-1.111,3.657l-0.604,0.259c0,0-1.795,0.281-1.998,0.188 c-2.514-1.159-2.012,3.095-3.289,4.602c-1.491,1.759-2.027,2.213-2.991,4.209c-0.52,1.076,0.539,1.707-0.958,2.431 c-0.707,0.343-2.417-0.306-3.007-0.771c-1.801-1.42-2.574,0.957-3.069,2.667c-0.095,0.327-0.832,0.515-1.111,0.381 c-1.684-0.806-3.227-0.494-4.099,1.095c-0.131,0.238-1.104,0.187-1.467-0.022c-3.498-2.02-5.979,1.558-9.213,1.686 c-0.063,1.691-0.467,1.047-0.285,3.229c0.182,2.182-2.21,2.312-2.21,2.312c-2.763,1.158-1.508,2.614-1.508,2.614 c0.905,0.904,0.604,1.958,0.604,1.958c-0.961,1.25-1.908,0.298-1.908,0.298c-3.664-1.713-4.282-1.174-4.282-1.174 c-2.759,1.449-1.351,3.439-1.351,3.439c0.773,1.662-0.177,3.736-0.607,5.905C381.962,209.02,381.021,209.541,380.945,210.855"></path>
          
      </g>
      
      <g id="in" class="state">
          <path d="M402.046,133.839l5.558-0.522 l15.599-1.888l4.462,37.573c0,0-0.775,0.507-0.078,1.674c0,0,1.28,2.111-1.111,3.657l-0.604,0.259c0,0-1.795,0.281-1.998,0.188 c-2.514-1.159-2.013,3.095-3.289,4.602c-1.491,1.759-2.027,2.213-2.991,4.209c-0.52,1.076,0.539,1.707-0.958,2.431 c-0.707,0.343-2.417-0.306-3.007-0.771c-1.801-1.42-2.574,0.957-3.069,2.667c-0.095,0.327-0.832,0.515-1.111,0.381 c-1.684-0.806-3.227-0.494-4.099,1.095c-0.131,0.238-1.104,0.187-1.467-0.022c-3.498-2.02-5.979,1.558-9.213,1.686 c0,0-0.14-3.059,0.347-5.47c0.301-1.497,2.567-3.343,2.736-5.166c0.213-2.318,2.103-3.514,0.996-6.124 c-0.874-2.068-2.52-3.779-0.606-5.731l-3.126-33.342C397.353,137.45,399.979,135.421,402.046,133.839"></path>
          
      </g>
      <g id="il" class="state">
          <path d="M355.244,157.369 c1.451-2.975,2.426-3.514,3.301-6.556c0.382-1.335,1.441-1.476,1.302-2.997c-0.095-1.042-1.76-2.045-1.735-2.69 c0.105-2.841,0.889-2.837,3.467-3.365c3.338-0.683,6.926-5.62,5.649-9.095c-0.688-1.876-3.306-3.884-4.196-4.447 c-0.89-0.563-1.272-1.589-1.272-1.589l16.409-0.954l12.854-1.128c1.063,5.287,1.374,6.245,3.992,10.68l3.126,33.342 c-1.912,1.952-0.268,3.663,0.606,5.731c1.105,2.61-0.783,3.805-0.996,6.124c-0.169,1.823-2.436,3.669-2.736,5.166 c-0.484,2.411-0.347,5.47-0.347,5.47c-0.063,1.691-0.466,1.047-0.285,3.229c0.181,2.182-2.21,2.312-2.21,2.312 c-2.764,1.158-1.508,2.614-1.508,2.614c0.904,0.904,0.604,1.958,0.604,1.958c-0.961,1.25-1.906,0.298-1.906,0.298 c-3.666-1.713-4.283-1.174-4.283-1.174c-2.758,1.45-1.352,3.44-1.352,3.44c-0.685-0.654-1.419-0.787-2.171-0.263l-1.391-1.821 c-1.79-1.987-0.663-11.476-6.427-9.898c-3.271-3.852-6.992-3.846-3.818-9.726c0.956-1.768,1.387-4.634-1.303-4.904 c-1.121-0.112-3.213,0.931-3.646,0.389c-1.376-1.715-0.572-3.769-2.043-5.586c-1.202-1.48-3.184-2.042-5.077-4.226 C355.613,165.121,353.414,160.99,355.244,157.369"></path>
          
      </g>
      <g id="id" class="state">
          <path d="M89.194,114.474l16.499,3.387 l13.893,2.519l3.994,0.782l14.587,2.431l12.157,1.824l5.124-34.994c-1.708-1.573-3-6.225-4.341-1.301 c-2.791-0.584-12.583-2.64-13.633,0.347c-0.896-0.956-1.987-2.725-1.607-3.995c0.895-2.975-2.619-2.185-3.125-4.037 c-0.963-3.533-0.669-8.846-2.821-12.113c-10.733,5.878-3.079-8.625-1.477-14.067c-3.563-0.194-3.516-2.31-4.95-4.775 c-1.95-3.353-4.332-5.618-6.253-8.77c0.32-0.057,0.637-0.117,0.956-0.174c-0.1-1.899-2.79-6.377-2.473-7.953 c0.912-4.527,1.825-9.053,2.733-13.581l-2.082-0.434l-7.035-1.476l-0.085,0.521L102.48,50.22l-0.349,2.865 c-0.81,1.266,0.323,2.974-0.119,4.566l0.119,1.772l-0.26-0.868l0.26,0.868c0.126,3.453,4.782,4.486,1.787,7.858 c-2.199,2.471-3.2,5.87-5.303,8.206c-1.574,1.75-5.685,4.391-4.124,7.293c0.195,0.363,1.444,0.329,1.736,0.869 c0.673,1.246-0.072,0.706-0.174,1.823c-0.14,1.559-0.654,2.817-1.65,3.995L89.194,114.474"></path>
          
      </g>
      
      
      
      
      <g id="de" class="state">
          <path d="M522.223,143.39 c0.656-3.694,3.563-2.085,3.563-2.085c-1.51,2.165-1.058,3.386-1.058,3.386c1.333,2.487,3.043,4.624,3.043,4.624 c0.603,1.76,1.781,4.597,3.45,5.04c0.003,0.001,0.004,0.002,0.006,0.003c1.663,0.683,1.541,1.689,1.541,1.689 c0.153,2.086,1.357,3.136,1.357,3.136l-0.526,0.096l-6.608,1.476L522.223,143.39"></path>
          
          
      </g>
      <g id="dc" class="state">
          
          
      </g>
      
      
      <g id="ca" class="state">
          <path d="M96.748,222.144 c0.185,0.693,0.448,1.646,0.39,2.345c-0.097,1.177,1.344,1.356,1.693,2.347c0.818,2.3-1.586,1.942-3.212,3.387 c-1.641,1.455-1.243,2.817-1.822,4.772c-0.592,1.996-2.716,3.05-3.388,4.604c-0.305,0.703-0.785,3.846-0.433,4.604 c0.318,0.688,3.934,1.926,1.432,3.517c-1.271,0.808-1.118,1.043-2.823,0.912l-27.872-2.867c0,0-0.673-1.362-1.478-2.168 c1.409-5.276-0.117-10.894-4.472-14.459c-0.903-0.739-3.982-2.321-4.296-2.737c-1.172-1.727,0.021-3.883-1.737-5.207 c-6.78-5.102-18.361-8.845-21.1-15.543c-0.58-1.414,2.115-3.863,1.041-5.341c-1.726-2.375-1.615-3.082-2.952-5.947 c-1.502-3.219-5.67-9.258-5.904-12.592c-0.088-1.246,1.648-4.891,1.648-5.557c0.057-0.73-1.318-3.917-1.476-4.599 c-0.678-4.443-5.298-8.979-0.609-12.854c-0.171,3.296,0.446,3.681,2.779,5.818c-0.459-1.695-2.857-7.266-1.649-8.42 c1.649-1.576,8.896,1.932,9.812,2.777c-1.028-1.968-1.028-1.968-2.17-2.777c-1.143-0.81-8.885-5.013-9.726,2.169 c-1.668-1.569-3.582-3.166-3.675-3.733c0-0.526,0.29-0.997,0.29-2.864c0-2.068-3.285-5.425-4.604-10.595 c-1.238-4.856,2.664-10.349,1.042-15.542c-2.604-8.336-1.955-7.449,1.476-14.153c2.489-4.861,2.129-11.252,4.254-14.935 l22.577,6.251l19.103,4.862l-7.728,31.868l-2.346,9.376l32.823,47.844l13.893,20.493C95.532,220.797,96.288,220.429,96.748,222.144z"></path>
          
      </g>
      <g id="ar" class="state">
          <path d="M372.525,232.822 c0,0,0.545-1.746,1.477-2.678c0,0,0.761-0.773,0.813-2.043c0,0-0.162-1.351,0.627-2.402c0,0,1.603-3.522,2.645-7.549l-6.514,0.692 c-0.377-0.824-0.522-1.106,0.053-1.896c0.554-0.76,1.289-1.023,1.84-1.711c1.163-1.449-0.041-2.977-1.371-3.774l-20.318,1.303 l-17.803,0.782l-11.201,0.261c0,0-0.019,1.649,0.647,4.046c0,0,1.567,6.805,1.784,11.758l0.164,25.072v-0.021 c0.313,0.145,0.576,0.324,0.879,0.563c0.535,0.431,3.074-0.188,4.254,0.261l0.262,7.641l14.5-0.521l19.102-1.039 c0.531-3.121,0.177-5.56,0.177-5.56c-1.509-1.946-0.525-4.86-0.525-4.86s0.862-1.496,1.353-2.195c0,0,0.845-1.932,1.012-3.034 c0,0,0.189-1.461,1.262-2.345c0,0,2.192-2.811,2.924-5.607c0,0,0.148-1.234,0.461-2.048 C371.021,235.917,372.425,232.998,372.525,232.822z"></path>
          
      </g>
    </g>
  </svg>

</div>

</section>


<?php
get_footer();
?>