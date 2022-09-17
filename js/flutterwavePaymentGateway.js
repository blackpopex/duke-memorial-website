//EMPTY ALL INPUT VALUES ON REFRESH
document.getElementById("fname").value = " ";
document.getElementById("lname").value = " ";
document.getElementById("email-address").value = " ";
document.getElementById("payment_for").value = "Select reason for payment";
document.getElementById("amount").value = "0000";

//CHANGE AMOUNT VALUES BASED ON USER SELECTED VALUE
rson_payment = document.getElementById("payment_for");
payment_amount = document.getElementById("amount");

function inputAmount() {
  if (rson_payment.value == "Select reason for payment") {
    payment_amount.value = 0000;
  } else if (rson_payment.value == "General Consultation") {
    payment_amount.value = 1000;
  } else if (rson_payment.value == "Gynaecologist Review") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Admission Deposit") {
    payment_amount.value = 200000;
  } else if (rson_payment.value == "Neurosurgery Consultation") {
    payment_amount.value = 50000;
  } else if (rson_payment.value == "Orthopadic Consultation") {
    payment_amount.value = 12000;
  } else if (rson_payment.value == "ENT Consultation") {
    payment_amount.value = 7500;
  }
}

function makePayment() {
  FlutterwaveCheckout({
    public_key: "FLWPUBK_TEST-8dd34ef5182a184557d89c065c01697d-X",
    tx_ref: "titanic-48981487343MDI0NzMx",
    amount: document.getElementById("amount").value,
    currency: "NGN",
    payment_options: "card, banktransfer, ussd",
    redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
    meta: {
      consumer_id: 23,
      consumer_mac: "92a3-912ba-1192a",
    },
    customer: {
      email: document.getElementById("email-address").value,
      phone_number: "08102909304",
      name: "Johnny",
    },
    customizations: {
      title: "Duke Hospital",
      description:
        "Payment for " + document.getElementById("payment_for").value,
      logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
    },
  });
}

//Angular.js Application
