<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Form</title>  
    <link rel="stylesheet" href="{{asset('assets/css/StripeCheckoutstyle.css')}}">
</head>
<body>
    <main class="container">
        <section class="ui">
            <div class="container-left">
                <form id="credit-card">
                    <div class="number-container">
                        <label>Card Number</label>
                        <input type="text" name="card-number" id="card-number" maxlength="19" placeholder="1234 5678 9101 1121"
                        required
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    </div>
                    <div class="name-container">
                        <label>Holder</label>
                        <input type="text" name="name-text" id="name-text" maxlength="30" placeholder="NOAH JACOB"
                        required
                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key == ' '">
                    </div>
                    <div class="infos-container">
                        <div class="expiration-container">
                            <label>Valid-thru</label>
                            <input type="text" name="valid-thru-text" id="valid-thru-text" maxlength="5" placeholder="02/40"
                            required
                            
                            onkeypress="return event.charCode >=48 && event.charCode <= 57">
                        </div>
                        <div class="cvv-container">
                            <label>CVV</label>
                            <input type="text" name="cvv-text" id="cvv-text" maxlength="4" placeholder="1234"
                            required
                            onkeypress="return event.charCode >=48 && event.charCode <= 57">
                        </div>
                    </div>
                    <input type="submit" value="ADD" id="add">
                </form>
            </div>
            <div class="container-right">
                <div class="card">
                    <div class="intern">
                        <img class="approximation" src="{{asset('assets/images/aprox.png')}}" alt="aproximation">
                        <div class="card-number">
                            <div class="number-vl">1234 5678 9101 1121</div>
                        </div>
                        <div class="card-holder">
                            <label>Holder</label>
                            <div class="name-vl">NOAH JACOB</div>
                        </div>
                        <div class="card-infos">
                            <div class="exp">
                                <label>valid-thru</label>
                                <div class="expiration-vl">02/40</div>
                            </div>
                            <div class="cvv">
                                <label>CVV</label>
                                <div class="cvv-vl">123</div>
                            </div>
                        </div>
                        <img class="chip" src="{{asset('assets/images/chip.png')}}" alt="chip">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{asset('assets/stripeCheckout.js')}}"></script>
</body>
</html>