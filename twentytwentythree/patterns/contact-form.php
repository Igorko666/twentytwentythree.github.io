<?php
/**
 * Title: Contact form
 * Slug: twentytwentythree/contact-form
 * Categories: featured
 * Keywords: Contact form
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      position: relative;
      width: 100%;
      max-width: 758px;
      border-radius: 6px;
      background: rgb(229, 229, 229);
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.06), 0px 1px 3px rgba(0, 0, 0, 0.1);
			margin: 193px auto 0;
    }

    .row {
      font-size: 48px;
      font-weight: 600;
      color: rgb(17, 24, 39);
      margin: 0 0 26px;
			letter-spacing: -2.14px;
    }

    .data {
      display: flex;
      align-items: center;
      margin-bottom: 19px;
      justify-content: flex-end;
    }

    .entry_data {
      padding: 0 150px 44px 67px;
    }

    .form_text {
      margin-right: 29px;
      text-align: right;
      font-size: 15px;
      font-weight: 500;
      color: rgb(75, 85, 99);
      display: flex;
    }

    .form_filling {
      padding: 13px;
      width: 370px;
			box-sizing: border-box;
      border: 1px solid rgb(209, 213, 219);
      border-radius: 6px;
      box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.07);
    }
    
    .selection{
      display: flex;
    }

    .btn.btn-again {
      width: 110px;
      display: flex;
      align-items: center;
    } 

    .btn {
      width: 96px;
      height: 44px;
      background-color: rgb(79, 70, 229);
      color: white;
      font-size: 15px;
      font-weight: 500;
      border-radius: 6px;
      cursor: pointer;
      border: none;
    }

    .btn.btn-continue {
      display: flex;
      align-items: center;
    }

    .btn:hover {
      background-color: rgb(67, 56, 202);
    }

    .btn-back {
      display: grid;
      align-items: center;
      margin-left: 19px;
      background: rgb(244, 244, 244);
      color: rgb(79, 70, 229);
    }

    .step-progress {
      display: flex;
      justify-content: space-between;
      padding: 47px 187px 29px 68px;
    }

    .step {
      padding: 10px 20px;
      background-color: rgb(255, 255, 255);
      border-radius: 6px;
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.06), 0px 1px 3px rgba(0, 0, 0, 0.1);
      font-size: 15px;
      color: rgb(55, 65, 81);
    }

    .step.active {
      color: rgb(79, 70, 229);
    }

    .required{
      font-size: 12px;
      line-height: 135%;
      letter-spacing: -0.18px;
      margin-left: 5px;
      color: rgba(75, 85, 99, 0.5);
    }

    .row_title{
      padding-top: 54px;
      padding-left: 207px;
    }

		.main.active {
			display: block;
		}

    .main {
			display: none;
		}

		#tab-main-done .data{
			align-items: flex-start;
			flex-direction: column;
		}

    #tab-main-price .data {
      display: flex;
      align-items: center;
      margin-bottom: 19px;
      flex-direction: row-reverse;
    }

    .d_price {
      font-size: 144px;
      font-weight: 600;
      line-height: 100%;
      letter-spacing: -2.14px;
      text-align: left;
    }
	</style>
</head>
<body>

<div class="container">
	<div class="wrapper">
		<div class="step-progress">
			<div class="step active"
					 aria-controls="tab-main-contact"
					 aria-selected="true"
					 id="tab-heading-contact"
					 role="tab">
				<span>Contact Info</span>
			</div>
			<div class="step"
					 aria-controls="tab-main-quantity"
					 aria-selected="false"
					 id="tab-heading-quantity"
					 role="tab">
				<span>Quantity</span>
			</div>
			<div class="step"
					 aria-controls="tab-main-price"
					 aria-selected="false"
					 id="tab-heading-price"
					 role="tab">
				<span>Price</span>
			</div>
			<div class="step"
					 aria-controls="tab-main-done"
					 aria-selected="false"
					 id="tab-heading-done"
					 role="tab">
				<span>Done</span>
			</div>
		</div>
		<div class="entry_data">

			<div class="main active"
					 aria-labelledby="tab-heading-contact"
					 tabindex="0" role="tabpanel"
					 id="tab-main-contact">
				<h3 class="row">Contact Info</h3>

				<form>
					<div class="data">
						<label for="name" class="form_text">Name</label>
						<input type="text" class="form_filling" id="name" name="name">
					</div>
					<div class="data">
						<label for="email" class="form_text">Email<span class="required">required</span></label>
						<input type="email" class="form_filling" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
					</div>
					<div class="data">
						<label for="phone" class="form_text">Phone</label>
						<input type="tel" class="form_filling" name="phone" id="phone">
					</div>

					<button type="submit" class="btn">Continue</button>
				</form>
			</div >

			<div class="main"
					 aria-labelledby="tab-heading-quantity"
					 tabindex="0" role="tabpanel"
					 id="tab-main-quantity">
				<h3 class="row">Quantity</h3>
				<form>
					<div class="data">
						<label for="quantity" class="form_text">Quantity<span class="required">required</span></label>
						<input type="number" class="form_filling" name="quantity" id="quantity" required min="0" max="1000">
					</div>

          <div class="selection">
            <button type="submit" class="btn">Continue</button>
            <div class="btn btn-back">Back</div>
          </div>
				</form>
			</div >

			<div class="main"
					 aria-labelledby="tab-heading-price"
					 tabindex="0" role="tabpanel"
					 id="tab-main-price">
				<h3 class="row">Price</h3>

				<div class="data">
					<h2><span id="priceInner" class="d_price"></span></h2>
				</div>

        <div class="selection">
          <div class="btn btn-continue">Continue</div>
				  <div class="btn btn-back">Back</div>
        </div>
				
			</div>

			<div class="main"
					 aria-labelledby="tab-heading-done"
					 tabindex="0" role="tabpanel"
					 id="tab-main-done">
				<h3 class="row">Done</h3>

				<div class="data">
					<p>Name: <span id="nameInner"></span></p>
					<p>Email: <span id="emailInner"></span></p>
					<p>Phone: <span id="phoneInner"></span></p>
					<p>Quantity: <span id="quantityInner"></span></p>
				</div>

        <div class="btn btn-again">Start Again</div>
			</div >
		</div>  
	</div>
</div>
<div class="row_title">
    <div class="text_t">
        <h4>Title</h4>
        <p>This is the description</p>
    </div>
</div>


<script>
  const headings = Array.from(document.querySelectorAll('.step'));
  const contents = Array.from(document.querySelectorAll('.main'));
  const buttonsNext = document.querySelectorAll('.btn-continue');
  const buttonsBack = document.querySelectorAll('.btn-back');
  const buttonAgain = document.querySelector('.btn-again');
  const forms = document.querySelectorAll('form');

  let name, email, phone, quantity;

  buttonAgain.addEventListener('click', () => {
    document.querySelectorAll('input').forEach(input => input.value = '');

    ['nameInner', 'emailInner', 'phoneInner', 'quantityInner'].forEach(id => {
      document.querySelector(`.data #${id}`).textContent = '';
    });

    setActiveTab(headings[0]);
  });

  buttonsNext.forEach(button => {
    button.addEventListener('click', () => {
      const nextHeading = document.querySelector('.step.active').nextElementSibling;

      if (nextHeading) setActiveTab(nextHeading);
    });
  });

  buttonsBack.forEach(button => {
    button.addEventListener('click', () => {
      const prevHeading = document.querySelector('.step.active').previousElementSibling;

      if (prevHeading) setActiveTab(prevHeading);
    });
  });

  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(form);

      name = formData.get("name") || name;
      email = formData.get("email") || email;
      phone = formData.get("phone") || phone;
      quantity = formData.get("quantity") || quantity;

      const nextHeading = document.querySelector('.step.active').nextElementSibling;

      if (nextHeading) setActiveTab(nextHeading);
    });
  });

  function setActiveTab(trigger) {
    const triggerIndex = headings.indexOf(trigger);

    if (triggerIndex === 2) {
      if (quantity >= 1 && quantity <= 10) {
        document.querySelector('.data #priceInner').textContent = '$10';
      } else if (quantity >= 11 && quantity <= 100) {
        document.querySelector('.data #priceInner').textContent = '$100';
      } else {
				document.querySelector('.data #priceInner').textContent = '$1000';
			}
    }

    if (triggerIndex === 3) {
      document.querySelector('.data #nameInner').textContent = name;
      document.querySelector('.data #emailInner').textContent = email;
      document.querySelector('.data #phoneInner').textContent = phone;
      document.querySelector('.data #quantityInner').textContent = quantity;
    }

    contents.forEach((content, index) => {
      content.classList.toggle('active', index === triggerIndex);
    });

    headings.forEach(item => {
      item.classList.toggle('active', item === trigger);
      item.setAttribute('aria-selected', item === trigger);
      item.setAttribute('tabindex', item === trigger ? '0' : '-1');
    });
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

