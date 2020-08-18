@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<div class="ct-pageWrapper" id="ct-js-wrapper">
    <section class="company-heading intro-type" id="parallax-one">
      <div class="container">
        <div class="row product-title-info">
          <div class="col-md-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div>
      <div class="parallax" id="parallax-cta" style="background-image:url(images/image2.jpg); height:600px;"></div>
    </section>
    <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
      <div class="container text-center"><br><br><br><br>
        <br><br><br><br>
        <h2>WHAT DRIVES US</h2>
        <h3>Your support</h3>
        <div class="col-md-8 col-md-offset-2">
          <div class="red-border"></div>
          <p class="ct-u-size22 ct-u-fontWeight300 marginTop40"> Just like there are insurance agents who will help you buy a policy, there are websites as well that you can buy a policy from. Ensure that you have done your research before choosing and investing in an insurance policy.</p>
          <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
        </div>
      </div>
    </section>
    
  </div>
  <main>
    <div class="container ct-u-paddingTop40 ct-u-paddingBottom100">
      <div class="row">
        <div class="col-md-12 ct-content">
          <section class="clients-home">
            <div class="container">
              <div class="clients-logos text-center">
                <div class="row">
                  <div class="col-md-4 client-logos-repeater">
                    <a href="" class="Zeina"><img src="images/image2.jpg"></a>
                    <div class="logo-title">
                      <div class="displayTable">
                        <div class="displayTableCell">Zeina - 0</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 client-logos-repeater">
                    <a href="" class="Logic"><img src="images/image1.jpg" ></a>
                    <div class="logo-title">
                      <div class="displayTable">
                        <div class="displayTableCell">Logic</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 client-logos-repeater">
                    <a href="" class="Smart"><img src="images/image3.jpg" ></a>
                    <div class="logo-title">
                      <div class="displayTable">
                        <div class="displayTableCell">Smart</div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
  @endsection