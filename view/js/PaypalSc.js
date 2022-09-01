
paypal.Buttons({
    style:{
        shape: 'pill',
        label: 'pay',
    },
    createOrder: (data, actions) => {
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: '100' // Can also reference a variable or function
            }
            }]
        });
        },

        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
              // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
              // When ready to go live, remove the alert and show a success message within this page. For example:
                window.location.href="../module/pagoComp.php"
            });
        },

        onCancel:(data)=>{
            alert("El pago ha sido cancelado")
        }
}).render('#paypal-button-container');
