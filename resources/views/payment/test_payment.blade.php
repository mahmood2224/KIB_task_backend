<script src="https://paylink.sa/assets/js/paylink.js"></script>


<button onclick="regularPayment()"> reqular payment</button>
<button onclick="applePay()"> apple payment</button>

<script>
    let payment = new PaylinkPayments({mode: 'test', defaultLang: 'ar', backgroundColor: '#EEE'});
    let order = new Order({
        callBackUrl: 'http://sahel.ahmeds.club/api/callback', // callback page URL (for example http://localhost:6655 processPayment.php) in your site to be called after payment is processed. (mandatory)
        clientName: 'John Smith', // the name of the buyer. (mandatory)
        clientMobile: '0509200900', // the mobile of the buyer. (mandatory)
        amount: 50, // the total amount of the order (including VAT or discount). (mandatory). NOTE: This amount is used regardless of total amount of products listed below.
        orderNumber: 'ANY_UNIQUE_ORDER', // the order number in your system. (mandatory)
        clientEmail: 'myemail@example.com', // the email of the buyer (optional)
        products: [ // list of products (optional)
            {title: 'Dress 1', price: 120, qty: 2},
            {title: 'Dress 2', price: 120, qty: 2},
            {title: 'Dress 3', price: 70, qty: 2}
        ],
    });
    function regularPayment() {
        payment.openPayment("{{$token}}", order, (data)=>{
            console.log("regular_payment",data)
        });
    }

    function applePay() {
        payment.openApplePay("{{$token}}", order, (data)=>{
            console.log("applePay",data)
        });
    }
</script>
